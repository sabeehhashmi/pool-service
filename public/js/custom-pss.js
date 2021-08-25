// // free sign up validation

// $(document).ready(function() {
//     alert("custom pss js file loaded");
//     $("#free-sign-up").validate({
//         rules:{
//             first_name:"required",
//             last_name:"required",
//             business_name:"required",
//             mobile_phone:"required",
//             Client_count:"required",
//             user_email:{
//                 required:true,
//                 email:true
//             },
//             user_password: "required"
//         },
//         messages:{
//             first_name:"Please Fill the First Name",
//             last_name:"Please Enter The Last Name",
//             business_name:"Please Enter the Business Name",
//             mobile_phone: "Please Enter Phone Number",
//             // Client_count:"Please Select number of Clients",  
//             user_email:"Please Enter Correct Email Address",
//             user_password:"Please Enter Password"  
//         },
//         submitHandler: function(form) {
//             form.submit();
//           }
//     });

//     $(document).on('change','#user_email',function(){

//         alert($(this).val());
//     })
// // contact-form-step-one
// $("#contact-form-step-one").validate({
//     rules:{
//         user_name:"required",
//         user_lastName:"required",
//         user_business:"required",
//         user_Phone:"required",
//         user_client:"required",
//         user_email:{
//             required:true,
//             email:true
//         },
//         user_Password:"required"

//     },
//     messages:{
//         user_name:"Please Enter First Name",
//         user_lastName:"Please Enter Last Name",
//         user_business:"Please Enter Business",
//         user_Phone:"Please Enter Phone number",
//         user_client:"Please Enter correct number of clients",
//         user_Password:"Please Enter Password"
//     },
//     submitHandler: function(form) {
       
//       $(form).submit();
//     }
//    });

//    $("#payment_form").validate({
//     rules:{
//         card_Name:"required",
//         user_Card:"required"
   
        
//     },  
//     messages:{
//         card_Name:"Please Enter First Name",
//         user_Card:"Please Enter card number"
       
//     },
//     submitHandler: function(form) {
       
//       $(form).submit();
//     }
//    });



// });


// // card_Name



//     $(document).on('change','#user_email',function(){

//         alert($(this).val());
//     })
