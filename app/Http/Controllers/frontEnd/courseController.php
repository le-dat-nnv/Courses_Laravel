<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\bill;
use App\Models\courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class courseController extends Controller
{
    public function getFrontCourse()
    {
        $data_course = courses::select('id', 'title', 'image', 'description', 'price', 'id_lecture', 'slug')->get();
        return view('front_end.modules.course', compact('data_course'));
    }

    public function getCoursesCourseDetail($slug)
    {
        $courses_detail = courses::select('tb_courses.id', 'title', 'tb_courses.description',
            'tb_courses.image', 'curriculum', 'tb_lectures.name', 'tb_lectures.image as lecture_image', 'specialize')
            ->join('tb_lectures', 'tb_courses.id_lecture', '=', 'tb_lectures.id')
            ->where('tb_courses.slug', '=', $slug)->first();
        return view('front_end.modules.courses_detail', compact('courses_detail'));
    }

    public function contact()
    {
        $data = about::select('id', 'name', 'summary', 'content', 'iframe', 'telephone', 'location', 'email')->first();
        return view('front_end.modules.contact' , compact('data'));
    }

    public function addCarts(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('add-to-cart');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function gioHang() {
        return view('front_end.modules.add_to_cart');
    }

    public function invoice(Request $request) {
        $validator = Validator::make($request->all() , [
            'email' => 'required|email',
            'phone' => 'required',
            'ward' => 'required',
            'district' => 'required',
            'city' => 'required',
        ] );
        if($validator->fails()) {
            return back()->withErrors($validator);
        }
        $data = $request->except('_token');
        $cart_to = Session('cart');
        $id_add = [];
        $total_pri = [];
        foreach ($cart_to as $key=>$value) {
            $id_add[] = $key;
            $total_pri[] = $cart_to[$key]['price'];
        }
        $totalPrice = array_sum($total_pri);
        $id_last = implode(',' , $id_add);
        $orderData = [
            'product_id' => $id_last,
            'name' => $data['email'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'ward' => $data['ward'],
            'districts' => $data['district'],
            'city' => $data['city'],
            'total_price' => $totalPrice
            // ... Các trường dữ liệu khác cần chèn
        ];
        $order = DB::table('tb_order')->insert($orderData);
        if($order) {
            $request->session()->forget('cart');
            return redirect(route('home'));
        }
    }

    public function getWards(Request $request , $districts)
    {
        $dataWard = DB::table('tb_ward')->where('district_code' , '=' , $districts)->get();
        return response()->json($dataWard);
    }

    public function getDistricts(Request $request , $city)
    {
        $dataDis = DB::table('tb_district')->where('province_code' , '=' , $city)->get();
        return response()->json($dataDis);
    }

    public function getCity(Request $request)
    {
        $data = DB::table('tb_city')->get();
        return response()->json($data);
    }

    public function checkOut(Request $request) {
        return view('front_end.modules.check_out');
    }
}
