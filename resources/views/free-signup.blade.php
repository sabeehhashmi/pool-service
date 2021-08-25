@extends('layouts.app')

@section('content')
<!-- ==== Page Free Sign_Up Start === -->
<main>
    <section class="widget-contact position-relative">
        <div class="container">
            <div class="circle text-center">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
            </div>
            <div class="d-flex align-items-center pb-4 pt-2 justify-content-center">
                <h3 class="primary_color_text tag-title m-0 fw-500">Sign</h3>
                <h3 class="secondary_color_text tag-title m-0 ps-2 fw-500">Up</h3>
            </div>
            <div class="form-width">
                <form class="contact-form widget-shadow">
                    <div class="row">
                        <!-- (First_Name) -->
                        <div class="col-12 col-md-6 mb-4">
                            <label for="exampleInputFirstName" class="form-label linehight_19 font_16 grey ps-3">First Name*</label>
                            <input required="" type="Fname" class="form-control linehight_19 font_16" id="exampleInputFirstName" aria-describedby="NameHelp" name="" placeholder="First Name">
                        </div>
                        <!-- (Last_Name) -->
                        <div class="col-12 col-md-6 mb-4">
                            <label for="exampleInputLastName" class="form-label linehight_19 font_16 grey ps-3">Last Name*</label>
                            <input required="" type="Lname" class="form-control linehight_19 font_16" id="exampleInputLastName" name="" placeholder="Last Name">
                        </div>
                        <!-- (Business_Name) -->
                        <div class="col-12 mb-4">
                            <label for="exampleInputBusiness" class="form-label linehight_19 font_16 grey ps-3">Business Name*</label>
                            <input required="" type="Business" class="form-control linehight_19 font_16" id="exampleInputBusiness" name="" placeholder="Business Name">
                        </div>
                        <!-- (Address) -->
                        <div class="col-12 mb-4">
                            <label for="exampleInputaddress" class="form-label linehight_19 font_16 grey ps-3">Address*</label>
                            <input required="" type="address" class="form-control linehight_19 font_16" id="exampleInputaddress" name="" placeholder="Street Address">
                        </div>
                        <!-- (City) -->
                        <div class="col-12 col-md-6 mb-4">
                            <label for="exampleInputCity" class="form-label linehight_19 font_16 grey ps-3">City*</label>
                            <input required="" type="city" class="form-control linehight_19 font_16" id="exampleInputCity" aria-describedby="NameHelp" name="" placeholder="City">
                        </div>
                        <!-- (State/Province) -->
                        <div class="col-12 col-md-6 mb-4">
                            <label for="exampleInputState" class="form-label linehight_19 font_16 grey ps-3">State/Province*</label>
                            <input required="" type="state" class="form-control linehight_19 font_16" id="exampleInputState" aria-describedby="NameHelp" name="" placeholder="State/Province">
                        </div>
                        <!-- (Country) -->
                        <div class="col-12 mb-4">
                            <div class="form-group">
                                <label for="exampleInputClient" class="form-label linehight_19 font_16 grey ps-3">Country*</label>
                                <span class="form-input">
                                    <select class="form-control linehight_19 font_16" id="" aria-placeholder="United States">
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
                            <input required="" type="Phone" class="form-control linehight_19 font_16" id="exampleInputPhone" aria-describedby="PhoneHelp" name="" placeholder="Mobile Phone">
                        </div>
                        <!-- (Client_Count) -->
                        <div class="col-12 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="exampleInputClient" class="form-label linehight_19 font_16 grey ps-3">Client Count*</label>
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
                        <!-- (Inline_Border) -->
                        <div class="user-or-pass d-flex align-items-center justify-content-between pt-3 pb-4">
                            <img class="img-fluid" src="images/line.svg" alt="line">
                            <small class="linehight_19 font_16 grey fw-500">Username and Password</small>
                            <img class="img-fluid" src="images/line.svg" alt="line">
                        </div>
                        <!-- (Email) -->
                        <div class="col-12 mb-4">
                            <label for="exampleInputEmail" class="form-label linehight_19 font_16 grey ps-3">Email*</label>
                            <input required="" type="Email" class="form-control linehight_19 font_16 " id="exampleInputEmail" placeholder="This Will Be Your Username">
                        </div>
                        <!-- (Password) -->
                        <div class="col-12 mb-4">
                            <label for="exampleInputPassword" class="form-label linehight_19 font_16 grey ps-3">Password*</label>
                            <input required="" type="Password" class="form-control linehight_19 font_16" id="exampleInputPassword" placeholder="Password">
                        </div>
                        <!-- (Form-Footer) -->
                        <div class="d-flex align-items-center py-4">
                            <small class="linehight_19 font_16 grey text-center">Already have an Account?<a href="#" class="text-decoration-none color_blue_solid ps-2 bold">Sign In</a></small>
                            <button type="button" class="btn ms-auto text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg">Next Step</button>
                        </div>
                    </div>
                </form>
            </div>
    </section>
</main>
@endsection
