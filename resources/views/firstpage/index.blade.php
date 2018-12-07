@extends('layoutmain')
@section('content')

<!-- books -->
<section id="blog" class="padd-section wow fadeInUp text-right">
  <div class="container">
    <div class="section-title text-center">
        <a href="{{ route('book.allbooks') }}"><h2>آخرین کتاب ها</h2></a>
      <p class="separator">آخرین کتاب هایی که به سایت اضافه شده است</p>
    </div>
  </div>
  <div class="container-fluid ">
    <div class="row ">
        @foreach ($books as $book)
        <div class="col-md-6 col-lg-3 pb-4">
          <div class="block-blog shadow">
            <a href="{{ route('book.onebook' , ['book' => $book->id]) }}"><img src="/img/blog/book.jpg" alt="img"></a>
            <div class="content-blog">
              <a href="{{ route('book.onebook' , ['book' => $book->id]) }}"><h4>{{ $book->name }}</h4></a>
              <p>دسته بندی : <span class="font-weight-bold">{{ $book->bookCategory['book_category'] }}</span></p>
              <p>نویسنده : <span class="font-weight-bold">{{ $book->author }}</span></p>
              <span class="text-right">تاریخ انتشار : {{ jdate($book->published_date)->format('%d %B %Y') }}</span>
              <a class="pull-right readmore" href="{{ route('book.onebook' , ['book' => $book->id]) }}">بیشتر بخوانیم <i class="fas fa-book"></i></a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    <!-- Pager -->
    <div style="text-align:center;">{{$books->render()}}</div>
    <!-- End books -->

      {{-- <div class="row">
        <div class="col-md-6 col-lg-4 pb-2">
          <div class="block-blog text-left">
            <a href="#"><img src="img/blog/blog-image-1.jpg" alt="img"></a>
            <div class="content-blog">
              <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
              <span>05, juin 2017</span>
              <a class="pull-right readmore" href="#">read more</a>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section><!-- / end of books -->
  
  <!--article-->
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <a href="{{ route('post.allposts') }}"><h2>اخرین اخبار </h2></a>
        <p class="separator">اخرین اخبار و اطلاعیه های ... را در این قسمت مشاهده کنید</p>
      </div>
    </div>

    <div class="container">
      <div class="row">

        @foreach ($posts as $post)
        <div class="col-md-6 col-lg-4">
          <div class="feature-block">
            <a href="{{ route('post.onepost' , ['post' => $post->id]) }}"><img src="/img/svg/cloud.svg" alt="img" class="img-fluid"></a>
            <a href="{{ route('post.onepost' , ['post' => $post->id]) }}"><h4>{{ $post->title }}</h4></a>
            <p class="" style="font-size: 0.8rem; max-height: 150px;overflow: hidden;">{{ $post->body }}</p>
            <a href="{{ route('post.onepost' , ['post' => $post->id]) }}">ادامه</a>
          </div>
        </div>
        @endforeach

      </div>
      <!-- Pager -->
      <div style="text-align:center;">{{$posts->render()}}</div>
    </div>
  </section>

  <!--article-->
  <section id="features" class="padd-section text-center wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">
          <a href="{{ route('article.allarticles') }}"><h2>مقالات</h2></a>
          <p class="separator">اخرین مقالات را در این قسمت مشاهده کنید</p>
        </div>
      </div>

      <div class="container">
        <div class="row">

          @foreach ($articles as $article)
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <a href="{{ route('article.onearticle' , ['article' => $article->id]) }}"><img src="/img/svg/paint-palette.svg" alt="img" class="img-fluid"></a>
              <a href="{{ route('article.onearticle' , ['article' => $article->id]) }}"><h4>{{ $article->title }}</h4></a>
              <p class="font-weight-bold">نویسنده : {{ $article->author }}</p>
              <p class="font-weight-bold">دسته بندی : {{ $article->articleCategory->article_category }}</p>
              <p class="font-weight-bold">تاریخ انتشار : {{ jdate($article->published_date)->format('%d %B %Y') }}</p>  
              <a class="btn btn-success btn-lg" href="{{ route('article.onearticle' , ['article' => $article->id]) }}" role="button">مشاهده مقاله</a>
            </div>
          </div>
          @endforeach

        </div>
        <!-- Pager -->
        <div style="text-align:center;">{{$articles->render()}}</div>
      </div>
  </section>
  @endsection
