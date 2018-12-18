<?php
// dd($selectedBooks[0]); die;

?>

@extends('layoutbook')
@section('content')

<div class="col-8 col-md-9 text-right">
    @if(! empty($selectedBooks[0]))
        @foreach ($selectedBooks as $book)
            <div class="d-flex flex-column">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <a href="#"><img class="float-left shadow" src="/img/blog/book.jpg" alt="img"></a>
                        </div>
                        <div class="col-12 col-md-6">
                            <h1 class="display-5">{{ $book->name }}</h1>
                            <p class="font-weight-bold">ناشر : {{ $book->publisher }}</p>
                            <p class="font-weight-bold">نویسنده : {{ $book->author }}</p>
                            <p class="font-weight-bold">دسته بندی : {{ $book->BookCategory->book_category }}</p>
                            <p class="font-weight-bold">تاریخ انتشار : {{ jdate($book->published_date)->format('%d %B %Y') }}</p>
                            <p class="font-weight-bold text-success" >وضعیت کتاب : {{ $book->BookStatus->book_status }}</p>
                        </div>
                    </div>
                    <hr class="my-4 shadow">
                    <p class="lead">{{ $book->description }}.</p>
                    <a class="btn btn-danger btn-lg" href="{{ route('book.cancel-reserve' , ['event' => 'one', 'book' => $book->id]) }}" role="button">حذف کتاب</a>
                </div>
            </div>
        @endforeach
        <div class="d-flex flex-column">
            <div class="row">
                <div class="col-6">
                    <a href="{{ route('book.factor') }}" class="btn btn-success btn-lg w-100 py-3">ثبت نهایی رزرو و صدور فاکتور</a>
                </div>
                <div class="col-6">
                    <a href="{{ route('book.cancel-reserve' , ['event' => 'all', 'book' => 1]) }}" class="btn btn-secondary btn-lg w-100 py-3">انصراف و خالی کردن ثبت امانت</a>
                </div>
            </div>
        </div>
    @else
        <div class="d-flex flex-column">
            <div class="row">
                <div class="col-12">
                    <span>!کتابی در لیست رزرو شما موجود نیست</span>
                </div>
            </div>
        </div>
    @endif
</div><!-- End main -->
@endsection
