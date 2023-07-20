<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $rq)
    {
        $data = [
            'name' => $rq->name,
            'email' => $rq->email,
            'password' => Hash::make($rq->input('password')),
        ];

        User::create($data);
        return view('front_end.registerSuccess');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function checkUser(Request $rq)
    {
        $test = User::where('id' , '=' , '1')->get();
//        dd($test[0]->email);
//        if($rq->password == $test[0]->password) {
//            return redirect()->intended('dashboard');
//        }
//        else {
//            dd('123');
//        }
        $credentials = [
            'name' => $rq->name,
            'email' => $rq->email,
            'password' => $rq->password,
        ];
            if(Auth::attempt($credentials)) {
                return redirect()->intended('dashboard');
            }
            else {
                return view('front_end.home')->with(['msg'=>'sai mật khẩu hoặc tài khoản']);
            }

    }

    public function sign_in_front_end(Request $request) {
        if ($request->isMethod('post')) {
            if(Auth::attempt(['email'=> $request->email , 'password'=> $request->password])){
                return redirect()->intended('dashboard');
            }
            else {
                return view('front_end.auth.login')->with('msg', 'Sai mật khẩu / tài khoản');
            }
        }
        return view('front_end.auth.login');
    }

    public function register_frontend(StoreUserRequest $request) {
        if($request->isMethod('post')) {
            $data = [
                'name' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->input('password')),
            ];
            $user = user::insert($data);
            if ($user) {
                return \redirect('/');
            }
        }
        else{
            return view('front_end.auth.register');
        }

    }

    public function sign_out_front_end() {
        Auth::logout();
        return \redirect('/');
    }

    public function register_frontends() {

    }
}
