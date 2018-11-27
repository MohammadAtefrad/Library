@extends('layout')

@section('content')

    <h1 class="page-header">اضافه کردن دسته بندی جدید پست ها</h1>

    @include('layouts.errors')

    <form action="" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="title">عنوان دسته بندی : </label>
            <input type="text" name="title" class="form-control" id="title" placeholder="لطفا عنوان را وارد کنید ..." value="{{ old('title') }}">
        </div>
        <button type="submit" class="btn btn-default">تایید</button>

        جدول دسته بندی ها با امکان حذف و دکمه edit
    </form>

@endsection
