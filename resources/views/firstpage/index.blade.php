@extends('layoutmain')
@section('content')
<!-- books -->
<section id="blog" class="padd-section wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">
        <h2>آخرین کتاب ها</h2>
        <p class="separator">آخرین کتاب هایی که به سایت اضافه شده است</p>
      </div>
    </div>
    <div class="container-fluid ">
        <div class="row ">
            @foreach ($books as $book)
            <div class="col-md-6 col-lg-3 pb-4">
              <div class="block-blog shadow">
                <a href="#"><img src="img/blog/book.jpg" alt="img"></a>
                <div class="content-blog">
                  <h4><a href="#">{{ $book->name }}</a></h4>
                  <h3>{{ $book->bookCategory['book_category'] }}</h3>
                  <span>05, juin 2017</span>
                  <a class="pull-right readmore" href="#">read more</a>
                </div>
              </div>
            </div>
            @endforeach
        </div>

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
  </section>
  <!-- / end of books -->
  <!--article-->
  <section id="get-started" class="padd-section text-center wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">
          <h2>اخرین اخبار </h2>
          <p class="separator">اخرین اخبار و اطلاعیه های ... را در این قسمت مشاهده کنید</p>
        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-4">
            <div class="feature-block">

              <img src="/img/svg/cloud.svg" alt="img" class="img-fluid">
              <h4>introducing whatsapp</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <a href="#">read more</a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-block">

              <img src="/img/svg/planet.svg" alt="img" class="img-fluid">
              <h4>user friendly interface</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <a href="#">read more</a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-block">

              <img src="/img/svg/asteroid.svg" alt="img" class="img-fluid">
              <h4>build the app everyone love</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <a href="#">read more</a>

            </div>
          </div>
        </div>
      </div>

  </section>
  <!--post-->
  <section id="features" class="padd-section text-center wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">
          <h2>مقالات</h2>
          <p class="separator">اخرن مقالات را در این قسمت مشاهده کنید</p>
        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/img/svg/paint-palette.svg" alt="img" class="img-fluid">
              <h4>creative design</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/img/svg/vector.svg" alt="img" class="img-fluid">
              <h4>Retina Ready</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/img/svg/design-tool.svg" alt="img" class="img-fluid">
              <h4>easy to use</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/img/svg/asteroid.svg" alt="img" class="img-fluid">
              <h4>Free Updates</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/img/svg/asteroid.svg" alt="img" class="img-fluid">
              <h4>Free Updates</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/img/svg/cloud-computing.svg" alt="img" class="img-fluid">
              <h4>App store support</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/img/svg/pixel.svg" alt="img" class="img-fluid">
              <h4>Perfect Pixel</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/img/svg/code.svg" alt="img" class="img-fluid">
              <h4>clean codes</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

        </div>
      </div>
  </section>
  @endsection
