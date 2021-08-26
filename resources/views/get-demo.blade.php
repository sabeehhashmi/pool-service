@extends('layouts.app')

@section('content')
<!-- ==== Page main_content Content Start === -->
<main class="mt-3">
    <section id="contact-us">
        <div class="container">
            <div class="contact-form widget-shadow c_support">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="circle">
                            <img class="img-fluid" src="/images/ellipse.png">
                            <img class="img-fluid" src="/images/ellipse.png">
                            <img class="img-fluid" src="/images/ellipse.png">
                        </div>
                        <div class="d-flex align-items-center pb-4 pt-2">
                            <h3 class="secondary_color_text tag-title m-0 fw-500">Get</h3>
                            <h3 class="primary_color_text tag-title m-0 ps-2 fw-500">Demo</h3>
                        </div>
                        <p class="dark_gray font_16 linehight_19 pe-5 roboto">Please complete and submit this form to receive an email with our demo video.
                        </p>
                        <p class="dark_gray font_16 linehight_19 pe-5 roboto">If you have any questions, please do not hesitate to reach out to your support team. You can also request for a demo session with one of our Customer Success team members.
                        </p>
                        <img src="/images/content-s-attr.svg" class="img-fluid m-auto d-flex " alt="attr"> 
                    </div>
                    <div class="col-12 col-md-6 mt-5">
                        <form class="mt-5">
                            <div class="alert alert-danger error-message"></div>
                            {{ csrf_field() }}
                            <input type="hidden" name="DEVICE" class="DEVICE">
                            <input type="hidden" name="UTCOFFSET" class="UTCOFFSET">
                            <div class="row g-2">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="exampleInputFirstName" class="form-label grey font_16 linehight_19 ps-4">First Name*</label>
                                    <input type="text" class="form-control ps-4" id="exampleInputFirstName" aria-describedby="NameHelp" name="FNAME" placeholder="First name" required>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="exampleInputLastName" class="form-label grey font_16 linehight_19 ps-4">Last Name*</label>
                                    <input type="text" class="form-control ps-4" id="exampleInputLastName" name="LNAME" placeholder="Last Name" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="exampleInputEmail" class="form-label grey font_16 linehight_19 ps-4">Email*</label>
                                    <input type="email" class="form-control ps-4" id="exampleInputEmail" name="EMAIL" placeholder="Email" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="exampleInputBusiness" class="form-label grey font_16 linehight_19 ps-4">Business Name*</label>
                                    <input type="text" class="form-control ps-4" id="exampleInputBusiness" name="COMPNAME" placeholder="Business Name" required>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="exampleInputPhone" class="form-label grey font_16 linehight_19 ps-4">Mobile Phone*</label>
                                    <input type="text" class="form-control ps-4" id="exampleInputPhone" aria-describedby="PhoneHelp" name="PHONE" placeholder="Mobile Phone" required>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="exampleInputClient" class="form-label grey font_16 linehight_19 ps-4">Client Count*</label>
                                        <span class="form-input">
                                            <select class="form-control linehight_19 font_16 ps-4" id="" name="CLIENTCNT" required>
                                                <option selected disabled value="">Choose One</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>123</option>
                                            </select>
                                            <img src="images/caret.svg" class="img-fluid caret-icon" alt="User icon">
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="review" class="form-label ps-3 grey font_16 linehight_19 ps-4">How Did You Hear About Us*</label>
                                        <span class="form-input">
                                            <select class="form-control ps-4" id="" name="SOURCE" required>
                                            <option selected disabled value="">Choose One</option>
                                                <option value="Social Media">Social Media</option>
                                                <option value="Family-Friend-Contact">Family-Friend-Contact</option>
                                                <option value="Podcast">Podcast</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <img src="images/caret.svg" class="img-fluid caret-icon" alt="User icon">
                                        </span>
                                    </div>
                                </div>
                                <button type="button" class="btn ms-auto text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg create-ticket">Request Demo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('script')
<script>
    function detectWindow() {
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
        if ((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1) {
            return 'Opera';
        } else if (navigator.userAgent.indexOf("Chrome") != -1) {
            return 'Chrome';
        } else if (navigator.userAgent.indexOf("Safari") != -1) {
            return 'Safari';
        } else if (navigator.userAgent.indexOf("Firefox") != -1) {
            return 'Firefox';
        } else if ((navigator.userAgent.indexOf("MSIE") != -1) || (!!document.documentMode == true)) {
            return 'IE'; //crap
        } else {
            return 'Unknown';
        }
    }
    $(document).ready(
        function() {


            $('.error-message').hide();
            $('.DEVICE').val(detectWindow());
            var offset = detectBrowser() / 60;
            $('.UTCOFFSET').val(offset);
            $(document).on('click', '.get-demo-submit', function() {

                FNAME = $('input[name="FNAME"]').val();
                LNAME = $('input[name="LNAME"]').val();
                EMAIL = $('input[name="EMAIL"]').val();
                COMPNAME = $('input[name="COMPNAME"]').val();
                PHONE = $('input[name="PHONE"]').val();
                CLIENTCNT = $('input[name="CLIENTCNT"]').val();
                SOURCE = $('select[name=SOURCE] option').filter(':selected').val();

                if (FNAME == '' || LNAME == '' || EMAIL == '' || COMPNAME == '' || PHONE == '' || CLIENTCNT == '' || SOURCE == '') {
                    $('.error-message').show();
                    $('.error-message').html('Please fill all fields');
                    return false;
                }

                form_data = $('.get-demo-form').serialize();
                $.ajax({
                    url: "/mailchimp-suscribe",
                    type: "post",
                    data: form_data,
                    beforeSend: function() {

                    },
                    error: function(response) {

                        $('.error-message').show();
                        $('.error-message').html('Please fill all fields');
                    },
                    success: function(response) {

                        window.location.replace("/getdemo-confirmation");

                    }
                });

            })
        }
    );
</script>
@endsection