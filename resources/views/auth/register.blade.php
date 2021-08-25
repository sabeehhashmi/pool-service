@extends('layouts.app')

@section('content')
<!-- ==== Page Free Sign_Up Start === -->
<main>
    <section class="widget-contact">
        <div class="container">
            <div class="circle text-center">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
            </div>
            <div class="d-flex align-items-center pb-4 pt-2 justify-content-center">
                <h3 class="primary_color_text tag-title m-0">Sign</h3>
                <h3 class="secondary_color_text tag-title m-0 ps-2">Up</h3>
            </div>
            <div class="form-width">
                <form action ="{{route('auth.save')}}"  method='post' class="contact-form widget-shadow"  id="free-sign-up">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                    {{Session::get('success')}}
                    </div>
                @endif
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                    {{Session::get('success')}}
                    </div>
                @endif

                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="first_name"  class="form-label form-text-color">First
                                Name*</label>
                            <input type="Fname" class="form-control first_name" name='first_name' id="first_name" aria-describedby="NameHelp">
                            <span class="text-danger">@error('first_name'){{$message}} @enderror</span>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="last_name" class="form-label  form-text-color">Last
                                Name*</label>
                            <input type="text" class="form-control" name='last_name' id="last_name">
                            <span class="text-danger">@error('last_name'){{$message}} @enderror</span>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="business_name" class="form-label  form-text-color">Business
                                Name*</label>
                            <input type="text" class="form-control" name='business_name' id="business_name">
                            <span class="text-danger">@error('business_name'){{$message}} @enderror</span>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="mobile_phone" class="form-label form-text-color">Mobile
                                Phone*</label>
                            <input type="number" class="form-control" name='mobile_phone' id="mobile_phone" aria-describedby="PhoneHelp">
                            <span class="text-danger">@error('mobile_phone'){{$message}} @enderror</span>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <div class="form-group">
                                <label for="Client_count" class="form-label fo form-text-color">Client
                                    Count*</label>
                                <span class="form-input">
                                    <select class="form-control" name='Client_count' id="Client_count">
                                        <option value=''>Choose One</option>
                                        <option value ="2">2</option>
                                        <option value ="3">3</option>
                                        <option value ="4">4</option>
                                    </select>
                                    <span class="text-danger">@error('Client_count'){{$message}} @enderror</span>
                                    <img src="images/caret.svg" class="img-fluid caret-icon" alt="User icon">
                                </span>
                            </div>
                        </div>
                        <div class="user-or-pass d-flex align-items-center justify-content-between pt-3 pb-4">
                            <img class="img-fluid" src="images/line.svg" alt="line">
                            <small class="form-text-color">Username and Password</small>
                            <img class="img-fluid" src="images/line.svg" alt="line">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="user_email" class="form-label form-text-color">Email*</label>
                            <input type="Email" name='user_email' class="form-control" id="user_email">
                            <span class="text-danger">@error('user_email'){{$message}} @enderror</span>
                            <span>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="user_password" class="form-label  form-text-color">Password*</label>
                            <input type="Password" name='user_password' class="form-control" id="user_password">
                            <span class="text-danger">@error('user_password'){{$message}} @enderror</span>
                        </div>
                        <div class="d-flex align-items-center py-4">
                            <small class="form-text-color text-center">Already have an Account?<a href="#"
                                    class="primary_color_text ps-1 bold">Sign In</a></small>
                            <input type='submit'  class="form-button md-btn secondary_color_text-bg white ms-auto" value='Create Account'>
                        </div>
                    </div>
                </form>
            </div>
    </section>yes
</main>
@endsection
