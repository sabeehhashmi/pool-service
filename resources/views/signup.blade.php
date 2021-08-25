@extends('layouts.app');

@section('content')
<!-- ==== Page Sign_Up Start === -->

<article class="page-sign-up">
    <main class="signup-tab-form">
        <div class="container">
            <div class="circle mt-5">
                <img class="img-fluid" src="images/ellipse.png">
                <img class="img-fluid" src="images/ellipse.png">
                <img class="img-fluid" src="images/ellipse.png">
            </div>
            <div class="d-flex align-items-center pb-4 pt-2">
                <h3 class="primary_color_text tag-title m-0">Sign</h3>
                <h3 class="secondary_color_text tag-title m-0 ps-1">Up</h3>
            </div>
            <!-- ==== Page Sign_Up(Tabs_Button) Start === -->
            <ul class="nav nav-pills signup-tab my-4 d-flex justify-content-between signup-form-width tilt-line" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active rounded-circle dark_gray widget-subtitle" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">1</button>
                    <small class="b-text linehight_19 font_16 text-center dark_gray pt-3 d-block fw-bold active">Setting Up Your Account</small>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-circle dark_gray widget-subtitle" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">2</button>
                    <small class="b-text linehight_19 font_16 text-center dark_gray pt-3 d-block fw-bold">Choose <br />Your Plan</small>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-circle dark_gray widget-subtitle" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">3</button>
                    <small class="b-text linehight_19 font_16 text-center dark_gray pt-3 d-block fw-bold">Payment</small>
                </li>
            </ul>
            <!-- ==== Page Sign_Up(Tabs_Content) Start === -->
            <form class="basic-info-form">
                <div class="tab-content mt-5" id="pills-tabContent">

                    <!-- ==== Page Sign_Up(tabs_content_1) Start === -->

                    {{ csrf_field() }}
                    <input type="hidden" class="planid" name="planid" value="startupspecial_dev">
                    <input type="hidden"  name="secret" class="secret" >
                    <input type="hidden"  name="planname" class="planname" >
                    <input type="hidden"  name="plan_cycle" class="plan_cycle" value="month">
                    <input type="hidden"  name="coupon" class="coupon_verified" value="no">
                    <input type="hidden"  name="device" class="device" >
                    <input type="hidden"  name="osname" class="osname" >
                    <input type="hidden"  name="utcoffset" class="utcoffset" >
                    <div class="alert alert-danger error-message"></div>
                    <div class="tab-pane fade show active w-50" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="contact-form widget-shadow widget-contact">
                            <div class="row">
                                <!-- (First_Name) -->
                                <div class="col-12 col-md-6 mb-4">
                                    <label for="exampleInputFirstName" class="form-label linehight_19 font_16 grey ps-3">First Name*</label>
                                    <input required type="text" class="form-control linehight_19 font_16" id="exampleInputFirstName" aria-describedby="NameHelp" name="fname" placeholder="First Name">
                                </div>
                                <!-- (Last_Name) -->
                                <div class="col-12 col-md-6 mb-4">
                                    <label for="exampleInputLastName" class="form-label linehight_19 font_16 grey ps-3">Last Name*</label>
                                    <input required type="text" class="form-control linehight_19 font_16" id="exampleInputLastName" name="lname" placeholder="Last Name">
                                </div>
                                <!-- (Business_Name) -->
                                <div class="col-12 mb-4">
                                    <label for="exampleInputBusiness" class="form-label linehight_19 font_16 grey ps-3">Business Name*</label>
                                    <input required type="text" class="form-control linehight_19 font_16" id="exampleInputBusiness" name="cmpname" placeholder="Business Name">
                                </div>
                                <!-- (Address) -->
                                <div class="col-12 mb-4">
                                    <label for="exampleInputaddress" class="form-label linehight_19 font_16 grey ps-3">Address*</label>
                                    <input required type="text" class="form-control linehight_19 font_16 controls" id="pac-input" name="address" placeholder="Street Address" autocomplete="off">


                                </div>
                                <!-- (City) -->
                                <div class="col-12 col-md-6 mb-4">
                                    <label for="exampleInputCity" class="form-label linehight_19 font_16 grey ps-3">City*</label>
                                    <input required type="text" class="form-control linehight_19 font_16" id="exampleInputCity" aria-describedby="NameHelp" name="city" placeholder="City">
                                </div>
                                <!-- (State/Province) -->
                                <div class="col-12 col-md-6 mb-4">
                                    <label for="exampleInputState" class="form-label linehight_19 font_16 grey ps-3">State/Province*</label>
                                    <input required type="text" class="form-control linehight_19 font_16" id="exampleInputState" aria-describedby="NameHelp" name="state" placeholder="State/Province">
                                </div>
                                <!-- (Country) -->
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="exampleInputClient" class="form-label linehight_19 font_16 grey ps-3">Country*</label>
                                        <span class="form-input">
                                            <select class="form-control linehight_19 font_16" id="" aria-placeholder="United States" name="country">
                                                <option>United States</option>
                                                <option>Dalas</option>
                                                <option>USA</option>
                                                <option></option>
                                            </select>
                                            <img src="images/caret.svg" class="img-fluid caret-icon" alt="User icon">
                                        </span>
                                    </div>
                                </div>
                                <!-- (Mobile_Number) -->
                                <div class="col-12 col-md-6 mb-4">
                                    <label for="exampleInputPhone" class="form-label linehight_19 font_16 grey ps-3">Mobile Phone*</label>
                                    <input required type="text" class="form-control linehight_19 font_16" id="exampleInputPhone" aria-describedby="PhoneHelp" name="mobphone" placeholder="Mobile Phone">
                                </div>
                                <!-- (Client_Count) -->
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="form-group">
                                        <label for="exampleInputClient" class="form-label linehight_19 font_16 grey ps-3">Client Count*</label>
                                        <input type="text" class="form-control clients" id="exampleInputPhone" aria-describedby="PhoneHelp" name="clientcount">
                                    </div>
                                </div>
                                <!-- (Inline_Border) -->
                                <div class="user-or-pass d-flex align-items-center justify-content-between pt-3 pb-4">
                                    <img class="img-fluid" src="images/line.svg" alt="line">
                                    <small class="linehight_19 font_16 grey fw-500">Username and Password</small>
                                    <img class="img-fluid" src="images/line.svg" alt="line">
                                </div>
                                <!-- (Email) -->
                                <div class="col-12 mb-4">
                                    <label for="exampleInputEmail" class="form-label linehight_19 font_16 grey ps-3">Email*</label>
                                    <input required type="email" class="form-control linehight_19 font_16 " name="email" id="exampleInputEmail" placeholder="This Will Be Your Username">
                                </div>
                                <!-- (Password) -->
                                <div class="col-12 mb-4">
                                    <label for="exampleInputPassword" class="form-label linehight_19 font_16 grey ps-3">Password*</label>
                                    <input required type="password" class="form-control linehight_19 font_16  password-taker" id="exampleInputPassword" name="password" placeholder="Password">
                                </div>
                                <!-- (Form-Footer) -->
                                <div class="d-flex align-items-center py-4">
                                    <small class="linehight_19 font_16 grey text-center">Already have an Account?<a href="#" class="text-decoration-none color_blue_solid ps-2 bold">Sign In</a></small>
                                    <a href="#" class="text-decoration-none form-button md-btn secondary_color_bg text-white ms-auto get-basic-info b-100-radious">Next Step </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ==== Page Sign_Up(Tabs_Content_2) Start === -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="contact-form widget-shadow widget-contact">
                            <div class="row mb-5">
                                <div class="col-sm-12 col-md-7">
                                    <h6 class="grey pb-4 signup-subtitle linehight_34 font_30 fw-500">1. Choose the plan that’s right for you</h6>
                                    <ul class="p-0 m-0">
                                        <li class="d-flex align-items-center">
                                            <img class="img-fluid" src="/images/yes.png" alt="">
                                            <p class=" linehight_19 font_16 grey s-italic m-0">No contracts, no commitments</p>
                                        </li>
                                        <li class="d-flex align-items-center pt-3">
                                            <img class="img-fluid" src="/images/yes.png" alt="">
                                            <p class=" linehight_19 font_16 grey s-italic m-0">Change or cancel your plan anytime
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- ==== Page Sign_Up(Tabs_Monthly_Anually) Start === -->
                                <div class="col-sm-12 col-md-5 d-flex justify-content-end align-items-end">
                                    <div class="button-group">
                                        <ul class="nav nav-pills d-flex justify-content-between align-items-center" id="pills-tab" role="tablist">
                                            <li class="nav-item w-50 cycle_selector" role="presentation" data-cycle="month">
                                                <button class="nav-link active button left grey font_20 linehight_19" id="pills-monthly-tab" data-bs-toggle="pill" data-bs-target="#" type="button" role="tab" aria-controls="pills-monthly" aria-selected="true">Monthly</button>
                                            </li>
                                            <li class="nav-item w-50 cycle_selector" role="presentation cycle_selector" data-cycle="year">
                                                <button class="nav-link button right grey font_20 linehight_19" id="pills-anually-tab" data-bs-toggle="pill" data-bs-target="#" type="button" role="tab" aria-controls="pills-anually" aria-selected="false">Annual</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- ==== Page Sign_Up(Tabs_Content) Tabs_Monthly_Anually Start === -->
                            <div class="tab-content mt-5" id="pills-tabContent">
                                <!-- ==== Page Sign_Up(Tabs_Content) Monthly Start === -->
                                <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                    <!-- ******** Planing tabs ********* -->
                                    <div class="planing-tabs mb-5">
                                        <ul class="nav nav-pills d-flex align-items-center justify-content-end mt-5" id="pills-tab" role="tablist">
                                            <li class="nav-item tab-item d-flex align-items-center justify-content-end " role="presentation" >
                                                <button class="nav-link active widget-subtitle grey rounded triangle plan-name" id="startup-tab" data-bs-toggle="pill" data-bs-target="#startup" type="button" role="tab" aria-controls="startup" aria-selected="true" data-plan="Startup">Startup</button>
                                            </li>
                                            <li class="nav-item tab-item d-flex align-items-center justify-content-end " role="presentation" >
                                                <button class="nav-link widget-subtitle grey rounded triangle plan-name" id="standard-tab" data-bs-toggle="pill" data-bs-target="#standard" type="button" role="tab" aria-controls="standard" aria-selected="false" data-plan="Standard">Standard</button>
                                            </li>
                                            <li class="nav-item tab-item d-flex align-items-center justify-content-end " role="presentation" >
                                                <button class="nav-link widget-subtitle grey rounded triangle plan-name" id="enterprise-tab" data-bs-toggle="pill" data-bs-target="#enterprise" type="button" role="tab" aria-controls="enterprise" aria-selected="false" data-plan="Enterprise">Enterprise</button>
                                            </li>
                                        </ul>
                                        <!-- ******** Planing tabs Content ********* -->
                                        <div class="tab-content" id="pills-tabContent">
                                            <!-- ** Planing tabs Content_Startup_1 ** -->
                                            <div class="public tab-pane fade show active price-calculation-area" id="startup" role="tabpanel" aria-labelledby="startup-tab">
                                                <div class="data d-flex align-items-center">
                                                    <div class="data--table cell-lg ">
                                                        <small class="linehight_19 font_16 grey fw-500 ps-5 monthly-price-text">Monthly Price</small>
                                                    </div>
                                                    <div class="data--table">
                                                        <small class="item1 text-center inehight_19 font_16 grey d-block monthly-old"></small>
                                                        <small class="item1 text-center widget-subtitle grey d-block monthly-current">$49.50</small>
                                                        <small class="item1 text-center inehight_19 font_16 grey d-block monthly-text"></small>
                                                    </div>
                                                    <div class="data--table">
                                                        <small class="text-center inehight_19 font_16 grey d-block monthly-standarad-old"></small>
                                                        <small class="text-center widget-subtitle grey d-block monthly-standarad-current">$99.00</small>
                                                        <small class="text-center inehight_19 font_16 grey d-block monthly-standarad-text"></small>

                                                    </div>
                                                    <div class="data--table">
                                                        <small class="text-center widget-subtitle grey d-block w-100">$0.40 Cents</small>
                                                        <small class="text-center inehight_19 font_16 grey d-block">Per Client</small>
                                                    </div>
                                                </div>
                                                <div class="data d-flex align-items-center lighten-gray">
                                                    <div class="data--table cell-lg">
                                                        <small class="inehight_19 font_16 grey fw-500 ps-5">Clients/Properties</small>
                                                    </div>
                                                    <div class="data--table">
                                                        <small class="item1 linehight_19 font_16 grey text-center d-block fw-500">11 - 40</small>
                                                    </div>
                                                    <div class="data--table">
                                                        <small class="linehight_19 font_16 grey text-center d-block fw-500">41 - 301</small>
                                                    </div>
                                                    <div class="data--table">
                                                        <small class="linehight_19 font_16 grey text-center d-block fw-500">301+</small>
                                                    </div>
                                                </div>
                                                <div class="data d-flex align-items-center">
                                                    <div class="data--table cell-lg">
                                                        <small class="linehight_19 font_16 grey pe-5 fw-500 d-block ps-5">All Features Included</small>
                                                        <small class="inehight_19 font_16 grey d-block w-75 ps-5">
                                                            Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                                        All software upgrades included</small>
                                                    </div>
                                                    <div class="data--table">
                                                        <div class="round">
                                                            <input required type="checkbox" id="checkbox11" />
                                                            <label class="item2" for="checkbox11"></label>
                                                        </div>
                                                    </div>
                                                    <div class="data--table">
                                                        <div class="round">
                                                            <input required type="checkbox" id="checkbox12" />
                                                            <label for="checkbox12"></label>
                                                        </div>
                                                    </div>
                                                    <div class="data--table">
                                                        <div class="round">
                                                            <input required type="checkbox" id="checkbox13" />
                                                            <label for="checkbox13"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ** Planing tabs Content_standard_2 ** -->
                                            <div class="public tab-pane price-calculation-area fade" id="standard" role="tabpanel" aria-labelledby="standard-tab">
                                                <div class="data d-flex align-items-center">
                                                    <div class="data--table cell-lg ">
                                                        <small class="linehight_19 font_16 grey fw-500 ps-5 monthly-price-text">Monthly Price</small>
                                                    </div>
                                                    <div class="data--table">
                                                        <small class="text-center inehight_19 font_16 grey d-block monthly-old"></small>
                                                        <small class="text-center widget-subtitle grey d-block monthly-current">$49.50</small>
                                                        <small class="text-center inehight_19 font_16 grey d-block monthly-text"></small>
                                                    </div>
                                                    <div class="data--table">
                                                        <small class="item1 text-center inehight_19 font_16 grey d-block monthly-standarad-old"></small>
                                                        <small class="item1 text-center widget-subtitle grey d-block monthly-standarad-current">$99.00</small>
                                                        <small class="item1 text-center inehight_19 font_16 grey d-block monthly-standarad-text"></small>

                                                    </div>
                                                    <div class="data--table">
                                                        <small class=" text-center widget-subtitle grey d-block">$0.40 Cents</small>
                                                        <small class="text-center inehight_19 font_16 grey d-block">Per Client</small>
                                                    </div>
                                                </div>
                                                <div class="data d-flex align-items-center lighten-gray">
                                                    <div class="data--table cell-lg">
                                                        <small class="inehight_19 font_16 grey fw-500 ps-5">Clients/Properties</small>
                                                    </div>
                                                    <div class="data--table">
                                                        <small class="linehight_19 font_16 grey text-center d-block fw-500">11 - 40</small>
                                                    </div>
                                                    <div class="data--table">
                                                        <small class="item1 linehight_19 font_16 grey text-center d-block fw-500">41 - 300</small>
                                                    </div>
                                                    <div class="data--table">
                                                        <small class="linehight_19 font_16 grey text-center d-block fw-500">301+</small>
                                                    </div>
                                                </div>
                                                <div class="data d-flex align-items-center">
                                                    <div class="data--table cell-lg">
                                                        <small class="linehight_19 font_16 grey pe-5 fw-500 d-block ps-5">All Features Included</small>
                                                        <small class="inehight_19 font_16 grey d-block w-75 ps-5">
                                                            Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                                        All software upgrades included</small>
                                                    </div>
                                                    <div class="data--table">
                                                        <div class="round">
                                                            <input required type="checkbox" id="checkbox15" />
                                                            <label for="checkbox15"></label>
                                                        </div>
                                                    </div>
                                                    <div class="data--table">
                                                        <div class="round">
                                                            <input required type="checkbox" id="checkbox16" />
                                                            <label class="item2" for="checkbox16"></label>
                                                        </div>
                                                    </div>
                                                    <div class="data--table">
                                                        <div class="round">
                                                            <input required type="checkbox" id="checkbox17" />
                                                            <label for="checkbox17"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ** Planing tabs Content_Enterprise_3 ** -->
                                            <div class="public tab-pane price-calculation-area fade" id="enterprise" role="tabpanel" aria-labelledby="enterprise-tab">
                                                <div class="data d-flex align-items-center">
                                                    <div class="data--table cell-lg ">
                                                        <small class="linehight_19 font_16 grey fw-500 ps-5 monthly-price-text">Monthly Price</small>
                                                    </div>
                                                    <div class="data--table">
                                                       <small class="text-center inehight_19 font_16 grey d-block monthly-old"></small>
                                                       <small class="text-center widget-subtitle grey d-block monthly-current">$49.50</small>
                                                       <small class="text-center inehight_19 font_16 grey d-block monthly-text"></small>
                                                   </div>
                                                   <div class="data--table">
                                                     <small class=" text-center inehight_19 font_16 grey d-block monthly-standarad-old"></small>
                                                     <small class=" text-center widget-subtitle grey d-block monthly-standarad-current">$99.00</small>
                                                     <small class=" text-center inehight_19 font_16 grey d-block monthly-standarad-text"></small>
                                                 </div>
                                                 <div class="data--table">
                                                    <small class="item1 text-center widget-subtitle grey d-block">$0.40 Cents</small>
                                                    <small class="text-center inehight_19 font_16 grey d-block">Per Client</small>
                                                </div>
                                            </div>
                                            <div class="data d-flex align-items-center lighten-gray">
                                                <div class="data--table cell-lg">
                                                    <small class="inehight_19 font_16 grey fw-500 ps-5">Clients/Properties</small>
                                                </div>
                                                <div class="data--table">
                                                    <small class="linehight_19 font_16 grey text-center d-block fw-500">11 - 40</small>
                                                </div>
                                                <div class="data--table">
                                                    <small class="linehight_19 font_16 grey text-center d-block fw-500">41 - 300</small>
                                                </div>
                                                <div class="data--table">
                                                    <small class="item1 linehight_19 font_16 grey text-center d-block fw-500">301+</small>
                                                </div>
                                            </div>
                                            <div class="data d-flex align-items-center">
                                                <div class="data--table cell-lg">
                                                    <small class="linehight_19 font_16 grey pe-5 fw-500 d-block ps-5">All Features Included</small>
                                                    <small class="inehight_19 font_16 grey d-block w-75 ps-5">
                                                        Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                                    All software upgrades included</small>
                                                </div>
                                                <div class="data--table">
                                                    <div class="round">
                                                        <input required type="checkbox" id="checkbox18" />
                                                        <label for="checkbox18"></label>
                                                    </div>
                                                </div>
                                                <div class="data--table">
                                                    <div class="round">
                                                        <input required type="checkbox" id="checkbox19" />
                                                        <label for="checkbox19"></label>
                                                    </div>
                                                </div>
                                                <div class="data--table">
                                                    <div class="round">
                                                        <input required type="checkbox" id="checkbox111" />
                                                        <label class="item2" for="checkbox111"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-75 primary_color_bg ms-auto d-flex align-items-center justify-content-between px-5 py-4 mt-3 rounded">
                                                <div class="widget-blue">
                                                    <h5 class="text-white linehight_19 font_16 mb-3 fw-bold">Enterprise Client Count</h5>
                                                    <p class="text-white linehight_19 font_16 m-0">Enterprise plans are purchased in increments
                                                    </p>
                                                </div>
                                                <div class="form-group w-25">
                                                    <span class="form-input">
                                                       <select class="form-control package-options" name="package-option" >

                                                       </select>
                                                       <img src="images/caret.svg" class="img-fluid caret-icon" alt="User icon">
                                                   </span>
                                               </div>

                                           </div>
                                           <small class="linehight_19 font_16 grey text-end pt-3 d-block">Please<a href="/contact-support" class="text-decoration-none primary_color_text bold ps-1">contact us</a> for detail and we’ll be
                                           happy to help.</small>
                                           <div class="row mt-5">
                                            {{-- <div class="col-12 pb-5 d-block">
                                                <h6 class="grey pb-4 linehight_34 font_30 fw-500 m-0">2. Choose your setup training
                                                </h6>
                                                <p class="linehight_19 font_16 grey s-italic m-0 ps-4">Get tailored and professional help from one of our Onboarding Specialist.</p>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action active header d-flex justify-content-between text-white rounded triangle" aria-current="true">
                                                        <p class="widget-subtitle p-0 m-0 ">Without Setup Training</p>
                                                        <p class="widget-subtitle p-0 m-0 ">$0</p>
                                                    </a>
                                                    <div class="text lighten-gray">
                                                        <p class="font_16 grey" style="line-height: 26px;">
                                                            So you want to go at it alone... not to fear, you can always reach out to our Customer Support team for specific help needs FREE of charge
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                                {{-- <div class="col-sm-12 col-md-6 ">
                                                    <div class="list-group">
                                                        <a href="#" class="list-group-item list-group-item-action header d-flex justify-content-between text-white rounded triangle" aria-current="true">
                                                            <p class="widget-subtitle p-0 m-0 ">One-Time Setup & Training</p>
                                                            <p class="widget-subtitle p-0 m-0 ">$50</p>
                                                        </a>
                                                        <div class="text lighten-gray">
                                                            <p class="font_16 grey" style="line-height: 26px;">Get tailored and professional help from one of our Onboarding Specialist. Including, but not limited to:</p>
                                                            <span class="d-flex align-items-center">
                                                                <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                                <p class="font_16 grey linehight-42 my-2">Import clients and create routes</p>
                                                            </span>
                                                            <span class="d-flex align-items-center">
                                                                <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                                <p class="font_16 grey linehight-42 my-2"> Setup tech’s task items and dosage costs</p>
                                                            </span>
                                                            <span class="d-flex align-items-center">
                                                                <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                                <p class="font_16 grey linehight-42 my-2">Setup recurring invoices and jobs</p>
                                                            </span>
                                                            <span class="d-flex align-items-center">
                                                                <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                                <p class="font_16 grey linehight-42 my-2">Setup visit report templates (email/sms)</p>
                                                            </span>
                                                            <span class="d-flex align-items-center">
                                                                <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                                <p class="font_16 grey linehight-42 my-2">Answer questions and provide guidance, etc.</p>
                                                            </span>
                                                            <span class="d-flex align-items-center">
                                                                <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                                <p class="font_16 grey linehight-42 my-2">... and more to make you successful with PSS!</p>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ==== Page Sign_Up(Tabs_Content) Anually Start === -->
                    <div class="tab-pane fade" id="pills-anually" role="tabpanel" aria-labelledby="pills-anually-tab">
                        <!-- ******** Planing tabs ********* -->
                        <div class="planing-tabs mb-5">
                            <ul class="nav nav-pills d-flex align-items-center justify-content-end mt-5" id="pills-tab" role="tablist">
                                <li class="nav-item tab-item d-flex align-items-center justify-content-end" role="presentation">
                                    <button class="nav-link active widget-subtitle grey rounded triangle" id="startup-anually-tab" data-bs-toggle="pill" data-bs-target="#startup-anually" type="button" role="tab" aria-controls="startup" aria-selected="true">Startup</button>
                                </li>
                                <li class="nav-item tab-item d-flex align-items-center justify-content-end" role="presentation">
                                    <button class="nav-link widget-subtitle grey rounded triangle" id="standard-anually-tab" data-bs-toggle="pill" data-bs-target="#standard-anually" type="button" role="tab" aria-controls="standard" aria-selected="false">Standard</button>
                                </li>
                                <li class="nav-item tab-item d-flex align-items-center justify-content-end" role="presentation">
                                    <button class="nav-link widget-subtitle grey rounded triangle" id="enterprise-anually-tab" data-bs-toggle="pill" data-bs-target="#enterprise-anually" type="button" role="tab" aria-controls="enterprise" aria-selected="false">Enterprise</button>
                                </li>
                            </ul>
                            <!-- ******** Planing tabs Content ********* -->
                            <div class="tab-content" id="pills-tabContent">
                                <!-- ** Planing tabs Content_Startup_1 ** -->
                                <div class="tab-pane fade show active" id="startup-anually" role="tabpanel" aria-labelledby="startup-anually-tab">
                                    <div class="data d-flex align-items-center">
                                        <div class="data--table cell-lg ">
                                            <small class="linehight_19 font_16 grey fw-500 ps-5">Anually Price</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center inehight_19 font_16 grey d-block"><del>$49.50</del></small>
                                            <small class="text-center widget-subtitle grey d-block">$44.55</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per month</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center inehight_19 font_16 grey d-block"><del>$99</del></small>
                                            <small class="text-center widget-subtitle grey d-block">$89.1</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per month</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center widget-subtitle grey d-block w-100">$0.40 Cents</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per client</small>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-items-center lighten-gray">
                                        <div class="data--table cell-lg">
                                            <small class="inehight_19 font_16 grey fw-500 ps-5">Clients/Properties</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">11 - 40</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">41 - 300</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">301+</small>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-items-center">
                                        <div class="data--table cell-lg">
                                            <small class="linehight_19 font_16 grey pe-5 fw-500 d-block ps-5">All Features Included</small>
                                            <small class="inehight_19 font_16 grey d-block w-75 ps-5">
                                                Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                            All software upgrades included</small>
                                        </div>
                                        <div class="data--table">
                                            <div class="round">
                                                <input required type="checkbox" id="checkbox" />
                                                <label for="checkbox"></label>
                                            </div>
                                        </div>
                                        <div class="data--table">
                                            <div class="round">
                                                <input required type="checkbox" id="checkbox1" />
                                                <label for="checkbox1"></label>
                                            </div>
                                        </div>
                                        <div class="data--table">
                                            <div class="round">
                                                <input required type="checkbox" id="checkbox2" />
                                                <label for="checkbox2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ** Planing tabs Content_standard_2 ** -->
                                <div class="tab-pane fade" id="standard-anually" role="tabpanel" aria-labelledby="standard-anually-tab">
                                    <div class="data d-flex align-items-center">
                                        <div class="data--table cell-lg ">
                                            <small class="linehight_19 font_16 grey fw-500 ps-5">Anually Price</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center inehight_19 font_16 grey d-block"><del>$49.50</del></small>
                                            <small class="text-center widget-subtitle grey d-block">$44.55</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per month</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center inehight_19 font_16 grey d-block"><del>$99</del></small>
                                            <small class="text-center widget-subtitle grey d-block">$89.1</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per month</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center widget-subtitle grey d-block w-100">$0.40 Cents</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per client</small>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-items-center lighten-gray">
                                        <div class="data--table cell-lg">
                                            <small class="inehight_19 font_16 grey fw-500 ps-5">Clients/Properties</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">11 - 40</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">41 - 300</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">301+</small>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-items-center">
                                        <div class="data--table cell-lg">
                                            <small class="linehight_19 font_16 grey pe-5 fw-500 d-block ps-5">All Features Included</small>
                                            <small class="inehight_19 font_16 grey d-block w-75 ps-5">
                                                Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                            All software upgrades included</small>
                                        </div>
                                        <div class="data--table">
                                            <div class="round">
                                                <input required type="checkbox" id="checkbox3" />
                                                <label for="checkbox3"></label>
                                            </div>
                                        </div>
                                        <div class="data--table">
                                            <div class="round">
                                                <input required type="checkbox" id="checkbox4" />
                                                <label for="checkbox4"></label>
                                            </div>
                                        </div>
                                        <div class="data--table">
                                            <div class="round">
                                                <input required type="checkbox" id="checkbox5" />
                                                <label for="checkbox5"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ** Planing tabs Content_Enterprise_3 ** -->
                                <div class="tab-pane fade" id="enterprise-anually" role="tabpanel" aria-labelledby="enterprise-anually-tab">
                                    <div class="data d-flex align-items-center">
                                        <div class="data--table cell-lg ">
                                            <small class="linehight_19 font_16 grey fw-500 ps-5">Anually Price</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center inehight_19 font_16 grey d-block"><del>$49.50</del></small>
                                            <small class="text-center widget-subtitle grey d-block">$44.55</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per month</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center inehight_19 font_16 grey d-block"><del>$99</del></small>
                                            <small class="text-center widget-subtitle grey d-block">$89.1</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per month</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="text-center widget-subtitle grey d-block w-100">$0.40 Cents</small>
                                            <small class="text-center inehight_19 font_16 grey d-block">per client</small>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-items-center lighten-gray">
                                        <div class="data--table cell-lg">
                                            <small class="inehight_19 font_16 grey fw-500 ps-5">Clients/Properties</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">11 - 40</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">41 - 300</small>
                                        </div>
                                        <div class="data--table">
                                            <small class="linehight_19 font_16 grey text-center d-block fw-500">301+</small>
                                        </div>
                                    </div>
                                    <div class="data d-flex align-items-center">
                                        <div class="data--table cell-lg">
                                            <small class="linehight_19 font_16 grey pe-5 fw-500 d-block ps-5">All Features Included</small>
                                            <small class="inehight_19 font_16 grey d-block w-75 ps-5">
                                                Routing, Service Reports, Invoicing, Dosage Costing, GPS Geo-location, LSI, Readings, and so much more!
                                            All software upgrades included</small>
                                        </div>
                                        <div class="data--table">
                                            <div class="round">
                                                <input required type="checkbox" id="checkbox6" />
                                                <label for="checkbox6"></label>
                                            </div>
                                        </div>
                                        <div class="data--table">
                                            <div class="round">
                                                <input required type="checkbox" id="checkbox7" />
                                                <label for="checkbox7"></label>
                                            </div>
                                        </div>
                                        <div class="data--table">
                                            <div class="round">
                                                <input required type="checkbox" id="checkbox8" />
                                                <label for="checkbox8"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-75 primary_color_bg ms-auto d-flex align-items-center justify-content-between px-5 py-4 mt-3 rounded">
                                        <div class="widget-blue">
                                            <h5 class="text-white linehight_19 font_16 mb-3 fw-bold">Enterprise Client Count</h5>
                                            <p class="text-white linehight_19 font_16 m-0">Enterprise plans are purchased in increments
                                            </p>
                                        </div>
                                        <div class="form-group w-25">
                                            <span class="form-input">
                                                <select class="form-control linehight_19 font_16" id="">
                                                    <option>Choose One</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                                <img src="images/caret.svg" class="img-fluid caret-icon" alt="User icon">
                                            </span>
                                        </div>

                                    </div>
                                    <small class="linehight_19 font_16 grey text-end pt-3 d-block">Please<a href="/contact-support" class="text-decoration-none primary_color_text bold ps-1">contact us</a> for detail information and we’ll be
                                    happy to help.</small>
                                    <div class="row mt-5">
                                        <div class="col-12 pb-5 d-block">
                                            <h6 class="grey pb-4 linehight_34 font_30 fw-500 m-0">2. Choose your setup training
                                            </h6>
                                            <p class="linehight_19 font_16 grey s-italic m-0 ps-4">Get tailored and professional help from one of our Onboarding Specialist.</p>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action active header d-flex justify-content-between text-white rounded triangle" aria-current="true">
                                                    <p class="widget-subtitle p-0 m-0 ">Without Setup Training</p>
                                                    <p class="widget-subtitle p-0 m-0 ">$0</p>
                                                </a>
                                                <div class="text lighten-gray">
                                                    <p class="font_16 grey" style="line-height: 26px;">
                                                        So you want to go at it alone... not to fear, you can always reach out to our Customer Support team for specific help needs FREE of charge
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 ">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action header d-flex justify-content-between text-white rounded triangle" aria-current="true">
                                                    <p class="widget-subtitle p-0 m-0 ">One-Time Setup & Training</p>
                                                    <p class="widget-subtitle p-0 m-0 ">$50</p>
                                                </a>
                                                <div class="text lighten-gray">
                                                    <p class="font_16 grey" style="line-height: 26px;">Get tailored and professional help from one of our Onboarding Specialist. Including, but not limited to:</p>
                                                    <span class="d-flex align-items-center">
                                                        <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                        <p class="font_16 grey linehight-42 my-2">Import clients and create routes</p>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                        <p class="font_16 grey linehight-42 my-2"> Setup tech’s task items and dosage costs</p>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                        <p class="font_16 grey linehight-42 my-2">Setup recurring invoices and jobs</p>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                        <p class="font_16 grey linehight-42 my-2">Setup visit report templates (email/sms)</p>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                        <p class="font_16 grey linehight-42 my-2">Answer questions and provide guidance, etc.</p>
                                                    </span>
                                                    <span class="d-flex align-items-center">
                                                        <img class="img-fluid pe-4" src="images/right-s.svg" alt="">
                                                        <p class="font_16 grey linehight-42 my-2">... and more to make you successful with PSS!</p>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center pt-5">
                <a href="#" class="back-to-basic"><img src="images/pre-btn.svg" class="img-fluid" alt=""></a>
                <a href="#" class="text-decoration-none form-button md-btn secondary_color_bg text-white ms-auto check-plans b-100-radious">Next Step
                    <img src="images/next-icon.svg" class="img-fluid caret-icon" alt="User icon">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ==== Page Sign_Up(tabs_content_3) Start === -->
<div class="tab-pane fade p-payment" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <div class="contact-form p-0 widget-shadow widget-contact">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="payment-method p-payment-method">
                    <h6 class="widget-subtitle grey pb-5 m-0">Payment Method</h6>
                    <div class="brand-logos pb-4">
                        <img class="img-fluid" src="images/visa.svg" alt="">
                        <img class="img-fluid" src="images/master.svg" alt="">
                        <img class="img-fluid" src="images/express.svg" alt="">
                        <img class="img-fluid" src="images/discover.svg" alt="">
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="exampleInputFirstName" class="form-label linehight_19 font_16 grey ps-3 px-4">Name On Card</label>
                                <input required type="text" class="form-control linehight_19 font_16 px-4" id="exampleInputFirstName" aria-describedby="NameHelp" name="cardname" placeholder="Name On Card" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="exampleInputCard" class="form-label linehight_19 font_16 grey ps-3 px-4">Card Number</label>
                                <span class="form-input">
                                    <input required type="text" class="form-control linehight_19 font_16 px-4" id="exampleInputCardNumber" name="cardnum" required  data-keeper-lock-id="">
                                    <img src="images/pass.svg" class="img-fluid caret-icon" alt="User icon">
                                </span>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="exampleInputClient" class="form-label linehight_19 font_16 grey ps-3">Expiration
                                    Date</label>
                                    <span class="form-input">
                                        <select class="form-control px-4" id="" name="cardexpmonth" required>
                                            <option value="">Month</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>

                                        </select>
                                        <img src="images/caret.svg" class="img-fluid caret-icon" alt="User icon">
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">&nbsp;</label>
                                    <span class="form-input">
                                        <select class="form-control px-4" id="" name="cardexpyear">
                                            <option>Year</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>

                                        </select>
                                        <img src="images/caret.svg" class="img-fluid caret-icon" alt="User icon">
                                    </span>
                                </div>
                            </div>
                            <div class="col-12  col-md-4 mb-3">
                                <label for="exampleInputFirstName" class="form-label linehight_19 font_16 grey ps-3 px-4">CVV</label>
                                <input required type="text" class="form-control px-4" id="exampleInputFirstName" aria-describedby="NameHelp" name="cardcvv" placeholder="CVV" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label linehight_19 font_16 grey ps-3 px-4">VAT Number (optional)</label>
                                <input required type="text" class="form-control" id="" name="vat" placeholder="VAT Number" required>
                            </div>
                        </div>
                    </form>
                    <div class="primary-padding my-5 d-flex align-items-center justify-content-between">
                        <img class="img-fluid" src="images/stripe.svg" alt="">
                        <img class="img-fluid" src="images/aes.svg" alt="">
                        <img class="img-fluid" src="images/safe.svg" alt="">
                        <img class="img-fluid" src="images/guaranteed.svg" alt="">
                    </div>
                    <a href="#" class="back-to-palns"><img src="images/pre-btn.svg" class="img-fluid" alt=""></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 primary_color_bg">
                <div class="order-summary p-payment-method">
                    <h6 class="widget-subtitle text-white pb-5 m-0">Order Summary</h6>
                    <div class="row d-flex align-items-center mb-5">
                        <div class="col-sm-12 col-md-8">
                            <h6 class=" linehight_19 font_20 grey text-white bold plan-container">Start Up Plan</h6>
                            <p class=" linehight_19 font_16 grey text-white m-0 clientss-container">10-40 Clients</p>
                        </div>
                        <div class="col-sm-12 col-md-4 text-end">
                            <h6 class=" linehight_19 font_20 grey text-white bold m-0 amount-contain">$49.50</h6>
                        </div>
                    </div>
                    <hr>
                    <h6 class="widget-subtitle text-white pb-3 m-0">Coupon Code</h6>
                    <form class="coupon-code d-flex align-items-center justify-content-between coupon_check">
                        {{ csrf_field() }}
                        <input required type="text" class="form-control coupon-field" id="code" name="coupon" placeholder="coupon code" required>
                        <a href="#" class="text-decoration-none  linehight_19 font_16 grey coupon-btn secondary_color_bg text-white d-flex align-items-center justify-content-center apply-coupon">Apply</a>
                    </form>
                    <hr>
                    <div class="d-flex align-items-center justify-content-between pb-2">
                        <p class=" linehight_19 font_20 grey text-white">Subtotal</p>
                        <p class=" linehight_19 font_16 grey text-white amount-contain">$99.50</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p class=" linehight_19 font_20 grey text-white">Discount</p>
                        <p class=" linehight_19 font_16 grey text-white"> - </p>
                    </div>
                    <hr>
                    <div class="d-flex align-items-center justify-content-between pb-3">
                        <h6 class="widget-subtitle text-white bold">Total</h6>
                        <h6 class="widget-subtitle text-white bold amount-contain">$99.50</h6>
                    </div>
                    <p class="font_14 text-white pb-5">All subscription plans will be automatically renewed using the payment method you provide today. You may cancel at anytime to avoid future charges. By clicking “Pay & Create Account”, you agree to Pool Service
                        Software
                        <span class="bold">Terms of Use</span> and
                        <span class="bold">Privacy Statement</span>.
                    </p>
                    <span class="form-input">
                        <a href="#" class="text-decoration-none pay-btn ps-4 secondary_color_bg text-white  linehight_19 font_16 grey bold d-flex align-items-center justify-content-center flex-direction-columns pay-create-account">Pay
                            & Create Account
                            <span class="pay-text text-white m-0">100% Secure Checkout</span>
                            <img src="images/lock.svg" class="img-fluid lock-icon" alt="User icon">
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</form>
</div>
</main>
</article>
<div id="map"></div>

@endsection
@section('script')

<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBasphxbX9wLvunNdz479Ux8281cgUTyA8&callback=initAutocomplete&libraries=places&v=weekly"
async
></script>

<script>
 function initAutocomplete() {
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -33.8688, lng: 151.2195 },
    zoom: 13,
    mapTypeId: "roadmap",
});
  // Create the search box and link it to the UI element.
  const input = document.getElementById("pac-input");
  const searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  // Bias the SearchBox results towards current map's viewport.
  map.addListener("bounds_changed", () => {
    searchBox.setBounds(map.getBounds());
});
  let markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener("places_changed", () => {
    const places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
  }
    // Clear out the old markers.
    markers.forEach((marker) => {
      marker.setMap(null);
  });
    markers = [];
    // For each place, get the icon, name and location.
    const bounds = new google.maps.LatLngBounds();
    places.forEach((place) => {
      if (!place.geometry || !place.geometry.location) {
        console.log("Returned place contains no geometry");
        return;
    }
    const icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25),
    };
      // Create a marker for each place.
      markers.push(
        new google.maps.Marker({
          map,
          icon,
          title: place.name,
          position: place.geometry.location,
      })
        );

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
    } else {
        bounds.extend(place.geometry.location);
    }
});
    map.fitBounds(bounds);
});
}


