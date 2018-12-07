<div class="col-3 col-md-3 border-right border top text-right">
    <div class="d-flex flex-column mr-4">
        <ul class="list-unstyled">
            <h3 class="my-4 text-center">مقالات</h3>
            <div class="d-flex flex-wrap flex-row-reverse justify-content-center my-2" style="font-size:0.8rem !important">
                @foreach ($articles as $article)
                <a href="{{ route('article.onearticle' , ['article' => $article->id]) }}"><img class="img-fluid shadow" src="/img/blog/book.jpg" alt="img"></a>
                <p class="">{{ $article->name }}</p>
                @endforeach
            </div>
        </ul>
    </div>
</div>