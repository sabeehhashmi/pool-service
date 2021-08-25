@extends('layouts.app')

@section('content')

<!-- ==== Page Testimonial main_content Start === -->
<main>
    <section class="page-testimonial">
        <div class="tetimonial-header">
            <div class="custom_container">
                <div class="row">
                    <div class="col col-md-6 text-center">
                        <img class="img-fluid" src="/images/testimonial-icon.svg">
                    </div>
                    <div class="col col-md-6 pt-3">
                        <div class="circle py-3">
                            <img class="img-fluid" src="/images/ellipse.png">
                            <img class="img-fluid" src="/images/ellipse.png">
                            <img class="img-fluid" src="/images/ellipse.png">
                            <span class="primary_color_text bold ps-2">Review</span>
                        </div>
                        <h3 class="primary_color_text tag-title m-0 pt-4">We Work Hard</h3>
                        <h3 class="secondary_color_text tag-title m-0 ps-1">to Gain Your Trust</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-slide="carousel">
                <div class="carousel-indicators">
                    <img class="img-fluid" src="images/union.svg" alt="">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-5">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                                        <p class="linehight_19 font_14 text-white m-0">We've tried other apps, but PSS is our last. It is so easy to use with our employees, customers &amp; tracking. Customer service is exceptional &amp; quick.
                                        </p>
                                        <strong class="name-title secondary_color_text">Richard &amp; Terri Schwenzer
                                            (Hawaii)<br>Blue Water Pool &amp; Spa</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                                        <p class="linehight_19 font_14 text-white m-0">PSS has been a game changer for my business. It has allowed me to become way more organized, stay on top of billing and to effortlessly communicate with my clients. My techs and I enjoy using the user-friendly
                                            interface. I’ve been on several platforms and PSS is the first that I have truly enjoyed using
                                        </p>
                                        <strong class="name-title secondary_color_text">Dean Ouellette (Arizona)<br>Big Family
                                            Pools</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                                        <p class="linehight_19 font_14 text-white m-0">PSS is amazing. I was looking for an app like this one. I was doing all my work on a paper, even chemical readings and dosages. Also I was sending text messages to clients when they were late, now I don’t have to worry about anything. It makes my life easier and what I like is how the PSS team is always improving the app. I have been using it for a while now. Thank you!
                                        </p>
                                        <strong class="name-title secondary_color_text">Adonis (Georgia)</br>Adonis Pool Service</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                                        <p class="linehight_19 font_14 text-white m-0">Great app with awesome support!
                                            Well put together app that is easy to use to run my pool service business. The reports look great and are very customizable. They also have support for QuickBooks, but you can also just use their invoicing in case you don’t have QB or want to ditch QB. The customer support is excellent, thank you!

                                        </p>
                                        <strong class="name-title secondary_color_text">RayV77<br>IOS User</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-5">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                                        <p class="linehight_19 font_14 text-white m-0">Awesome Pool App!
                                            This app is everything I need to run my pool business, in one central location! Very well done, clean and easy to use.
                                            Love the jobs feature!!!
                                        </p>
                                        <strong class="name-title secondary_color_text">Petitpounne</br>IOS User</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                                        <p class="linehight_19 font_14 text-white m-0">Love it!
                                            Moved my entire company from PTPM to PSS. So glad I did! Their customer service is TOP NOTCH. Software improvements come out faster than others I’ve tried over the last few years. And they take every suggestion for feature or tweaks to heart and see if it’ll will for the overall experience. You won’t be disappointed.
                                        </p>
                                        <strong class="name-title secondary_color_text">Trav2001</br>IOS User</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="card w-78">
                                    <div class="card-body text-center">
                                        <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                                        <p class="linehight_19 font_14 text-white m-0">I researched carefully and tried 2-3 other route management software platforms before discovering and settling on PSS. While they all have some great benefits and features, PSS has been extremely simple and easy to use in every way. It is a massive time saver with literally all of our route, jobs, and invoicing set on autopilot, assigning routes & jobs to techs, completing tasks, and if there are scheduling changes I can simply shoot an Announcement out to specific clients to let them know what is happening. Overall, between the features, intuitive updates, and customer support, PSS is an amazing platform!</p>
                                        <strong class="name-title secondary_color_text">Jeff Wolf (California)</br>Sunset Pool Service</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 mb-5">
                                <div class="card w-78">
                                    <div class="card-body text-center">
                                        <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                                        <p class="linehight_19 font_14 text-white m-0">Ever since I started using Pool Service Software, it has made managing my route and client invoicing much easier. The unique features it has is a testimony of the personal interest and attention that its developers have achieved. Their attention to detail and response to feedback shows that they really have the pool pro at heart.
                                            Using things such as the LSI, customizable letters and invoicing, having a shopping list makes this a worthwhile tool in the pool pros "toolbox". While there are many platforms available, Pool Service Software has truly been at the very top. If you're not sure, try its free trial plan.
                                            You can't lose! But, once you try it, you won't want to try anything else!
                                        </p>
                                        <strong class="name-title secondary_color_text">Joel T (California)</br>Hokulea Pool Service & Repair</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card w-78">
                                    <div class="card-body text-center">
                                        <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                                        <p class="linehight_19 font_14 text-white m-0">Excellent Customer Service!
                                            This app is definitely responsible for a lot of my company’s success so far. It makes running a pool service company easy and simple. Just like any app I have seen a bug here or there, but their customer service is so good. They pushed out an update to fix the issue within 24hrs and were in communication with me the entire time. I highly recommend using this app, you won’t regret it.</p>
                                        <strong class="name-title secondary_color_text">Mcginnessdr</br>IOS User</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-12 mb-5">
                                <div class="card w-78">
                                    <div class="card-body text-center">
                                        <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                                        <p class="linehight_19 font_14 text-white m-0">
                                            I started my business with PSS and couldn’t imagine operating a pool service business
                                            without it!<br>
                                            My customers love the detailed service reports and how easy it is to pay their invoices.
                                            For pool guys/gals it doesn’t get any easier to keep track of and manage your customer’s pools, invoices, and your business’s P&L.<br>
                                            I love the service and the cost is very reasonable compared to other platforms….5 stars!!!
                                        </p>
                                        <strong class="name-title secondary_color_text">Brendan (Arizona)</br>Red Fox Pools, LLC</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card w-78">
                                    <div class="card-body text-center">
                                        <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                                        <p class="linehight_19 font_14 text-white m-0">PSS is a must have for any pool service company. It is easy for customers to use (via the customer portal) as well as helping to get my business organized. It has great features, including text alerts for services, and billing is smooth, which all my customers appreciate. PSS is outstanding with their customer service and I believe this truly sets them apart from the competition. Don't settle and get the best!
                                        </p>
                                        <strong class="name-title secondary_color_text">Richard Sousa (Arizona)</br>Bottom Feeder Pool Care</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon active" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container widget-contact mt-5 position-relative">
            <div class="row text-center">
                <div class="col-12">
                    <div class="widget-shadow">
                        <h3 class="primary_color_text tag-title">Ready To Join?</h3>
                        <p class="form-text-color">No Contracts. No Commitments. Cancel Anytime.
                        </p>
                        <div class="d-inline-block mt-4 mb-4">
                            <a href="/company-sigup" type="button" class="btn ms-auto text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
