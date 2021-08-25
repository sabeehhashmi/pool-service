<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Stripe;

class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        // return view('stripe');
        return view('signup');
    }
   
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $totalAmount = $request->priceToPay;
       
         $request->stripeToken;

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $return = Stripe\Charge::create ([
                "amount" => $totalAmount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose of PSS"
        ]);
        if($return->status == 'succeeded'){
            Session::flash('success', 'Payment successful!');
        }else{
            Session::flash('fail', 'Please Try Again!');
        }
           
       return back();
    }
}
