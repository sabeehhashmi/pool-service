@extends('layouts.app')

@section('content')
<!-- ==== Page main_content Content Start === -->
<main>
    <!-- ==== Section Banner === -->
    <section class="banner">
        <div class="home-container">
            <div class="row d-flex">
                <div class="col-12 col-md-5 pt-5 padding-left" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="tagline d-flex align-items-center mb-4">
                        <img class="img-fluid icons" src="images/ellipse.png" alt="">
                        <img class="img-fluid icons" src="images/ellipse.png" alt="">
                        <img class="img-fluid icons" src="images/ellipse.png" alt="">
                        <span class="primary_color_text bold">MODERN SOFTWARE</span>
                    </div>
                    <div class="banner-title">
                        <h1 class="primary_color_text m-0 pb-1">Easy & Powerful</h1>
                        <h1 class="secondary_color_text m-0 pb-1">All-in-One App</h1>
                        <p class="py-4 dark_gray linehight_19 font_16">Routes, Jobs, Quotes, Invoices, Dosage Costs & more!</p>
                    </div>
                    <div class="b-icons pb-3">
                        <a href="#"><img class="img-fluid icons  ps-2" alt="" src="images/window.png"></a>
                        <a href="#"><img class="img-fluid icons  ps-2" alt="" src="images/apple.png"></a>
                        <a href="#"><img class="img-fluid icons  ps-2" alt="" src="images/android.png"></a>
                    </div>
                    <form class="d-flex py-4">
                        <button class="button_btn main_btn secondary_color_bg text-white" type="submit">Download
                        App</button>
                        <button class="button_btn main_btn banner_btn primary_color_text ms-3" type="submit">Get
                        Demo</button>
                    </form>
                </div>
                <div class="col-12 col-md-7 d-flex justify-content-end" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img class="img-fluid" src="images/banner.svg" alt="banner image">
                </div>
            </div>
        </div>
    </section>

    <!-- ==== Section Feature's === -->
    <section class="features" id="features">

        <article class="feature_tabs widget-tabs primary_color_bg">

            <div class="feature-main text-center py-5">

                <p class="tag-title secondary_color_text m-0 text-center fw-500">We Provide Awesome Features</p>

                <p class="tag-title text-white m-0 text-center fw-500">to Our Customers</p>
            </div>

            <!--- Features Tab's Buttons ---->

            <div class="container">

                <div class="tab-btn align_items">

                    <button class="tablinks align_items active"  onmouseover="features(event, 'routing-tab')">

                        <img class="img-fluid white-icon"  src="images/White-Routing.svg"  alt="White Routing">

                        <img class="img-fluid blue-icon"  src="images/blue-routing.svg"  alt="Blue Routing">

                        <p class="text-wrap">Routing</p>
                    </button>

                    <button class="tablinks align_items"  onmouseover="features(event, 'job-tab')">

                        <img class="img-fluid white-icon"  src="images/Whit-Jobs-Quotes.svg"  alt="White Job Qoutes">

                        <img class="img-fluid blue-icon"  src="images/blue-Jobs-Quotes.svg"  alt="Blue Job Qoutes">

                        <p class="text-wrap">Jobs <br>& Quotes</p>
                    </button>

                    <button class="tablinks align_items"  onmouseover="features(event, 'Invoicing-tab')">

                        <img class="img-fluid white-icon"  src="images/White-Invoicing.svg"  alt="White Invoicing">

                        <img class="img-fluid blue-icon"  src="images/blue-Invoicing.svg"  alt="Blue Invoicing">

                        <p class="text-wrap">Invoicing <br>& Payments</p>
                    </button>

                    <button class="tablinks align_items"  onmouseover="features(event, 'track-cost')">

                        <img class="img-fluid white-icon"  src="images/White-Track-Cost.svg"  alt="White Track Cost">

                        <img class="img-fluid blue-icon"  src="images/blue-track-cost.svg"  alt="Blue Track Cost">

                        <p class="text-wrap">Track <br>Costs</p>
                    </button>

                    <button class="tablinks align_items"  onmouseover="features(event, 'shoping-tab')">

                        <img class="img-fluid white-icon"  src="images/White-Shopping-List.svg"  alt="Shoping">

                        <img class="img-fluid blue-icon"  src="images/blue-shopping-list.svg"  alt="Blue Shoping List">

                        <p class="text-wrap">Shopping List</p>
                    </button>

                    <button class="tablinks align_items"  onmouseover="features(event, 'visit-tab')">

                        <img class="img-fluid white-icon"  src="images/White-Visit-report.svg"  alt="Visitors Reports">

                        <img class="img-fluid blue-icon"  src="images/blue-visit-report.svg"  alt="Blue Visit report">

                        <p class="text-wrap">visit <br>Reports</p>
                    </button>

                    <button class="tablinks align_items"  onmouseover="features(event, 'equipment-tab')">

                        <img class="img-fluid white-icon"  src="images/white-equipments.svg"  alt="Equipments">

                        <img class="img-fluid blue-icon"  src="images/blue-equipments.svg"  alt="Blue Equipments">

                        <p class="text-wrap">Equipments</p>
                    </button>

                    <button class="tablinks align_items"  onmouseover="features(event, 'dosage-tab')">

                        <img class="img-fluid white-icon"  src="images/White-Reading-Dosages.svg"  alt="Reading Dosages">

                        <img class="img-fluid blue-icon"  src="images/blue-reading-dosages.svg"  alt="Blue Reading Dosages">

                        <p class="text-wrap">Readings <br>& Dosages</p>
                    </button>

                    <button class="tablinks align_items"  onmouseover="features(event, 'lsi-tab')">

                        <img class="img-fluid white-icon"  src="images/White-LSI-calculator.svg"
                        alt="LSI">

                        <img class="img-fluid blue-icon"  src="images/blue-lsi.svg"  alt="Blue LSi">

                        <p class="text-wrap">LSI <br>Calculator</p>
                    </button>

                    <button class="tablinks align_items"  onmouseover="features(event, 'announcements-tab')">

                        <img class="img-fluid white-icon"  src="images/white-announcement.svg"
                        alt="announcement">

                        <img class="img-fluid blue-icon"  src="images/blue-announcement.svg"
                        alt="announcement">

                        <p class="text-wrap">Annoucements</p>
                    </button>

                    <button class="tablinks align_items"  onmouseover="features(event, 'gps-tab')">

                        <img class="img-fluid white-icon"  src="images/White-GPS.svg"
                        alt="GPS">

                        <img class="img-fluid blue-icon"
                        src="images/blue-gps.svg"  alt="GPS">

                        <p class="text-wrap">GPS</p>
                    </button>
                </div>
            </div>
        </article>

        <abbr class="divider"></abbr>

        <!--- Features Tab's ---->

        <div class="feature_tabs widget-tabs">

            <div class="primary_color_bg">

                <div class="container">

                </div>
            </div>

            <!--- Features Tab's Content detail ---->

            <div class="feature_tabs_detail">

                <!--- Features Tab's Content detail for (Routing) ---->

                <div id="routing-tab"
                class="tabcontent">

                <h2 class="text-center heading pb-3 fw-500">Simple & Effective Routes Management</h2>

                <div class="home-container">

                    <div class="row">

                        <div class="col col-md-5">

                            <ul class="padding-left py-5">

                                <li class="pt-3 d-flex align-items-start">

                                    <img class="img-fluid"
                                    src="images/yes.png">

                                    <small class="font_16 linehight_24 dark_gray">Optimize routes to save miles, time and gas
                                        cost
                                    </small>
                                </li>

                                <li class="pt-3 d-flex align-items-start">

                                    <img class="img-fluid"
                                    src="images/yes.png">

                                    <small class="font_16 linehight_24 dark_gray">View and manage estimated work hours in a
                                        day
                                    </small>
                                </li>

                                <li class="pt-3 d-flex align-items-start">

                                    <img class="img-fluid"
                                    src="images/yes.png">

                                    <small class="font_16 linehight_24 dark_gray">Pause and move routes (permanent or
                                        temporary)
                                    </small>
                                </li>

                                <li class="pt-3 d-flex align-items-start">

                                    <img class="img-fluid"
                                    src="images/yes.png">

                                    <small class="font_16 linehight_24 dark_gray">View miles, gas and dosage costs per stop and per
                                        day
                                    </small>
                                </li>

                                <li class="pt-3 d-flex align-items-start">

                                    <img class="img-fluid"
                                    src="images/yes.png">

                                    <small class="font_16 linehight_24 dark_gray">Easily and quickly create and manage routes</small>
                                </li>
                            </ul>

                            <div class="logo-routes d-flex justify-content-center align-items-center">

                                <bold class="pe-2">With</bold>

                                <img src="images/quick-routes.png">
                            </div>

                            <p class="text-center quote py-1">Proprietary Technology</p>
                        </div>

                        <div class="col col-md-7">

                            <div class="tab-content-right">

                                <img class="img-fluid float-end"
                                src="images/feature-route.svg"
                                alt="feature routing">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--- Features Tab's Content detail for (Jobs) ---->

            <div id="job-tab"
            class="tabcontent">

            <h2 class="text-center heading pb-3">Simply Handle Quotes & Jobs</h2>

            <div class="home-container">

                <div class="row">

                    <div class="col col-md-5">

                        <ul class="padding-left py-5">

                            <li class="pt-3 d-flex align-items-start">

                                <img class="img-fluid"
                                src="images/yes.png"
                                alt="">

                                <small class="font_16 linehight_23 dark_gray">Track and manage quotes and jobs in one simple
                                    way
                                </small>
                            </li>

                            <li class="pt-3 d-flex align-items-start">

                                <img class="img-fluid"
                                src="images/yes.png"
                                alt="">

                                <small class="font_16 linehight_24 dark_gray">Request and track quote approvals</small>
                            </li>

                            <li class="pt-3 d-flex align-items-start">

                                <img class="img-fluid"
                                src="images/yes.png"
                                alt="">

                                <small class="font_16 linehight_24 dark_gray">Easy drag-and-drop job scheduling between stops in
                                    the
                                    day
                                </small>
                            </li>

                            <li class="pt-3 d-flex align-items-start">

                                <img class="img-fluid"
                                src="images/yes.png"
                                alt="">

                                <small class="font_16 linehight_24 dark_gray">Single and multi-day jobs with reports for each
                                    day
                                </small>
                            </li>

                            <li class="pt-3 d-flex align-items-start">

                                <img class="img-fluid"
                                src="images/yes.png"
                                alt="">

                                <small class="font_16 linehight_24 dark_gray">Easily add & track extra items that come up</small>
                            </li>

                            <li class="pt-3 d-flex align-items-start">

                                <img class="img-fluid"
                                src="images/yes.png"
                                alt="">

                                <small class="font_16 linehight_24 dark_gray">Add photos and videos and include them on the
                                    job’s
                                    invoice!
                                </small>
                            </li>
                        </ul>
                    </div>

                    <div class="col col-md-7">

                        <div class="tab-content-right">

                            <img class="img-fluid float-end"
                            src="images/feature-jobs.svg"
                            alt="features jobs">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--- Features Tab's Content detail (Ivoicing) ---->

        <div id="Invoicing-tab"
        class="tabcontent">

        <h2 class="text-center heading pb-3">Invoicing Features for the Pool Industry</h2>

        <div class="home-container">

            <div class="row">

                <div class="col col-md-5">

                    <ul class="padding-left py-5">

                        <li class="pt-3 d-flex align-items-start">

                            <img class="img-fluid"
                            src="images/yes.png">

                            <small class="font_16 linehight_24 dark_gray"> Send web invoices & receive online
                                payments
                            </small>
                        </li>

                        <li class="pt-3 d-flex align-items-start">

                            <img class="img-fluid"
                            src="images/yes.png">

                            <small class="font_16 linehight_24 dark_gray">Setup clients on AutoPay</small>
                        </li>

                        <li class="pt-3 d-flex align-items-start">

                            <img class="img-fluid"
                            src="images/yes.png">

                            <small class="font_16 linehight_24 dark_gray">Automatic invoices every month with dosage costs
                                (optional)
                            </small>
                        </li>

                        <li class="pt-3 d-flex align-items-start">

                            <img class="img-fluid"
                            src="images/yes.png">

                            <small class="font_16 linehight_24 dark_gray">Send job photos on web invoices (optional)</small>
                        </li>

                        <li class="pt-3 d-flex align-items-start">

                            <img class="img-fluid"
                            src="images/yes.png">

                            <small class="font_16 linehight_24 dark_gray">Per service visit invoicing is available</small>
                        </li>

                        <li class="pt-3 d-flex align-items-start">

                            <img class="img-fluid"
                            src="images/yes.png">

                            <small class="font_16 linehight_24 dark_gray">Bulk invoice actions to save time on
                                invoicing!
                            </small>
                        </li>
                    </ul>

                    <div class="logo-routes d-flex justify-content-center align-items-center">

                        <bold class="pe-2">Works With</bold>

                        <img class="pe-3"
                        src="images/quickbooks-logo.svg">

                        <img src="images/stripe-logo.png">
                    </div>
                </div>

                <div class="col col-md-7">

                    <div class="tab-content-right">

                        <img class="img-fluid float-end"
                        src="images/feature-invocing.svg"
                        alt="feature invocing">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- Features Tab's Content detail (Tack Cost) ---->

    <div id="track-cost"
    class="tabcontent">

    <h2 class="text-center heading pb-3">Track Dosage, Gas and Labor Costs</h2>

    <div class="home-container">

        <div class="row">

            <div class="col col-md-5">

                <ul class="padding-left py-5">

                    <li class="pt-3 d-flex align-items-start">

                        <img src="images/yes.png">

                        <small class="font_16 linehight_24 dark_gray">Accurately track historical and current dosage
                            costs
                        </small>
                    </li>

                    <li class="pt-3 d-flex align-items-start">

                        <img src="images/yes.png">

                        <small class="font_16 linehight_24 dark_gray">Setup clients on AutoPay</small>
                    </li>

                    <li class="pt-3 d-flex align-items-start">

                        <img src="images/yes.png">

                        <small class="font_16 linehight_24 dark_gray">Easily track gas costs and time per stop, per day
                            and per
                            week
                        </small>
                    </li>

                    <li class="pt-3 d-flex align-items-start">

                        <img src="images/yes.png">

                        <small class="font_16 linehight_24 dark_gray">Setup tech's pay per property type & run
                            payroll
                        </small>
                    </li>

                    <li class="pt-3 d-flex align-items-start">

                        <img src="images/yes.png">

                        <small class="font_16 linehight_24 dark_gray">View every stop's driving distance, gas and dosage
                            costs
                        </small>
                    </li>
                </ul>
            </div>

            <div class="col col-md-7">

                <div class="tab-content-right">

                    <img class="img-fluid float-end"
                    src="images/feature-cost.svg"
                    alt="features track cost.png">
                </div>
            </div>
        </div>
    </div>
