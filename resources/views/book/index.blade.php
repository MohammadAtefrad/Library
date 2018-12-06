@extends('layoutbook')
@section('content')
<div class="col-8 col-md-9 text-right">
    <div class="d-flex flex-column">
        @foreach ($books as $book)
        <div class="jumbotron shadow">
            <div class="row">
                <div class="col-12 col-md-6">
                    <a href="{{ route('book.onebook' , ['book' => $book->id]) }}"><img class="float-left shadow" src="/img/blog/book.jpg" alt="img"></a>
                </div>
                <div class="col-12 col-md-6">
                    <h1 class="display-5">{{ $book->name }}</h1>
                    <p class="font-weight-bold">ناشر : {{ $book->publisher }}</p>
                    <p class="font-weight-bold">نویسنده : {{ $book->author }}</p>
                    <p class="font-weight-bold">دسته بندی : {{ $book->BookCategory->book_category }}</p>
                    <p class="font-weight-bold">تاریخ انتشار : {{ jdate($book->published_date)->format('%d %B %Y') }}</p>  
                    <a class="btn btn-success btn-lg" href="{{ route('book.onebook' , ['book' => $book->id]) }}" role="button"> مشاهده کتاب</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection