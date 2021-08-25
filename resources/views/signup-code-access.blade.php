@extends('layouts.app')

@section('content')
<!-- ==== Page Free Sign_Up Start === -->
<main>
    <section class="widget-contact position-relative">
        <div class="container text-center">
            <div class="circle">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
                <img class="img-fluid" src="/images/ellipse.png">
            </div>
            <div class="d-flex align-items-center pb-4 pt-2 justify-content-center">
                <h3 class="primary_color_text tag-title m-0">Access</h3>
                <h3 class="secondary_color_text tag-title m-0 ps-2">Code</h3>
            </div>
        </div>
        <div class="form-width text-center">
            <form class="contact-form widget-shadow form-md-padding">
                <small class="form-text-color text-center pb-4 d-block">Enter the access code we just sent to
                    your
                    e-mail</small>
                <div class="enter-code">
                    <input type="Email" class="form-control text-center" id="exampleInputEmail" name="" placeholder="Access Code">
                </div>
                <div class="text-center d-inline-block mt-4 mb-4">
                <button type="button" class="btn text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg">Confirm</button>
                </div>
                <small class="form-text-color text-center d-block">Didn’t get the access code?<a href="#" class="primary_color_text ps-1 bold">Resend it</a></small>
            </form>
        </div>
    </section>
</main>
@endsection
