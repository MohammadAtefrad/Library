<div class="col-3 col-md-3 border-left border-top text-right">
    <div class="d-flex flex-column mr-4">
        <ul class="list-unstyled">
            <h3 class="my-4 text-center">کتاب ها</h3>
            <div class="d-flex flex-wrap flex-row-reverse justify-content-center my-2" style="font-size:0.8rem !important">
                @foreach ($books as $book)
                <a href="{{ route('book.onebook' , ['book' => $book->id]) }}"><img class="img-fluid shadow" src="/img/blog/book.jpg" alt="img"></a>
                <p class="">{{ $book->name }}</p>
                @endforeach
            </div>
        </ul>
    </div>
</div>