</div>

<!--- Features Tab's Content detail (Shoping) ---->

<div id="shoping-tab"
class="tabcontent">

<h2 class="text-center heading pb-3">Buy Items Needed & Invoice Your Clients</h2>

<div class="home-container">

    <div class="row">

        <div class="col col-md-5">

            <ul class="padding-left py-5">

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Follow items from purchase-to-pay</small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Setup clients on AutoPay</small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Purchase items for a service stop or the company
                        stock
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Daily tech reminders for items needed
                        today!
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Keep track of where to find items in the
                        inventory
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Bulk actions available to quickly manage shopping
                        list
                    </small>
                </li>
            </ul>
        </div>

        <div class="col col-md-7">

            <div class="tab-content-right">

                <img class="img-fluid float-end"
                src="images/feature-shoping-list.svg"
                alt="feature shopig list">
            </div>
        </div>
    </div>
</div>
</div>

<!--- Features Tab's Content detail (Visitors) ---->

<div id="visit-tab"
class="tabcontent">

<h2 class="text-center heading pb-3">Beautiful & Customizable Reports</h2>

<div class="home-container">

    <div class="row">

        <div class="col col-md-5">

            <ul class="padding-left py-5">

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Show and hide sections on the visit reports</small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Decide what readings, dosages and checklist items
                        to show on the
                        visit
                        reports
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Choose your brand colors and logo for a
                        professional look
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Include the tech's selfie photo for a personal
                        touch
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Send reports through email and sms</small>
                </li>
            </ul>
        </div>

        <div class="col col-md-7">

            <div class="tab-content-right">

                <img class="img-fluid float-end"
                src="images/feature-visitor.svg"
                alt="feature visit report">
            </div>
        </div>
    </div>
