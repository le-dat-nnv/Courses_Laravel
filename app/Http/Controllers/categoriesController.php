<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function index() {
        $data = categories::paginate(15);
        return view('back_end.categories.list' , compact('data'));
    }

    public function getAdd() {
        $product = categories::all();
        return view('back_end.categories.add' , compact('product'));
    }
}
