@extends('layoutpost')
@section('content')
<div class="col-6 col-md-6 text-right">
    <div class="d-flex flex-column">
        @foreach ($posts as $post)
        <div class="jumbotron shadow p-3">
            <div class="row">
                <div class="col-8">
                    <a href="{{ route('post.onepost' , ['post' => $post->id]) }}"><h6 class="">{{ $post->title }}</h6></a>
                    <p class="" style="font-size: 0.8rem; max-height: 150px;overflow: hidden;">{{ $post->body }}</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('post.onepost' , ['post' => $post->id]) }}"><img class="img-fluid float-right shadow" src="/img/blog/book.jpg" alt="img"></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection