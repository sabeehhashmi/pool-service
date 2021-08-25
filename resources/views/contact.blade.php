@extends('layouts.app')

@section('content')
<!-- ==== Page main_content Content Start === -->
<main class="mt-3">
    <section class="widget-contact position-relative" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="circle pt-5">
                        <img class="img-fluid" src="/images/ellipse.png">
                        <img class="img-fluid" src="/images/ellipse.png">
                        <img class="img-fluid" src="/images/ellipse.png">
                    </div>
                    <div class="d-flex align-items-center pb-4 pt-2">
                        <h3 class="secondary_color_text tag-title m-0 fw-500">Contact</h3>
                        <h3 class="primary_color_text tag-title m-0 ps-2 fw-500">Support</h3>
                    </div>
                    <p class="linehight_19 font_16 grey pe-5 roboto">
                        Please fill out this form and one of our customer support agents will follow-up and promptly assist you.
                    </p>
                    <p class="linehight_19 font_16 grey pe-5 roboto">
                        You will receive an email from our support system after you submit this form. Once you receive the acknowledgement email, you can reply to that email and continue the conversation with the support agent.</p>
                </div>
                <div class="col-12 col-md-6">
                    <form class="contact-form widget-shadow">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="exampleInputFirstName" class="form-label linehight_19 font_16 grey ps-3">First
                                    Name*</label>
                                <input type="Fname" class="form-control" id="exampleInputFirstName" aria-describedby="NameHelp" name="first_name" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="exampleInputEmail" class="form-label linehight_19 font_16 grey ps-3">Email*</label>
                                <input type="Email" class="form-control" id="exampleInputEmail" name="last_name" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="exampleInputPhone" class="form-label linehight_19 font_16 grey ps-3">Mobile
                                    Phone*</label>
                                <input type="text" class="form-control" id="exampleInputPhone" aria-describedby="PhoneHelp" name="mobile" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="exampleInputfrequency" class="form-label linehight_19 font_16 grey ps-3">Frequency*</label>
                                    <span class="form-input">
                                        <select class="form-control" id="" name="frequency" required>
                                            <option>Choose One</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        <img src="images/caret.svg" class="img-fluid caret-icon"
                                            alt="User icon">
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="linehight_19 font_16 grey ps-3">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                </div>
                            </div>
                            <button type="button" class="btn ms-auto text-white font_20 linehight_23 b-100-radious md-btn secondary_color_bg create-ticket">Create Ticket</button>
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

$(document).ready(
    function(){



        $(document).on('click','.create-ticket',function(){



         form_data = $('.get-support-form').serialize();
         $.ajax({
            url:"/add-ticket",
            type:"post",
            data:form_data,
            beforeSend:function(){

            },
            error: function(response){
                 window.location.replace("/contact-support-confirmation");
            },
            success:function(response){

                window.location.replace("/contact-support-confirmation");

            }
        });

     })
    }
    );

</script>
@endsection
