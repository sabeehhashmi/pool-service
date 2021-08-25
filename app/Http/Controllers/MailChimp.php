<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class MailChimp extends Controller
{
    public function store(Request $request)
{
    if ( ! Newsletter::isSubscribed($request->EMAIL) ) {
        $newUserVars = [
            'EMAIL'     => $request->EMAIL,
            'COMPNAME'  => $request->COMPNAME,
            'FNAME'     => $request->FNAME,
            'LNAME'     => $request->LNAME,
            'PHONE'     => $request->PHONE,
            'DEVICE'    => $request->DEVICE,
            'SALESTAT'  => 'Open-Not Contacted',
            'CLIENTCNT' => $request->CLIENTCNT,
            'UTCOFFSET' => $request->UTCOFFSET,
            'SOURCE' => $request->SOURCE
        ];
        Newsletter::subscribe($request->EMAIL, $newUserVars);
        dd(Newsletter::getLastError());
    }
    else{
        echo 'subscribe to mailchimp';
    }
}
}
