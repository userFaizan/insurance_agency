<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
   
    public function redirection()
    {
        if(Auth::user()->hasRole('employee')){
             return view('employee_dashboard');
        }elseif(Auth::user()->hasRole('admin')){
         return view('dashboard');
    }elseif(Auth::user()->hasRole('in_house_agent')){
        return view('in_house_agent_dashboard');
   }elseif(Auth::user()->hasRole('downline_agent')){
    return view('downline_agent_dashboard');
}elseif(Auth::user()->hasRole('referral_agent')){
    return view('referral_agent_dashboard');
}elseif(Auth::user()->hasRole('customer')){
    return view('customer_dashboard');
}
    }
}
