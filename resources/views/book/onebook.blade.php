@extends('layoutbook')
@section('content')
    <div class="col-8 col-md-9 text-right">
        <div class="d-flex flex-column">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <a href="#"><img class="float-left shadow" src="/img/blog/book.jpg" alt="img"></a>
                    </div>
                    <div class="col-12 col-md-6">
                        <h1 class="display-5">{{ $book->name }}</h1>
                        <p class="font-weight-bold">ناشر : {{ $book->publisher }}</p>
                        <p class="font-weight-bold">نویسنده : {{ $book->author }}</p>
                        <p class="font-weight-bold">دسته بندی : {{ $book->BookCategory->book_category }}</p>
                        <p class="font-weight-bold">تاریخ انتشار : {{ jdate($book->published_date)->format('%d %B %Y') }}</p>
                        <p class="font-weight-bold text-success" >وضعیت کتاب : {{ $book->BookStatus->book_status }}</p>     
                    </div>
                </div>                
                <hr class="my-4 shadow">
                <p class="lead">{{ $book->description }}.</p>
                <a class="btn btn-success btn-lg" href="#" role="button">سفارش کتاب</a>
            </div>
            <hr>
            <!-- Comments -->
            @if (auth()->check())
            <div class="well">
                @include('layouts.errors')
                <h4>نظرات</h4>
                <hr>
                {{-- flash welcoming message --}}
                @if ($message=session('commentmessage'))
                <div class="col-12 my-0 alert alert-success text-center" style="position-top=48px">
                {{$message}}
                </div>
                <hr>
                @endif
                {{-- end message --}}
                <form role="form" method="POST" action="{{ route('bookcomment.add' , ['book'=>$book->id]) }}">
                    {{ csrf_field() }}
                    <label for="body">متن :</label>
                    <div class="form-group">
                        <textarea name="body" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </form>
            </div>
            @else
            <a href="/register">برای ارسال کامنت باید عضو وبسایت باشید</a>
            @endif
            <hr>
            <!-- Posted Comments -->
            @foreach ($comments as $comment)
            <div class="media pb-1 border">
                <div class="d-flex flex-wrap flex-row-reverse media-body text-right">
                    <h6 class="col-12 col-md-6" style="background-color: rgb(237, 237, 237);">{{$comment->user->name}}</h6>
                    <h6 class="col-12 col-md-6" style="background-color: rgb(237, 237, 237);"><small> در {{ jdate($comment->created_at)->format('%d %B %Y') }}</small></h6>
                    <p class="col-12">{{$comment->body}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div><!-- End main -->
@endsection
