<?php

namespace App\Http\Controllers;

use App\Models\MenuAdmin;
use Illuminate\Http\Request;

class MenuAdminController extends Controller
{
    public function index() {
//        $menuList = MenuAdmin::all();
        return view('back_end.layout.index');
    }
}