</div>
</div>

<!--- Features Tab's Content detail (Equipments) ---->

<div id="equipment-tab"
class="tabcontent">

<h2 class="text-center heading pb-3">Store & Easily Reference All Equipment</h2>

<div class="home-container">

    <div class="row">

        <div class="col col-md-5">

            <ul class="padding-left py-5">

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Store equipment details including photos and
                        videos
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Techs can also view, add and edit equipment
                        records
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Easily see and track warranty expirations</small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Manage all equipment from the web and/or
                        mobile
                    </small>
                </li>
            </ul>
        </div>

        <div class="col col-md-7">

            <div class="tab-content-right">

                <img class="img-fluid float-end"
                src="images/feature-equipment.svg"
                alt="feature equipment">
            </div>
        </div>
    </div>
</div>
</div>

<!--- Features Tab's Content detail (Dosage) ---->

<div id="dosage-tab"
class="tabcontent">

<h2 class="text-center heading pb-3">Customize Readings, Dosages & Checklists</h2>

<div class="home-container">

    <div class="row">

        <div class="col col-md-5">

            <ul class="padding-left py-5">

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Choose what readings, dosages and checklists are
                        shown and
                        required for
                        tech's to complete
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Choose the task ordering of readings, dosages and
                        checklists
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Configure dosage costs and accurately run reports
                        for the present
                        and the past
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Easily see all readings and dosages per
                        property
                    </small>
                </li>
            </ul>
        </div>

        <div class="col col-md-7">

            <div class="tab-content-right">

                <img class="img-fluid float-end"
                src="images/feature-reading.svg"
                alt="feature reading">
            </div>
        </div>
    </div>