{{-- Location Searcg End --}}

function detectWindow(){
    var detectOS = "Unknown OS";

    if (navigator.appVersion.indexOf("Win") != -1)
        detectOS = "Windows";

    if (navigator.appVersion.indexOf("Mac") != -1)
        detectOS = "MacOS";

    if (navigator.appVersion.indexOf("Linux") != -1)
        detectOS = "Linux";
    return detectOS;

}

function detectBrowser() {
    if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1 ) {
        return 'Opera';
    } else if(navigator.userAgent.indexOf("Chrome") != -1 ) {
        return 'Chrome';
    } else if(navigator.userAgent.indexOf("Safari") != -1) {
        return 'Safari';
    } else if(navigator.userAgent.indexOf("Firefox") != -1 ){
        return 'Firefox';
    } else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) {
        return 'IE';//crap
    } else {
        return 'Unknown';
    }
}

function SHA256(s){
 var chrsz = 8;
 var hexcase = 0;

 function safe_add (x, y) {
     var lsw = (x & 0xFFFF) + (y & 0xFFFF);
     var msw = (x >> 16) + (y >> 16) + (lsw >> 16);
     return (msw << 16) | (lsw & 0xFFFF);
 }

 function S (X, n) { return ( X >>> n ) | (X << (32 - n)); }
 function R (X, n) { return ( X >>> n ); }
 function Ch(x, y, z) { return ((x & y) ^ ((~x) & z)); }
 function Maj(x, y, z) { return ((x & y) ^ (x & z) ^ (y & z)); }
 function Sigma0256(x) { return (S(x, 2) ^ S(x, 13) ^ S(x, 22)); }
 function Sigma1256(x) { return (S(x, 6) ^ S(x, 11) ^ S(x, 25)); }
 function Gamma0256(x) { return (S(x, 7) ^ S(x, 18) ^ R(x, 3)); }
 function Gamma1256(x) { return (S(x, 17) ^ S(x, 19) ^ R(x, 10)); }

 function core_sha256 (m, l) {
     var K = new Array(0x428A2F98, 0x71374491, 0xB5C0FBCF, 0xE9B5DBA5, 0x3956C25B, 0x59F111F1, 0x923F82A4, 0xAB1C5ED5, 0xD807AA98, 0x12835B01, 0x243185BE, 0x550C7DC3, 0x72BE5D74, 0x80DEB1FE, 0x9BDC06A7, 0xC19BF174, 0xE49B69C1, 0xEFBE4786, 0xFC19DC6, 0x240CA1CC, 0x2DE92C6F, 0x4A7484AA, 0x5CB0A9DC, 0x76F988DA, 0x983E5152, 0xA831C66D, 0xB00327C8, 0xBF597FC7, 0xC6E00BF3, 0xD5A79147, 0x6CA6351, 0x14292967, 0x27B70A85, 0x2E1B2138, 0x4D2C6DFC, 0x53380D13, 0x650A7354, 0x766A0ABB, 0x81C2C92E, 0x92722C85, 0xA2BFE8A1, 0xA81A664B, 0xC24B8B70, 0xC76C51A3, 0xD192E819, 0xD6990624, 0xF40E3585, 0x106AA070, 0x19A4C116, 0x1E376C08, 0x2748774C, 0x34B0BCB5, 0x391C0CB3, 0x4ED8AA4A, 0x5B9CCA4F, 0x682E6FF3, 0x748F82EE, 0x78A5636F, 0x84C87814, 0x8CC70208, 0x90BEFFFA, 0xA4506CEB, 0xBEF9A3F7, 0xC67178F2);
     var HASH = new Array(0x6A09E667, 0xBB67AE85, 0x3C6EF372, 0xA54FF53A, 0x510E527F, 0x9B05688C, 0x1F83D9AB, 0x5BE0CD19);
     var W = new Array(64);
     var a, b, c, d, e, f, g, h, i, j;
     var T1, T2;

     m[l >> 5] |= 0x80 << (24 - l % 32);
     m[((l + 64 >> 9) << 4) + 15] = l;

     for ( var i = 0; i<m.length; i+=16 ) {
         a = HASH[0];
         b = HASH[1];
         c = HASH[2];
         d = HASH[3];
         e = HASH[4];
         f = HASH[5];
         g = HASH[6];
         h = HASH[7];

         for ( var j = 0; j<64; j++) {
             if (j < 16) W[j] = m[j + i];
             else W[j] = safe_add(safe_add(safe_add(Gamma1256(W[j - 2]), W[j - 7]), Gamma0256(W[j - 15])), W[j - 16]);

             T1 = safe_add(safe_add(safe_add(safe_add(h, Sigma1256(e)), Ch(e, f, g)), K[j]), W[j]);
             T2 = safe_add(Sigma0256(a), Maj(a, b, c));

             h = g;
             g = f;
             f = e;
             e = safe_add(d, T1);
             d = c;
             c = b;
             b = a;
             a = safe_add(T1, T2);
         }

         HASH[0] = safe_add(a, HASH[0]);
         HASH[1] = safe_add(b, HASH[1]);
         HASH[2] = safe_add(c, HASH[2]);
         HASH[3] = safe_add(d, HASH[3]);
         HASH[4] = safe_add(e, HASH[4]);
         HASH[5] = safe_add(f, HASH[5]);
         HASH[6] = safe_add(g, HASH[6]);
         HASH[7] = safe_add(h, HASH[7]);
     }
     return HASH;
 }

 function str2binb (str) {
     var bin = Array();
     var mask = (1 << chrsz) - 1;
     for(var i = 0; i < str.length * chrsz; i += chrsz) {
         bin[i>>5] |= (str.charCodeAt(i / chrsz) & mask) << (24 - i % 32);
     }
     return bin;
 }

 function Utf8Encode(string) {
     string = string.replace(/\r\n/g,'\n');
     var utftext = '';

     for (var n = 0; n < string.length; n++) {

         var c = string.charCodeAt(n);

         if (c < 128) {
             utftext += String.fromCharCode(c);
         }
         else if((c > 127) && (c < 2048)) {
             utftext += String.fromCharCode((c >> 6) | 192);
             utftext += String.fromCharCode((c & 63) | 128);
         }
         else {
             utftext += String.fromCharCode((c >> 12) | 224);
             utftext += String.fromCharCode(((c >> 6) & 63) | 128);
             utftext += String.fromCharCode((c & 63) | 128);
         }

     }

     return utftext;
 }

 function binb2hex (binarray) {
     var hex_tab = hexcase ? '0123456789ABCDEF' : '0123456789abcdef';
     var str = '';
     for(var i = 0; i < binarray.length * 4; i++) {
         str += hex_tab.charAt((binarray[i>>2] >> ((3 - i % 4)*8+4)) & 0xF) +
         hex_tab.charAt((binarray[i>>2] >> ((3 - i % 4)*8 )) & 0xF);
     }
     return str;
 }

 s = Utf8Encode(s);
 return binb2hex(core_sha256(str2binb(s), s.length * chrsz));
}
$(document).ready(function(){
    $('.error-message').hide();
    secret = SHA256('websitereg');
    $('.secret').val('websitereg')
    $('.device').val(detectBrowser());
    $('.osname').val(detectWindow());
    var date1 = new Date();
    $('.utcoffset').val(date1.getTimezoneOffset());


    $(document).on('click','.apply-coupon',function(e){
        form_data = $('.coupon_check').serialize();

        $.ajax({
            url:"/check-coup",
            type:"post",
            data:form_data,
            beforeSend:function(){

            },
            error: function(response){
               $('.coupon_verified').val($('.coupon-field').val());
               $('.error-message').show();
               $('.error-message').html('Coupon is not valid');
               return false;
           },
           success:function(response){
            if(response.success == 1){
             $('.error-message').hide();
         }
     }
 });

    });

    $(document).on('click','.cycle_selector',function(e){
        var cycle = $(this).data('cycle');
        $('.plan_cycle').val(cycle);
        var plan_name = $('.plan-name.active').data('plan');
        $('.planname').val(plan_name);
        if(cycle=='year'){
            $('.monthly-old').html('<del>$49.50</del>');
            $('.monthly-standarad-old').html('<del>$99.00</del>');
            $('.monthly-current').html('$44.55');
            $('.monthly-standarad-current').html('$89.10');
            $('.monthly-text').html('per month');
            $('.monthly-standarad-text').html('per month');
            $('.monthly-price-text').html('Annual Price');
        }else{
            $('.monthly-old').html('');
            $('.monthly-standarad-old').html('');
            $('.monthly-current').html('$49.50');
            $('.monthly-standarad-current').html('$99.00');
            $('.monthly-text').html('');
            $('.monthly-standarad-text').html('');
            $('.monthly-price-text').html('Monthly Price');
        }
    });
    $(document).on('click','.get-basic-info',function(e){
        name = $('input[name="fname"]').val();
        lname = $('input[name="lname"]').val();
        cmpname = $('input[name="cmpname"]').val();
        address = $('input[name="address"]').val();
        country = $('input[name="country"]').val();
        mobphone = $('input[name="mobphone"]').val();
        clientcount = $('input[name="clientcount"]').val();
        email = $('input[name="email"]').val();
        password = $('input[name="password"]').val();

        if(name == ''){
            $('.error-message').show();
            $('.error-message').html('First Name is required');
            return false;
        }
        if(lname == ''){
            $('.error-message').show();
            $('.error-message').html('Last Name is required');
            return false;
        }
        if(cmpname == ''){
            $('.error-message').show();
            $('.error-message').html('Business Name is required');
            return false;
        }
        if(address == ''){
            $('.error-message').show();
            $('.error-message').html('Address is required');
            return false;
        }
        if(country == ''){
            $('.error-message').show();
            $('.error-message').html('Country is required');
            return false;
        }
        if(mobphone == ''){
            $('.error-message').show();
            $('.error-message').html('Mobile Phone is required');
            return false;
        }
        if(clientcount == ''){
            $('.error-message').show();
            $('.error-message').html('Client Count Phone is required');
            return false;
        }
        if(email == ''){
            $('.error-message').show();
            $('.error-message').html('email is required');
            return false;
        }
        if(password == ''){
            $('.error-message').show();
            $('.error-message').html('Password is required');
            return false;
        }

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var phoneformat = /^\+?(\d{1,3}[\s-]?)?(\d[\s-]?)?[\(\[\s-]{0,2}?\d{2,4}[\)\]\s-]{0,2}?\d{3,4}[\s-]?(\d{3,5})?$/i;

        if(!email.match(mailformat))
        {
            $('.error-message').show();
            $('.error-message').html('Please enter a valid email');
            return false;
        }
        if(!mobphone.match(phoneformat))
        {
            $('.error-message').show();
            $('.error-message').html('Please enter a valid phone number');
            return false;
        }
        if(password.length < 6)
        {
            $('.error-message').show();
            $('.error-message').html('Password should be minimum of 6  characters');
            return false;
        }
        $('.error-message').hide();
        clients = $('.clients').val();
        if(clients > 40){
            $('.widget-subtitle').removeClass('active');
            $('.price-calculation-area').removeClass('active');
            $('.price-calculation-area').removeClass('show');
            $('.planid').val('subscribe69');
            if(clients > 300){
                $('#enterprise-tab').addClass('active');
                $('#enterprise').addClass('active show');
                $('.planid').val('');
                form_data = $('.basic-info-form').serialize();
                $.ajax({
                    url:"/make-plan",
                    type:"post",
                    data:form_data,
                    beforeSend:function(){

                    },
                    error: function(response){
                            //console.log(response.message);
                            console.log(response);
                        },
                        success:function(response){
                            $('.package-options').html(response);
                            console.log(response);
                        }
                    });

            }else{
                $('#standard-tab').addClass('active');
                $('#standard').addClass('active show');

            }
        }
        $('#pills-home').removeClass('show');
        $('#pills-home').removeClass('active');
        $('#pills-home-tab').removeClass('active');
        $('#pills-profile').addClass('show active');
        $('#pills-profile-tab, #pills-home-tab').addClass('active');
        $( "#pills-profile-tab" ).scroll();
        var plan_name = $('.plan-name.active').data('plan');
        $('.planname').val(plan_name);
    });
$(document).on('click','.back-to-palns',function(e){
    $('#pills-contact').removeClass('show');
    $('#pills-contact').removeClass('active');
    $('#pills-contact-tab').removeClass('active');
    $('#pills-profile').addClass('show active');
    $('pills-profile-tab').addClass('active');
});

$(document).on('click','.back-to-basic',function(e){


    $('#pills-profile').removeClass('show');
    $('#pills-profile').removeClass('active');
    $('#pills-profile-tab').removeClass('active');
    $('#pills-home').addClass('show active');
    $('#pills-home-tab').addClass('active');
});
$(document).on('click','.check-plans',function(e){


    form_data = $('.basic-info-form').serialize();
    $.ajax({
        url:"/check-plan",
        type:"post",
        data:form_data,
        beforeSend:function(){

        },
        error: function(response){

            console.log("I am here");
        },
        success:function(response){
            $('#pills-profile').removeClass('show');
            $('#pills-profile').removeClass('active');
            $('#pills-profile-tab').removeClass('active');
            $('#pills-contact').addClass('show active');
            $('#pills-contact-tab, #pills-profile-tab').addClass('active');
            $('.planid').val(response.plan_id);
            $('.amount-contain').html('$'+response.amount);
            $('.plan-container').html($('.planname').val()+' Plan');
            $('.clientss-container').html('Up to '+response.clients+' Clients');
        }
    })

});
$(document).on('click','.pay-create-account',function(e){
    e.preventDefault();

    name = $('input[name="fname"]').val();
    lname = $('input[name="lname"]').val();
    cmpname = $('input[name="cmpname"]').val();
    address = $('input[name="address"]').val();
    country = $('input[name="country"]').val();
    mobphone = $('input[name="mobphone"]').val();
    clientcount = $('input[name="clientcount"]').val();
    email = $('input[name="email"]').val();
    password = $('input[name="password"]').val();
    cardname = $('input[name="cardname"]').val();
    cardnum = $('input[name="cardnum"]').val();
    cardexpmonth = $('select[name=cardexpmonth] option').filter(':selected').val();
    cardcvv = $('input[name="cardcvv"]').val();

    if(cardname == ''){
        $('.error-message').show();
        $('.error-message').html('Card Name is required');
        return false;
    }
    if(cardnum == ''){
        $('.error-message').show();
        $('.error-message').html('Card Number is required');
        return false;
    }
    if(cardexpmonth == ''){
        $('.error-message').show();
        $('.error-message').html('Card Expire Month is required');
        return false;
    }
    if(cardcvv == ''){
        $('.error-message').show();
        $('.error-message').html('Card Cvv is required');
        return false;
    }
    if(name == ''){
        $('.error-message').show();
        $('.error-message').html('First Name is required');
        return false;
    }
    if(lname == ''){
        $('.error-message').show();
        $('.error-message').html('Last Name is required');
        return false;
    }
    if(cmpname == ''){
        $('.error-message').show();
        $('.error-message').html('Business Name is required');
        return false;
    }
    if(address == ''){
        $('.error-message').show();
        $('.error-message').html('Address is required');
        return false;
    }
    if(country == ''){
        $('.error-message').show();
        $('.error-message').html('Country is required');
        return false;
    }
    if(mobphone == ''){
        $('.error-message').show();
        $('.error-message').html('Mobile Phone is required');
        return false;
    }
    if(clientcount == ''){
        $('.error-message').show();
        $('.error-message').html('Client Count Phone is required');
        return false;
    }
    if(email == ''){
        $('.error-message').show();
        $('.error-message').html('email is required');
        return false;
    }
    if(password == ''){
        $('.error-message').show();
        $('.error-message').html('Password is required');
        return false;
    }


    password = SHA256(password);
    $('input[name="password"]').val(password);
    form_data = $('.basic-info-form').serialize();
    $.ajax({
        url:"https://beta.poolservice.software/api/subscribe",
        type:"post",
        data:form_data,
        beforeSend:function(){

        },
        error: function(response){
                            //console.log(response.message);
                            console.log("I am here");
                        },
                        success:function(response){
                            window.location.replace("/subscription-started");
                        }
                    })

});
}
);

</script>
@endsection
