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
                @if (auth()->check())
                    @if($book->BookStatus->book_status == "موجود")
                        <a class="btn btn-success btn-lg" href="{{ route('book.reserve' , ['book' => $book->id]) }}" role="button">سفارش کتاب</a>
                    @else
                        <a class="btn btn-warning btn-lg">در حال حاضر امکان رزرو کتاب وجود ندارد</a>
                    @endif
                @else
                    {{-- <div class="alert alert-warning col-6" role="alert"> --}}
                        <a href="/register" class="btn btn-warning btn-lg">برای رزرو کتاب باید عضو وبسایت باشید</a>
                    {{-- </div> --}}
                @endif
            </div>
            <hr>
            <!-- Comments -->
            @auth
                <div class="well px-3 pt-3">
                    @include('layouts.errors')
                    <h4>نظرات</h4>
                    <hr>
                    {{-- flash welcoming message --}}
                    @if ($message=session('commentmessage'))
                    <div class="col-12 my-0 alert alert-success text-center" style="position-top=48px">
                        {{$message}}
                    </div>
                    @endif
                    {{-- end message --}}
                    <form role="form" method="POST" action="{{ route('bookcomment.add' , ['book'=>$book->id]) }}">
                        {{ csrf_field() }}
                        <label for="body">متن :</label>
                        <div class="form-group">
                            <textarea name="body" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-1">ارسال</button>
                    </form>
                </div>
            @else
                <a href="/login">برای ارسال کامنت ابتدا وارد شوید</a>
            @endauth
            <hr>
            <!-- Posted Comments -->
            @foreach ($book->bookComments as $comment)
                <div class="d-flex flex-column px-3 pt-3 comments">
                    <div class="d-inline-flex flex-row-reverse text-right">
                        <div class="px-2" style="color:#FF2654">{{$comment->user->name}}</div>
                        <span>|</span>
                        <div class="px-2" style="color:#999"><small> در {{ jdate($comment->created_at)->format('%d %B %Y') }}</small></div> 
                    </div>
                    <div class="px-4">
                        <p class="pt-2 my-0">{{$comment->body}}</p>
                        <hr>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