</div>
</div>

<!--- Features Tab's Content detail (LSI) ---->

<div id="lsi-tab"
class="tabcontent">

<h2 class="text-center heading pb-3">Level Up with LSI Water Balancing</h2>

<div class="home-container">

    <div class="row">

        <div class="col col-md-5">

            <ul class="padding-left py-5">

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">LSI is automatically calculated at every service
                        stop
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">LSI calculator optionally considers Borates, if
                        added
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Carryover past readings to calculate the current
                        stop’s LSI, e.g.
                        TDS,
                        CYA, etc.
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Easily know when the water is too corrosive or
                        scale
                        forming
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Adjust desired readings and quickly see the LSI
                        change
                    </small>
                </li>
            </ul>
        </div>

        <div class="col col-md-7">

            <div class="tab-content-right">

                <img class="img-fluid float-end"
                src="images/feature-ils.svg"
                alt="feature lsi">
            </div>
        </div>
    </div>
</div>
</div>

<!--- Features Tab's Content detail (Announcements) ---->

<div id="announcements-tab"
class="tabcontent">

<h2 class="text-center heading pb-3">Send Announcements To All or Specific Clients</h2>

<div class="home-container">

    <div class="row">

        <div class="col col-md-5">

            <ul class="padding-left py-5">

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Send announcements for specific tech routes,
                        service days, tags,
                        etc.
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Save message templates to easily reuse next
                        time
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Define the announcement’s email subject and
                        reply-to
                        address
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Personalize announcements with the client's
                        name
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Send promotions to active and/or inactive
                        clients
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Quickly inform clients when there is no
                        service
                    </small>
                </li>
            </ul>
        </div>

        <div class="col col-md-7">

            <div class="tab-content-right">

                <img class="img-fluid float-end"
                src="images/feature-announcements.svg"
                alt="feature announcements">
            </div>
        </div>
    </div>
</div>
</div>

<!--- Features Tab's Content detail (GPS) ---->

<div id="gps-tab"
class="tabcontent">

<h2 class="text-center heading pb-3">Send Announcements To All or Specific Clients</h2>

<div class="home-container">

    <div class="row">

        <div class="col col-md-5">

            <ul class="padding-left py-5">

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Keep Track of Service Stop Activities</small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Easily see your tech's check-in location relative
                        to the
                        property
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Quickly see red flags when a tech’s check-in is too
                        far
                        away
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Know the GPS location for every photo/video taken
                        at the
                        stop
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Clients never see the tech’s check-in
                        location
                    </small>
                </li>

                <li class="pt-3 d-flex align-items-start">

                    <img src="images/yes.png">

                    <small class="font_16 linehight_24 dark_gray">Access the tech's check-in location on the web
                        and/or mobile
                        apps
                    </small>
                </li>
            </ul>
        </div>

        <div class="col col-md-7">

            <div class="tab-content-right">

                <img class="img-fluid float-end"
                src="images/feature-gps.svg"
                alt="feature gps">
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- </div> -->

