@extends('layoutpost')
@section('content')
<div class="col-6 col-md-6 text-right">
    <div class="d-flex flex-column">
        <div class="jumbotron shadow p-4">
            <div class="row">
                <div class="col-8">
                    <a href="{{ route('post.onepost' , ['post' => $post->id]) }}"><h6 class="">{{ $post->title }}</h6></a>
                    <p class="">نویسنده : {{ $post->author }}</p>
                    <p class="">دسته بندی : {{ $post->postCategory->post_category }}</p>
                    <p class="font-weight-light">تاریخ : {{ jdate($post->published_date)->format('%d %B %Y') }}</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('post.onepost' , ['post' => $post->id]) }}"><img class="img-fluid float-right shadow" src="/img/blog/book.jpg" alt="img"></a>
                </div>
            </div>
            <hr>
            <p class="">{{ $post->body }}</p>
        </div>
    </div>
</div>
@endsection