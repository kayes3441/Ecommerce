<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerDashBoardController extends Controller
{
    public function customerDashBoard()
    {
        return view('front.customer-dashboard.customer-dashboard');
    }
}
