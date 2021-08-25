<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoolServiceController extends Controller
{
    public function index() {
        return view('poolServices.index');
    }

    // public function free() {
    //     return view('poolServices.freelogin');
    // }
}
