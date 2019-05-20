@extends('layoutpost')
@section('content')
<div class="col-6 col-md-6 text-right">
    <div class="d-flex flex-column">
        <div class="jumbotron shadow p-4">
            <div class="row">
                <div class="col-8">
                    <a href="{{ route('post.onepost' , ['post' => $post->id]) }}">
                        <h6 class="">{{ $post->title }}</h6>
                    </a>
                    <p class="">نویسنده : {{ $post->author }}</p>
                    <p class="">دسته بندی : {{ $post->postCategory->post_category }}</p>
                    <p class="font-weight-light">تاریخ : {{ jdate($post->published_date)->format('%d %B %Y') }}</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('post.onepost' , ['post' => $post->id]) }}"><img
                            class="img-fluid float-right shadow" src="/img/blog/book.jpg" alt="img"></a>
                </div>
            </div>
            <hr>
            <p class="">{{ $post->body }}</p>
        </div>
        <hr>
        <!-- Comments -->
        @if (auth()->check())
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
            <form role="form" method="POST" action="{{ route('postcomment.add' , ['post'=>$post->id]) }}">
                @csrf
                <label for="body">متن :</label>
                <div class="form-group">
                    <textarea name="body" class="form-control" rows="3">{{ old('body') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-1">ارسال</button>
            </form>
        </div>
        @else
        <a href="/login">برای ارسال کامنت ابتدا وارد شوید</a>
        @endif
        <hr>
        <!-- Posted Comments -->
        @include('post.replies', ['comments' => $post->postComments])
    </div>
</div>
@endsection
