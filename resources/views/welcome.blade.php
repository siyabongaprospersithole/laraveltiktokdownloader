<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/slick/slick-theme.css') }}">
    <!-- icon css-->
    <link rel="stylesheet" href="{{ asset('assets/elagent-icon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/animation/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <title>Siyatiktok</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="img/spinner_logo.png" alt="">
                    <h4><span>Siya</span>tiktok</h4>
                </div>
            </div>
            <h2 class="head">Download Videos</h2>
            <p></p>
        </div>
    </div>
    <div class="click_capture"></div>
    <div class="body_wrapper">
        <nav class="navbar navbar-expand-lg menu_one" id="sticky">
            <div class="container">
                <a class="navbar-brand sticky_logo" href="">
                   
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>

              
            </div>
        </nav>

        <section class="doc_banner_area_one">
            <img class="dark" src="img/home_one/wave_one.svg" alt="">
            <img class="dark_two" src="img/home_one/wave_two.svg" alt="">
            <img class="p_absolute star_one" src="img/home_one/star.png" alt="">
            <img class="p_absolute star_two" src="img/home_one/star.png" alt="">
            <img class="p_absolute star_three" src="img/home_one/star.png" alt="">
            <img class="p_absolute one wow fadeInLeft" data-wow-delay="0.1s" src="img/home_one/b_man.png" alt="">
            <img class="p_absolute two wow fadeInRight" data-wow-delay="0.2s" src="img/home_one/b_man_two.png" alt="">
            <img class="p_absolute three wow fadeInUp" data-wow-delay="0.3s" src="img/home_one/flower.png" alt="">
            <img class="p_absolute four wow fadeInRight" data-wow-delay="0.4s" src="img/home_one/girl_img.png" alt="">
            <img class="p_absolute five wow fadeIn" data-wow-delay="0.5s" src="img/home_one/file.png" alt="">
            <img class="p_absolute bl_left" src="img/v.svg" alt="">
            <img class="p_absolute bl_right" src="img/home_one/b_leaf.svg" alt="">
            <div class="container">
                <div class="doc_banner_text" id="app">
                    <h2 class="wow fadeInUp" data-wow-delay="0.3s">Hello, Download tiktok video?, past like below</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.5s">You can download tiktok videos below</p>
                 

                    

                        <get-tiktok-video-component> </get-tiktok-video-component>
   
                  
                  
                </div>
            </div>
        </section>
     
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/pre-loader.js') }}"> </script>
    <script src="{{ asset('js/pre-loader.js') }}"> </script>
    <script src="{{ asset('assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/parallaxie.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/jquery.wavify.js') }}"></script>
    <script src="{{ asset('assets/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/app.js') }}" ></script>
    <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  </script>

</body>

</html>