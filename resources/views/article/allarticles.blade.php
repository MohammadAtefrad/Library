@extends('layout')
@section('content')
@if ($message=session('message'))
<div class="alert alert-success">
{{$message}}
</div>
@endif
<h1 class="page-header">
    مقالات سایت
</h1>

@foreach ($articles as $article)
    <div>
    <h2>
    <a href="{{ route('article.show' , ['article' => $article->slug]) }}">{{ $article->title }}</a>
    </h2>
    <p class="lead">
    ارسال شده توسط <a href="index.php">{{ $article->user->name }}</a>
    </p>
<p><span class="glyphicon glyphicon-time"></span>ارسال شده در تاریخ {{ jdate($article->created_at)->format('%d %B، %Y') }}</p>
    <hr>
    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
    <hr>
    <p>{{ $article->body}}.</p>
    <a class="btn btn-primary" href="{{ route('article.show' , ['article' => $article->slug]) }}">ادامه مطلب <span class="glyphicon glyphicon-chevron-left"></span></a>
    </div>
    @if (! $loop->last)
    <hr>
    @endif
@endforeach
<!-- Pager -->
<div style="text-align:center;">
    {{$articles->render()}}
</div>
@endsection

@section('scripts')

@endsection
