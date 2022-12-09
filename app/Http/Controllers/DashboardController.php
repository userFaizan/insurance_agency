<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
   
    public function welcome()
    {
        return view ('welcome');

   }
}