<div class="clearfix"></div>
</section>
<!-- ==== Section Our Client's === -->
<section class="we-work">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col col-md-4">
                <img class="img-fluid" src="images/rectangle.svg" alt="Border Line">
                <strong class="primary_color_text tag-title ps-5 ms-4 linehight_34 fw-500">Works<bold class="secondary_color_text ps-2">with</bold></strong>
            </div>
            <div class="col col-md-8 text-center">
                <p class="linehight_19 font_16 dark_gray text-center">Explore our integrations below with LaMotte digital meters, QuickBooks Online sync of customers and invoices, and Stripe for invoice payments!</p>
            </div>
        </div>
        <div class="work-history widget-tabs">
            <!-- ==== Section Our Client's Tabs === -->
            <div class="row work-tabs-btn">
                <!-- ==== Section Our Client's Tabs_1 === -->
                <button class="col-12 col-md-4 tablinks wework-links d-flex justify-content-end history-tabs active" onmouseover="weWork(event, 'lamottte')">
                    <img class="img-fluid blue-icon" src="images/lamotte-logo.svg" alt="">
                    <img class="img-fluid white-icon" src="images/w-lamotte-logo.svg" alt="">
                </button>
                <!-- ==== Section Our Client's Tabs_2 === -->
                <button class="col-12 col-md-4 tablinks wework-links d-flex justify-content-center history-tabs" onmouseover="weWork(event, 'quickbook')">
                    <img class="img-fluid blue-icon" src="images/quicbook-bottom.svg" alt="">
                    <img class="img-fluid white-icon" src="images/w-Quickbooks-Logo.svg" alt="">
                </button>
                <!-- ==== Section Our Client's Tabs_3 === -->
                <button class="col-12 col-md-4 tablinks wework-links history-tabs" onmouseover="weWork(event, 'group')">
                    <img class="img-fluid blue-icon" src="images/Group.svg" alt="">
                    <img class="img-fluid white-icon" src="images/w-Group.svg" alt="">
                </button>
            </div>
            <!-- ==== Section Our Client's Tab_content_1 === -->
            <div id="lamottte" class="weworktabcontent">
                <div class="row align_items text-center">
                    <div class="col-12 col-md-4">
                        <img class="img-fluid" src="images/image.svg" alt="logo">
                    </div>
                    <div class="col-12 col-md-4">
                        <img class="img-fluid" src="images/image2.svg" alt="logo">
                    </div>
                    <div class="col-12 col-md-4">
                        <img class="img-fluid" src="images/history.svg" alt="logo">
                    </div>
                    <p class="text-center dark_gray font_14 linehight_19">Speed through your service visit stops with accuracy and confidence using either the LaMotte SpinTouch or
                        ColorQ 2x digital meters. Readings are instantly sent to PSS through Bluetooth and the LSI formula is
                        automatically calculated! Save time and get more done in a work day.
                    </p>
                </div>
            </div>
            <!-- ==== Section Our Client's Tab_content_2 === -->
            <div id="quickbook" class="weworktabcontent">
                <div class="row align_items pt-5">
                    <div class="col-12 col-md-6 qbc_relative">
                        <img class="img-fluid" src="images/qbo-1.svg" alt="">
                        <img class="img-fluid qbc_ss" src="images/qbo-2.svg" alt="">
                    </div>
                    <div class="col-12 col-md-6">
                        <p class="dark_gray font_14 linehight_19">Easily get started right away by importing your clients from QuickBooks Online right into PSS</p>
                        <p class="dark_gray font_14 linehight_19">PSS has a complete invoicing solution for your pool business. The invoices created in PSS are sent and
                        linked to QBO invoices. You can receive payments either in PSS or in QBO and ensure both systems are in sync.</p>
                        <p class="dark_gray font_14 linehight_19">Take advantage of PSS as your operation hub to gather all invoicing data and sync that over to QBO</p>
                    </div>
                </div>
            </div>
            <!-- ==== Section Our Client's Tab_content_3 === -->
            <div id="group" class="weworktabcontent">
                <div class="row align_items pt-5">
                    <div class="col-12 col-md-6 d-flex justify-content-end">
                        <img class="img-fluid" src="images/invoicing-web.svg" alt="">
                    </div>
                    <div class="col-12 col-md-6">
                        <p class="dark_gray font_14 linehight_19">Securely and reliably process invoices with our Stripe integration</p>
                        <p class="dark_gray font_14 linehight_19">Create a new or reuse an existing Stripe account</p>
                        <p class="dark_gray font_14 linehight_19">Bank deposits are typically made within 2 business days into your business bank account</p>
                        <p class="dark_gray font_14 linehight_19">Transaction fees are 2.9% plus 30 cents of the invoice amount paid</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== Section App_Slider === -->
    <section class="app-slider primary_color_bg pt-5 pb-3">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 pb-3 m-0">
                    <img class="img-fluid" src="images/ellipse.png">
                    <img class="img-fluid" src="images/ellipse.png">
                    <img class="img-fluid" src="images/ellipse.png">
                </div>
                <div class="col-12">
                    <h3 class="secondary_color_text tag-title pb-3 m-0 text-center fw-500">App<span class="text-white ps-3 tag-title fw-500">Screenshots</span>
                    </h3>
                    <p class="text-white linehight_19 font_16 text-center pb-4 m-0">Run your service business in the office or on-the-go with these features and many more!</p>
                </div>
            </div>
        </div>
        <section class="app-container">
            <div class="slider-block__main wrapper">
                <div class="ui-slider js-slider" id="slider">
                    <div class="ui-slider__arrows arrows-1 js-slider-arrows">
                    </div>
                    <div class="ui-slider__all">
                        <div class="ui-slider__list-wrap js-slider-loader loaded">
                            <div class="ui-slider__list js-slider-list">
                                <!-- Slide_1 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-1.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">Track readzoom-in-downd dosages - quickly tap in the last value</p>
                                    </div>
                                </div>
                                <!-- Slide_2 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-2.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">Use the LSzoom-in-downd to help balance the water</p>
                                    </div>
                                </div>
                                <!-- Slide_3 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-3.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19">Powerful Lzoom-in-downulator with desired levels and history (borates are optional)</p>
                                    </div>
                                </div>
                                <!-- Slide_4 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-4.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19" data-aos="zoom-in-down">Manage your clients and see who is late on payment</p>
                                    </div>
                                </div>
                                <!-- Slide_5 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-5.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19" data-aos="zoom-in-down">Add one or more properties per client to manage all service work</p>
                                    </div>
                                </div>
                                <!-- Slide_6 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-6.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19" data-aos="zoom-in-down">Manage equipments, extra items, and shopping items used for each property</p>
                                    </div>
                                </div>
                                <!-- Slide_7 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-7.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19" data-aos="zoom-in-down">All company service visits at your fingertips - quickly see exceptions</p>
                                    </div>
                                </div>
                                <!-- Slide_8 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-8.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19" data-aos="zoom-in-down">See your tech’s check-in and photo locations on the map</p>
                                    </div>
                                </div>
                                <!-- Slide_9 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-9.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19" data-aos="zoom-in-down">Manage all repair work and quick see approval and scheduling status</p>
                                    </div>
                                </div>
                                <!-- Slide_10 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-10.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19" data-aos="zoom-in-down">See the dosage history during the service stop</p>
                                    </div>
                                </div>
                                <!-- Slide_11 -->
                                <div class="ui-slider__item js-slider-item">
                                    <div class="ui-slider__image-wrap">
                                        <img class="ui-slider__image" src="images/app-slider-11.svg" alt="">
                                        <p class="text-white text-center pb-3 font_14 linehight_19" data-aos="zoom-in-down">Manage shopping list items for your company, service routes and jobs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

