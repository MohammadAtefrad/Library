@extends('layout')

@section('content')

    <h1 class="page-header">ویرایش دسته بندی پست</h1>

    @include('layouts.errors')

    <form action="" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="title">عنوان جدید دسته بندی : </label>
            <input type="text" name="title" class="form-control" id="title" placeholder="لطفا عنوان را وارد کنید ..." value="{{ old('title') }}">
        </div>
        <button type="submit" class="btn btn-default">تایید</button>
    </form>

@endsection
