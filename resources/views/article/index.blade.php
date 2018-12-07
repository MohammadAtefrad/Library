@extends('layoutarticle')
@section('content')
<div class="col-8 col-md-9 text-right">
    <div class="d-flex flex-column">
        @foreach ($articles as $article)
        <div class="jumbotron shadow">
            <div class="row">
                <div class="col-12 col-md-6">
                    <a href="{{ route('article.onearticle' , ['article' => $article->id]) }}"><img class="float-left shadow" src="/img/blog/book.jpg" alt="img"></a>
                </div>
                <div class="col-12 col-md-6">
                    <h1 class="display-5">{{ $article->title }}</h1>
                    <p class="font-weight-bold">نویسنده : {{ $article->author }}</p>
                    <p class="font-weight-bold">دسته بندی : {{ $article->articleCategory->article_category }}</p>
                    <p class="font-weight-bold">تاریخ انتشار : {{ jdate($article->published_date)->format('%d %B %Y') }}</p>  
                    <a class="btn btn-success btn-lg" href="{{ route('article.onearticle' , ['article' => $article->id]) }}" role="button">مشاهده مقاله</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection