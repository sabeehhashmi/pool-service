<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\userRegisteration;
use Illuminate\Support\Facades\Hash;
class MainController extends Controller
{
    //



    function login(){

        return view('auth.login');
    }
// subscription plan start here
    function subscriptionPlan(){

        return view('auth.subscriptionPlan');
    }

function registerSub(Request $request){


    // return $request->input();

    $request->validate(
        [
            'user_name' => 'required',
            'user_lastName' => 'required',
            'user_business' => 'required',
            'user_Phone' => 'required',
            'user_client' => 'required',
            'user_Email' => 'required|email|unique:user_registerations',
            'user_Password' => 'required'
        ]
    );

    // Insert data into database plan package

    $admin = new admin;

    $admin->user_name = $request->user_name;
    $admin->user_lastName = $request->user_lastName;
    $admin->user_business = $request->user_business;
    $admin->user_Phone = $request->user_Phone;
    $admin->user_client = $request->user_client;
    $admin->user_Email = $request->user_Email;
    $admin->user_Password = Hash::make($request->user_Password);

    $save = $userReg->save();

    if($save){

        return back()->with('success','new user register successfully..!');

    }
    else{
            return back()->with('fail','Something is wrong, try again later');
    }

}

//subscripton plan ended here

    function register(){

        return view('auth.register');
    }

    function save(Request $request){

        print_r($request->input());
        die;

        $request->validate(
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'business_name' => 'required',
                'mobile_phone' => 'required',
                'Client_count' => 'required',
                'user_email' => 'required|email|unique:admins',
                'user_password' => 'required'
            ]
        );

        // Insert data into database

        $admin = new admin;

        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->business_name = $request->business_name;
        $admin->mobile_phone = $request->mobile_phone;
        $admin->Client_count = $request->Client_count;
        $admin->user_email = $request->user_email;
        $admin->user_password = Hash::make($request->user_password);

        $save = $admin->save();

        if($save){

            return back()->with('success','new user register successfully..!');

        }
        else{
                return back()->with('fail','Something is wrong, try again later');
        }


    }

    function check(Request $request){

        return $request->input();


    }

}