<!-- === Section Pricing Table === -->
<section class="pricing-table pt-5" id="pricing">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 pb-3 m-0">
                <img class="img-fluid" src="images/ellipse.png">
                <img class="img-fluid" src="images/ellipse.png">
                <img class="img-fluid" src="images/ellipse.png">
            </div>
        </div>
        <div class="col-12">
            <h3 class="primary_color_text tag-title pb-3 m-0 text-center fw-500">Subscription<span class="secondary_color_text tag-title ps-3 text-center">Plans</span></h3>
            <p class="linehight_19 font_16 dark_gray text-center m-0">No Contract. No Commitments. Cancel Anytime.</p>
            <p class="linehight_19 font_16 dark_gray text-center m-0 pb-5">Annual plans are available with a 10% discount</p>
        </div>
        <div class="row">
            <div class="col col-md-3 text-center">
                <ul class="price p-0">
                    <li class="header-bg d-flex justify-content-center align-items-center mb-3">FREE</li>
                    <li>
                        <h4 class="pricing-subtitle m-0">Free Plan</h4>
                    </li>
                    <li class="pricing-body">
                        <img class="img-fluid" src="images/yes.png">
                        <small class="font_16 linehight_34 dark_gray">Up to 10* Clients</small>
                    </li>
                    <li class="pricing-body">
                        <img class="img-fluid" src="images/yes.png">
                        <small class="font_16 linehight_34 dark_gray">All Features Included</small>
                    </li>
                    <li class="py-4 d-flex justify-content-center"><a href="/free-signup" class="button_btn text-decoration-none pricing-btn align_items">Sign
                    Up</a></li>
                </ul>
            </div>

            <div class="col col-md-3 text-center">
                <ul class="price p-0">
                    <li class="header-bg d-flex justify-content-center align-items-center mb-3">
                        $49.50
                        <p class="per-month pt-2">Per Month</p>
                    </li>
                    <li>
                        <h4 class="pricing-subtitle m-0">Startup Plan</h4>
                    </li>
                    <li class="pricing-body">
                        <img class="img-fluid" src="images/yes.png">
                        <small class="font_16 linehight_34 dark_gray">11 to 40* Clients</small>
                    </li>
                    <li class="pricing-body">
                        <img class="img-fluid" src="images/yes.png">
                        <small class="font_16 linehight_34 dark_gray">All Features Included</small>
                    </li>
                    <li class="py-4 d-flex justify-content-center"><a href="/company-sigup" class="button_btn text-decoration-none pricing-btn align_items">Sign
                    Up</a></li>
                </ul>
            </div>

            <div class="col col-md-3 text-center">
                <ul class="price p-0">
                    <li class="header-bg d-flex justify-content-center align-items-center mb-3">
                        $99
                        <p class="per-month pt-2">Per Month</p>
                    </li>
                    <li>
                        <h4 class="pricing-subtitle m-0">Standard Plan</h4>
                    </li>
                    <li class="pricing-body">
                        <img src="images/yes.png">
                        <small class="font_16 linehight_34 dark_gray">41 to 301* Clients</small>
                    </li>
                    <li class="pricing-body">
                        <img src="images/yes.png">
                        <small class="font_16 linehight_34 dark_gray">All Features Included</small>
                    </li>
                    <li class="py-4 d-flex justify-content-center"><a href="/company-sigup" class="button_btn text-decoration-none pricing-btn align_items">Sign
                    Up</a></li>
                </ul>
            </div>

            <div class="col col-md-3 text-center">
                <ul class="price p-0">
                    <li class="header-bg d-flex justify-content-center align-items-center mb-3">
                        $0.40
                        <p class="per-month pt-2">Per Client / Month</p>
                    </li>
                    <li>
                        <h4 class="pricing-subtitle m-0">Enterprise Plan</h4>
                    </li>
                    <li class="pricing-body">
                        <img src="images/yes.png">
                        <small class="font_16 linehight_34 dark_gray">301+ Clients</small>
                    </li>
                    <li class="pricing-body">
                        <img src="images/yes.png">
                        <small class="font_16 linehight_34 dark_gray">All Features Included</small>
                    </li>
                    <li class="py-4 d-flex justify-content-center"><a href="/company-sigup" class="button_btn text-decoration-none pricing-btn align_items">Sign
                    Up</a></li>
                </ul>
            </div>
        </div>
        <p class="linehight_19 font_16 dark_gray text-center mt-3 mb-0">*Plan pricing range is considering one property per client. A property is any body of water to track.</p>
        <p class="linehight_19 font_16 dark_gray text-center m-0">Please <a href="#" class="primary_color_text bold">contact us</a> for detail information and we’ll be happy to help.</p>
    </div>
