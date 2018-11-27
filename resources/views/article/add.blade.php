@extends('layout')
@section('content')
<h1 class="page-header">
    ارسال مقاله
</h1>
@include('layouts.errors')
<form role="form" method="post" action="{{ route('article.storearticle') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title" class="">عنوان مقاله:</label>
        <input id="title" class="form-control" name="title" placeholder="لطفا عنوان را وارد کنید" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="body" class="">متن مقاله:</label>
        <textarea id="body" class="form-control" name="body" placeholder="متن را وارد کنید " rows="7">{{old('body')}}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-sm btn-primary shadow">ارسال مقاله</button>
    </div>
</form>
@endsection
