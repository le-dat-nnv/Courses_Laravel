<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminIndex() {
        dd(11190191);
        return view('sendNotification.home');
    }

    public function LoginApi(Request $rq)
    {
        if(Auth::guard('admin')->check()){
            dd(1100100101);
        }
        dd('dậdak');
    }
}
