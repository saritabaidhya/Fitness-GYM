<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
           
            return view('superAdmin.dashboards.index');
        }

       return redirect("login")->withErrors('You are not allowed to access');
    }

    public function logOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
