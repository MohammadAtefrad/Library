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
                    <p class="font-weight-bold">تاریخ انتشار : {{ jdate($article->published_date)->format('%d %B %Y') }}
                    </p>
                    <p class="font-weight-bold text-success">وضعیت : {{ $article->articleStatus->article_status }}</p>
                </div>
            </div>
            <hr class="">
            <p class="lead">{{ $article->description }}.</p>
            <a class="btn btn-success btn-lg" href="{{ route('article.download' , ['article'=>$article->id]) }}"
                role="button">دانلود</a>
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
            <hr>
            @endif
            {{-- end message --}}
            <form role="form" method="POST" action="{{ route('articlecomment.add' , ['article'=>$article->id]) }}">
                {{ csrf_field() }}
                <label for="body">: متن</label>
                <div class="form-group">
                    <textarea name="body" class="form-control" rows="3">{{ old('body') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-1">ارسال</button>
            </form>
        </div>
        @else
        <a href="/login">برای ارسال کامنت ابتدا وارد شوید</a>
        @endauth
        <hr>
        <!-- Posted Comments -->
        @include('article.replies', ['comments' => $article->articleComments])
    </div>
</div>
@endsection
