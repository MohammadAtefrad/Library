@extends('layout')
@section('content')
<!-- Blog Post -->

<!-- Title -->
<h1>{{ $article->title }}</h1>
<!-- Author -->
<p class="lead">
    ارسال شده توسط <a href="index.php">{{ $article->user->name }}</a>
</p>
<hr>
<!-- Date/Time -->
<p><span class="glyphicon glyphicon-time"></span> ارسال شده در تاریخ {{ jdate($article->created_at)->format('%d %B،
    %Y') }}</p>
<hr>
<!-- Preview Image -->
<img class="img-responsive" src="http://placehold.it/900x300" alt="">
<hr>
<!-- Post Content -->
{{ $article->body }}
<hr>
<!-- Blog Comments -->
<!-- Comments Form -->
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
        <h4 class="media-heading">{{$comment->user->name}}
            <small>ارسال شده در تاریخ {{ jdate($comment->created_at)->format('%d %B، %Y') }}</small>
        </h4>
        {{$comment->body}}
    </div>
</div>
@endforeach
@endsection
