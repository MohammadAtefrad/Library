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
            <form role="form" method="POST" action="{{ route('postcomment.add' , ['post'=>$post->id]) }}">
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
</div>
@endsection