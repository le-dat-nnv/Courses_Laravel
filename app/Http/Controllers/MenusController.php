<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Menu::paginate(15);
        return view('back_end.Menu.list' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Menu::select('id', 'name')->get();
        return view('back_end.Menu.add' , compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => 'required',
            'parent_id' => 'required',
            'status' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Menu::create($validator->validated());
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
        $data = Menu::find($id);
        $product = Menu::select('id', 'name')->get();
//        $product = $products->map(function ($product) {
//            return $product->only(['id', 'name']);
//        })->all();

        return view('back_end.Menu.add', compact('data', 'product'));
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
        $validator = Validator::make($request->all() , [
            'name' => 'required',
            'slug' => 'required',
            'parent_id' => 'required',
            'status' => 'required'
        ]);

        if($validator->fails()) {
            return  redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'parent_id' => $request->input('parent_id'),
            'status' => $request->input('status')
        ];
        $menu = Menu::find($request->id_s);
        if (!$menu) {
            dd('1i1u29');
            // Xử lý khi không tìm thấy bản ghi
            // Ví dụ: Hiển thị thông báo lỗi, chuyển hướng, vv.
        }

        $menu->update($data);
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


    // front_end

    public function getMenu() {
        $list_menu = Menu::all();
        $courses = courses::all();
        return view('front_end.blocks.menu' , compact('list_menu', 'courses'));
    }
}
