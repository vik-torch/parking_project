<?php

namespace App\Http\Controllers\Pay;

use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function index(Request $request)
    {
      // dd($request->all());
      // dd($request->input('ticket_number'));
      $ticket_number = $request->input('ticket_number');
      return view('pay.index', compact('ticket_number'));
    }

    public function successPay()
    {
      return view('pay.success_pay');
    }
}