</section>

<!-- === Section Customer Support === -->
<section class="customer-support">
        <div class="container">
            <div class="row box-shadow">
                <div class="col-12 col-md-4 text-center">
                    <img class="img-fluid" src="images/customer-suport.svg" alt="Customer Support">
                </div>
                <div class="col-12 col-md-8 pt-5">
                    <h3 class="primary_color_text tag-title m-0 fw-500">World-Class</h3>
                    <h3 class="secondary_color_text tag-title m-0 fw-500">Customer Support</h3>
                    <p class="font_16 linehight_19 pt-3 m-0 rubik-font dark_gray">We want to make sure PSS is always providing real value to your business. If you have any questions or doubts then please don’t hesitate! We are here to help and pride ourselves by the level of support we provide our customers.
                    </p>
                    <a href="/contact-support" class="button_btn text-decoration-none see-more secondary_color_bg text-white align_items mt-4">Contact Support</a>
                </div>
            </div>
        </div>
    </section>

<!-- === Section See What Other Story === -->
<section class="we-work customer-reviews">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-12 col-sm-1">
                <img class="img-fluid" src="images/rectangle.svg" alt="Border Line">
            </div>
            <div class="col-12 col-sm-6">
                <strong class="secondary_color_text tag-title fw-500">See What</strong>
                <strong class="primary_color_text tag-title fw-500">Others Say</strong>
            </div>
            <div class="col-12 col-sm-5 d-flex justify-content-center">
                <a href="/testimonial" class="button_btn text-decoration-none see-more secondary_color_bg text-white align_items">See More Reviews</a>
            </div>
        </div>
    </section>

    <!--- Customer Cards --->
    <section class="customer-cards">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                            <p class="linehight_19 font_14 dark_gray m-0">PSS has been a game changer for my business. It has allowed me to become way more organized, stay on top of billing and to effortlessly communicate with my clients. My techs and I enjoy using the user-friendly interface. I’ve been on several platforms and PSS is the first that I have truly enjoyed using</p>
                            <strong class="name-title">Dean Ouellette (Arizona)</br>Big Family Pools</strong>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body text-center blue-bg">
                            <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                            <p class="linehight_19 font_14 dark_gray m-0">PSS is amazing. I was looking for an app like this one. I was doing all my work on a paper, even chemical readings and dosages. Also I was sending text messages to clients when they were late, now I don’t have to worry about anything. It makes my life easier and what I like is how the PSS team is always improving the app. I have been using it for a while now. Thank you!</p>
                            <strong class="name-title">Adonis (Georgia)</br>Adonis Pool Service</strong>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img class="img-fluid pb-3" src="images/stars.svg" alt="Stars">
                            <p class="linehight_19 font_14 dark_gray m-0">We've tried other apps, but PSS is our last.
                                It is so easy to use with our employees, customers & tracking.
                                Customer service is exceptional & quick.
                            </p>
                            <strong class="name-title">Richard & Terri Schwenzer (Hawaii)<br />Blue Water Pool & Spa</strong>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- === Section Get_App === -->
    <section class="get-app primary_color_bg pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img class="img-fluid app-ipad" src="images/app-ipad.svg" alt="Ipad Image">
                    <img class="img-fluid mobile-equipment" src="images/mobile-equipment.svg" alt="Mobile Equipment">
                </div>
                <div class="col-12 col-md-6">
                    <div class="circle pt-5">
                        <img class="img-fluid" src="images/ellipse.png">
                        <img class="img-fluid" src="images/ellipse.png">
                        <img class="img-fluid" src="images/ellipse.png">
                    </div>
                    <div class="d-flex align-items-center pb-4 pt-2">
                        <h3 class="text-white tag-title m-0 fw-500">Get The App</h3>
                        <h3 class="secondary_color_text tag-title m-0 ps-2 fw-500">Now !</h3>
                    </div>
                    <p class="text-white rubik-font linehight_19 font_16">PSS supports both tablet and smartphone devices that are built on Apple iOS or Google Android.</p>
                    <p class="text-white rubik-font linehight_19 font_16">Don’t leave your business behind in the Stone Age. Efficiently run your business and delight your customers!</p>
                    <div class="download-app pt-2">
                        <a href="https://itunes.apple.com/us/app/pool-service-software/id986000636?ls=1&mt=8"><img class="img-fluid button_btn" src="images/download-app-aple.svg" alt="Download Apple App"></a>
                        <a href="https://play.google.com/store/apps/details?id=com.poolserviceusa.poolserviceusa"><img class="img-fluid button_btn" src="images/google-play.svg" alt="Download Android App"></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- === Section Contact Us === -->
        <section>
            <div class="container">
                <div class="row widget-shadow widget-contact">
                    <div class="col-12 col-md-6">
                        <div class="circle">
                            <img class="img-fluid" src="images/ellipse.png">
                            <img class="img-fluid" src="images/ellipse.png">
                            <img class="img-fluid" src="images/ellipse.png">
                        </div>
                        <div class="d-flex align-items-center pb-4 pt-2">
                            <h3 class="secondary_color_text tag-title m-0 fw-500">Get</h3>
                            <h3 class="primary_color_text tag-title m-0 ps-2 fw-500">Demo</h3>
                        </div>
                        <p class="dark_gray font_16 linehight_19 pe-5">Please complete and submit this form to receive an email with our demo video.
                        </p>
                        <p class="dark_gray font_16 linehight_19 pe-5">If you have any questions, please do not hesitate to reach out to your support team. You can also request for a demo session with one of our Customer Success team members.
                        </p>
                        <div class="download-app pt-2 text-center">
                            <img class="img-fluid" src="images/demo.svg" alt="Get Demo Icon">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <form class="contact-form widget-shadow widget-contact get-demo-form">
                        {{ csrf_field() }}
                        <input type="hidden" name="DEVICE" class="DEVICE">
                        <input type="hidden" name="UTCOFFSET" class="UTCOFFSET">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="exampleInputFirstName" class="form-label ps-3 grey font_16 linehight_19">First Name*</label>
                                <input type="text" class="form-control" id="exampleInputFirstName" aria-describedby="NameHelp" name="FNAME" placeholder="First name" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="exampleInputLastName" class="form-label ps-3 grey font_16 linehight_19">Last Name*</label>
                                <input type="text" class="form-control" id="exampleInputLastName" name="LNAME" placeholder="Last Name" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label ps-3 grey font_16 linehight_19">Email*</label>
                                <input type="email" class="form-control" id="exampleInputEmail" name="EMAIL" placeholder="Email" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="exampleInputBusiness" class="form-label ps-3 grey font_16 linehight_19">Business Name*</label>
                                <input type="text" class="form-control" id="exampleInputBusiness" name="COMPNAME" placeholder="Business Name" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="exampleInputPhone" class="form-label ps-3 grey font_16 linehight_19">Mobile Phone*</label>
                                <input type="text" class="form-control" id="exampleInputPhone" aria-describedby="PhoneHelp" name="PHONE" placeholder="Mobile Phone" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="exampleInputClient" class="form-label fo ps-3 grey font_16 linehight_19">Client Count*</label>
                                    <input type="text" class="form-control" id="exampleInputPhone" aria-describedby="PhoneHelp" name="CLIENTCNT" placeholder="Client Count" required>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="review" class="form-label ps-3 grey font_16 linehight_19">How Did You Hear About Us?*</label>
                                    <span class="form-input">
                                        <select class="form-control" id="" name="SOURCE" required>
                                            <option value="Search Engine">Search Engine</option>
                                            <option value="Social Media">Social Media</option>
                                            <option value="Family-Friend-Contact">Family-Friend-Contact</option>
                                            <option value="Podcast">Podcast</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <img src="images/caret.svg" class="img-fluid caret-icon"
                                        alt="User icon">
                                    </span>
                                </div>
                            </div>
                            <a href="#" class="button_btn text-decoration-none request-demo-btn secondary_color_bg text-white ms-auto align_items me-4 get-demo-submit get-demo-submit">Request Demo</a>

                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
    @section('script')
<script>
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
  $(document).ready(
    function(){
        $('.DEVICE').val(detectWindow());
        var offset = detectBrowser()/60;
         $('.UTCOFFSET').val(offset);
     $(document).on('click','.get-demo-submit',function(){

      form_data = $('.get-demo-form').serialize();
      $.ajax({
        url:"/mailchimp-suscribe",
        type:"post",
        data:form_data,
        beforeSend:function(){

        },
        error: function(response){

            console.log(response);
        },
        success:function(response){

            window.location.replace("/getdemo-confirmation");

        }
    });

  })
 }
 );

</script>
@endsection

