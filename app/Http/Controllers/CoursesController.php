<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courses;

class CoursesController extends Controller
{
    public function index() {
        $data = courses::paginate(15);
        return view('back_end.courses.list' , compact('data'));
    }

    public function getAdd() {
        $product = courses::all();
        return view('back_end.courses.add' , compact('product'));
    }

    public function payList() {

    }
}
