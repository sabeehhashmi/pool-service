<?php

namespace App\Http\Controllers;
use Laravel\Cashier\Cashier;

use Illuminate\Http\Request;
Use App\User;
use Stripe;
use Session;
use Exception;

class SubscriptionController extends Controller
{
    public function index()
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $user = Cashier::findBillable($stripeId);
        $intent= $user->createSetupIntent();
        dd($intent);
        return view("subscriptionPlan", compact("intent"));
        return view('subscriptionPlan',[
            'intent' => 
        ]);
    }

    public function orderPost(Request $request)
    {
            $user = auth()->user();
            $input = $request->all();
            $token =  $request->stripeToken;
            $paymentMethod = $request->paymentMethod;
            // dd($user);
            try {

                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                
                if (is_null($user->stripe_id)) {
                    $stripeCustomer = $user->createAsStripeCustomer();
                }

                

                \Stripe\Customer::createSource(
                    $user->stripe_id,
                    ['source' => $token]
                );

                $user->newSubscription('test',$input['plane'])
                    ->create($paymentMethod, [
                    'email' => $user->email,
                ]);

                return back()->with('success','Subscription is completed.');
            } catch (Exception $e) {
                return back()->with('success',$e->getMessage());
            }
            
    }
}