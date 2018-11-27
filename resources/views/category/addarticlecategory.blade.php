@extends('layout')

@section('content')

    <h1 class="page-header">اضافه کردن دسته بندی جدید مقالات</h1>

    @include('layouts.errors')

    <form action="" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="title">عنوان دسته بندی : </label>
            <input type="text" name="title" class="form-control" id="title" placeholder="لطفا عنوان را وارد کنید ..." value="{{ old('title') }}">
        </div>
        جدول دسته بندی ها با امکان حذف و دکمه edit
        {{-- <div class="form-group">
            <label for="category">دسته بندی ها : </label>
            <select name="category[]" class="form-control" id="category" title=" دسته بندی مورد نظر خود را انتخاب کنید..." multiple>
                @foreach( $categories as $id => $name )
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="body">متن مقاله :</label>
            <textarea class="form-control" name="body" id="body" placeholder="متن را وارد کنید" rows="7">{{ old('body') }}</textarea>
        </div> --}}
        <button type="submit" class="btn btn-default">تایید</button>
    </form>

@endsection
