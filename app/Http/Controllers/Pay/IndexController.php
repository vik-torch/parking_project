<?php

namespace App\Http\Controllers\Pay;

use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function index()
    {
      return view('pay.index');
    }
}
