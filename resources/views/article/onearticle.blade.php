@extends('layoutarticle')
@section('content')
    <div class="col-8 col-md-9 text-right">
        <div class="d-flex flex-column">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <a href="#"><img class="float-left shadow" src="/img/blog/book.jpg" alt="img"></a>
                    </div>
                    <div class="col-12 col-md-6">
                        <h1 class="display-5">{{ $article->title }}</h1>
                        <p class="font-weight-bold">نویسنده : {{ $article->author }}</p>
                        <p class="font-weight-bold">دسته بندی : {{ $article->articleCategory->article_category }}</p>
                        <p class="font-weight-bold">تاریخ انتشار : {{ jdate($article->published_date)->format('%d %B %Y') }}</p>
                        <p class="font-weight-bold text-success" >وضعیت  : {{ $article->articleStatus->article_status }}</p>     
                    </div>
                </div>                
                <hr class="my-4 shadow">
                <p class="lead">{{ $article->description }}.</p>
                <a class="btn btn-success btn-lg" href="#" role="button">دانلود</a>
            </div>
            <hr>
            <!-- Comments -->
            @if (auth()->check())
            <div class="well">
                @include('layouts.errors')
                <h4>ارسال کامنت :</h4>
                <hr>
                <form role="form" method="POST" action="{{ route('comment.add' , ['article'=>$article->slug]) }}">
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
            <div class="media">
                <div class="media-body">
                    <h5 class="">
                        <small>ارسال شده در تاریخ {{ jdate($comment->created_at)->format('%d %B، %Y') }}</small>
                        {{$comment->user->name}}
                    </h5>
                    {{$comment->body}}
                </div>
            </div>
            @endforeach
        </div>
    </div><!-- End main -->
@endsection
