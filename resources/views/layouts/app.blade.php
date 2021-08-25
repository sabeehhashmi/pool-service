<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pool</title>
    <!--- Style CSS ---->
    <link href="css/style.css" rel="stylesheet">
    <!--- Style BootStrap.CSS ---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--- Style Silk.CSS ---->
    <link rel="stylesheet" href="css/slick.min.css" />
    <!--- AOS Animate.CSS ---->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css" />
    <!--- Font Awasome CSS ---->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>

<body>
    <!-- ==== Section Header === -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!--- Toggler NavBar Button ---->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">
                        <img class="img-fluid" src="images/logo.svg" alt="">
                    </a>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item me-4">
                            <a class="nav-link d-flex align-items-center primary_color active" aria-current="page" href="/">Home
                            <span> •  </span>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link d-flex align-items-center primary_color" href="#features">Features
                            <span> •  </span>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link d-flex align-items-center primary_color" href="#pricing">Plans & Pricing
                            <span> •  </span>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link d-flex align-items-center primary_color" href="/testimonial">Testimonials
                            <span> •  </span>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link d-flex align-items-center primary_color" href="/faq">FAQ
                                <span> •  </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center primary_color" href="/contact-support">Contact
                            <span> •  </span>
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex">
                       <a  class="button_btn main_btn ms-4 align_items" href="/userlogin">Login</a>
                        <a class="button_btn main_btn ms-4 align_items active" type="submit" href="/getdemo">Get Demo</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    @yield('content');

    <!-- === Section Footer-Background Images === -->
    <section class="footer">
        <!-- === Section Footer_main === -->
        <div class="footer-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        <a class="footer-logo" href="#">
                            <img class="img-fluid" src="images/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="col-12 col-md-9">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link White active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link White" href="#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link White" href="#pricing">Plans &amp; Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link White" href="/testimonial">Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link White" href="/faq">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link White" href="/contact-support">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-12 col-md-6">
                        <p class="footer-text m-0">Made by software and pool industry pros</p>
                        <p class="footer-text m-0">in<img class="img-fluid ps-1" src="images/sun.svg" alt="Sun Icon"> sunny Florida
                        </p>
                    </div>
                    <div class="col-12 col-md-6 justify-content-end d-flex">
                        <a href="#"><img class="img-fluid" src="images/facebook.svg" alt="Facebook Icon"></a>
                        <a href="#"><img class="img-fluid ms-3" src="images/insta.svg" alt="Facebook Icon"></a>
                    </div>
                </div>
                <div class="row pt-4 align-items-center">
                    <div class="col-12 col-md-5">
                        <p class="footer-text m-0">Copyright (c) 2021 Pool Service Software, LLC. All rights reserved.
                        </p>
                    </div>
                    <div class="col-12 col-md-7">
                        <ul class="navbar-nav justify-content-start">
                            <li class="nav-item">
                                <a class="nav-link White active" aria-current="page" href="/privacy-policy">Privacy Notice</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link White active" aria-current="page" href="#">Term of Use</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Bootstrap.JS === -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- ==== JQuery.JS === -->
    <script src="js/jquery.min.js"></script>
    <!-- <script src="js/custom-pass.js"></script> -->
    <!-- ==== Silk.JS === -->
    <script src="js/slick.js"></script>
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <!-- ==== Script For APP_Slider === -->
    <script>
        $('.button.right').on('click', function() {
            $('.button-group').removeClass('left');
            $('.button-group').addClass('right');
            $('.button').removeClass('active');
            $(this).addClass('active');
        });
        $('.button.left').on('click', function() {
            $('.button-group').removeClass('right');
            $('.button-group').addClass('left');
            $('.button').removeClass('active');
            $(this).addClass('active');
        });
    </script>
    <script>
        if ($(".js-slider").length) {
            $(function() {


                $(".js-slider-item").each(function() {
                    $(this).attr("data-item", $(this).index());
                });

                $(".js-slider-item[data-item=0]").addClass("active-1 abcd");
                $(".js-slider-item[data-item=1]").addClass("active-2 abcd");
                $(".js-slider-item[data-item=2]").addClass("active-3 abcd");
                $(".js-slider-item[data-item=3]").addClass("active-4 abcd");
                $(".js-slider-item[data-item=4]").addClass("active-5 abcd");

                function sliderInit(slider, arrows) {
                    slider.slick({
                        dots: true,
                        arrows: true,
                        infinite: true,
                        autoplay: true,
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        touchThreshold: 200,
                        speed: 1000,
                        swipeToSlide: true,
                        center: true,
                        appendArrows: arrows,
                    });
                }

                function newsInit(slider, arrows) {
                    slider.slick({
                        dots: true,
                        arrows: true,
                        infinite: true,
                        autoplay: true,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        touchThreshold: 200,
                        speed: 1000,
                        swipeToSlide: true,
                        center: true,
                        appendArrows: arrows,
                        adaptiveHeight: true,
                        responsive: [{
                            breakpoint: 1101,
                            settings: {
                                slidesToShow: 2
                            }
                        }, {
                            breakpoint: 701,
                            settings: {
                                slidesToShow: 1
                            }
                        }],
                    });
                }

                setTimeout(function() {
                    $(".js-slider-list").on("init", function() {
                        $(".js-slider-loader").removeClass("loaded");
                    });

                    $(".js-slider-list").each(function() {
                        var $this = $(this),
                            $arrows = $this
                            .closest(".js-slider")
                            .find(".js-slider-arrows");
                        if ($(this).hasClass("js-slider-news")) {
                            newsInit($this, $arrows);
                        } else {
                            sliderInit($this, $arrows);
                        }
                    });

                    $(".js-slider-list").on("beforeChange", function(
                        event,
                        slick,
                        currentSlide,
                        nextSlide
                    ) {
                        $(this).find(".js-slider-item").removeClass("active-1 active-2 active-3 active-4 active-5");
                        $(this).find(".js-slider-item[data-item=" + nextSlide + "]").addClass("active-1").removeClass("active-2 active-3 active-4 active-5");
                        var slickSlideNext1 = $(this).find(".js-slider-item[data-item=" + nextSlide + "]").closest(".slick-slide").next(".slick-slide").find(".js-slider-item").attr("data-item");
                        var slickSlideNext2 = $(this).find(".js-slider-item[data-item=" + nextSlide + "]").closest(".slick-slide").next(".slick-slide").next(".slick-slide").find(".js-slider-item").attr("data-item");
                        var slickSlideNext3 = $(this).find(".js-slider-item[data-item=" + nextSlide + "]").closest(".slick-slide").next(".slick-slide").next(".slick-slide").next(".slick-slide").find(".js-slider-item").attr("data-item");
                        var slickSlideNext4 = $(this).find(".js-slider-item[data-item=" + nextSlide + "]").closest(".slick-slide").next(".slick-slide").next(".slick-slide").next(".slick-slide").next(".slick-slide").find(".js-slider-item").attr("data-item");
                        $(this).find(".js-slider-item[data-item=" + slickSlideNext2 + "]").addClass("active-3");
                        $(this).find(".js-slider-item[data-item=" + slickSlideNext1 + "]").addClass("active-2");
                        $(this).find(".js-slider-item[data-item=" + slickSlideNext3 + "]").addClass("active-4");
                        $(this).find(".js-slider-item[data-item=" + slickSlideNext4 + "]").addClass("active-5");
                    });
                }, 500);

            });
        }
    </script>
    <!-- ==== Script For add Active_Class (App_Slider Aroow) === -->
    <script>
      $(document).ready(function() {
            $(document).on('click','.slick-arrow',function() {
                $(".slick-arrow").removeClass("active");
                $(this).addClass("active");

            });
            $('.slick-next').addClass('active')
        });
    </script>
    <!-- ==== Script For A_O_S ANimation === -->
    <script>
        AOS.init({
            duration: 1200,
        })
    </script>
    <!-- ==== Script For Tabs (Feature & Work) === -->
    <script>
        function features(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = $(".features .tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = $(".features .tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        function weWork(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = $(".we-work .weworktabcontent");

            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = $(".we-work .wework-links");

            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
        <script>
            $(document).ready(
                function(){
                     $(document).on('change','#user_email',function(){
                      var useremail = $(this).val();
                        $.ajax({
                            url:"https://beta.poolservice.software/api/isemailexist",
                            type:"post",
                            data:{secret:'websitereg',email:useremail},
                            beforeSend:function(){

                            },
                            success:function(response){
                                console.log(response)
                            }
                        })

                     })
                }
            );
        </script>
        @yield('script');
</body>

</html>
