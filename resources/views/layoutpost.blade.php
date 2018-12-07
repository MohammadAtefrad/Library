<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>اخبار</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="/img/favicon.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i"
        rel="stylesheet">
    
    <!-- Libraries CSS Files -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/modal-video/css/modal-video.min.css" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- serch box style files -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="/css/main.css" rel="stylesheet" />

    <!-- Bootstrap css -->
    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="/css/bootstrap-rtl.min.css" rel="stylesheet"> --}}
    
    <link href="/css/fontiran.css" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="/css/style.css" rel="stylesheet">
    {{-- <link href="/css/styles.rtl.css" rel="stylesheet"> --}}
    @yield('styles')
</head>

<body>
    <!-- header -->
    <header id="header" class="header header-hide">
        <div class="container">
            <div id="logo" class="pull-left">
                <h1><a href="#body" class="scrollto">کتابخانه</a></h1>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ route('firstpage.index') }}">خانه</a></li>
                    <li><a href="#about-us">درباره ما</a></li>
                    <li><a href="{{ route('book.allbooks') }}">کتاب ها</a></li>
                    <li><a href="{{ route('article.allarticles') }}">مقالات</a></li>
                    <li><a href="{{ route('post.allposts') }}">اخبار</a></li>
                    <li class="menu-has-children"><a href="">Drop Down</a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">ارتباط با ما</a></li>
                </ul>
            </nav>
        </div>
    </header><!-- #header -->

    <div class="d-flex position-relative text-center justify-content-center align-items-center shadow">
        <img class="img-fluid rounded" src="/img/newsletter-bg.jpg" style="">
        <div class="position-absolute text-white">

            {{-- search box --}}
            <div class="row col-10 col-md-8 mx-auto s003 mb-5">
                <h1>به کتابخانه ... خوش آمدید</h1>
                <form class="bg-white rounded mt-4">
                    <div class="inner-form">
                        <div class="input-field first-wrap">
                            <div class="input-select">
                                <select data-trigger="" name="choices-single-defaul">
                                    <option placeholder="">Category</option>
                                    <option>New Arrivals</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-field second-wrap">
                            <input id="search" type="text" placeholder="Enter Keywords" />
                        </div>
                        <div class="input-field third-wrap">
                            <button class="btn-search rounded" type="button">جستجو</button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- end search box --}}

        </div>
    </div>
    {{-- content --}}
    <section id="blog" class="padd-section wow fadeInUp">
        <div class="container-fluid">
            <div class="row">
                <!-- left Sidebar -->
                @include('post.leftsidebar')
                <!-- End sidebar -->
                
                <!-- main -->
                @yield('content')
                <!-- End main -->
            
                <!-- right Sidebar -->
                @include('post.rightsidebar')
                <!-- End sidebar -->
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="newsletter text-center wow fadeInUp">
        <div class="overlay padd-section">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <form class="form-inline" method="POST" action="#">
                            <input type="email" class="form-control " placeholder="Email Adress" name="email">
                            <button type="submit" class="btn btn-default"><i class="fa fa-location-arrow"></i>Subscribe</button>
                        </form>
                    </div>
                </div>

                <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--==========================
    Contact Section
  ============================-->
    <section id="contact" class="padd-section wow fadeInUp">

        <div class="container">
            <div class="section-title text-center">
                <h2>Contact</h2>
                <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-4">

                    <div class="info">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>A108 Adam Street<br>New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="fa fa-envelope"></i>
                            <p>info@example.com</p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+1 5589 55488 55s</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-5 col-md-8">
                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                    data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                                    placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #contact -->

    <!--==========================
    Footer
  ============================-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="footer-logo">
                        <a class="navbar-brand" href="#">eStartup</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">
                        <h4>Abou Us</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">
                        <h4>Abou Us</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">
                        <h4>Support</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">faq</a></li>
                            <li><a href="#">Editor help</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">
                        <h4>Abou Us</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="copyrights">
            <div class="container">
                <p>&copy; Copyrights eStartup. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/jquery/jquery-migrate.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/superfish/hoverIntent.js"></script>
    <script src="/lib/superfish/superfish.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/modal-video/js/modal-video.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="/js/main.js"></script>
    <!-- search box -->
    <script src="/js/extention/choices.js"></script>
    <script>
        const choices = new Choices('[data-trigger]', {
            searchEnabled: false,
            itemSelectText: '',
        });

    </script>
</body>

</html>
