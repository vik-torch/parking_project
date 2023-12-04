<?php

namespace App\Http\Controllers\Pay;

use Illuminate\Http\Request;

class LoyaltyController extends BaseController
{
    public function index(Request $request)
    {
      return view('pay.loyalty');
    }
}
