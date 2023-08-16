<?php

namespace App\Http\Controllers;

use App\Models\categoryMenu;
use App\Models\courses;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Menu::where('tb_menu.softDeletes' , '=' , 0)
            ->select('tb_menu.id' , 'tb_menu.name' , 'tb_menu.slug' , 'tb_menu.status')
            ->where('tb_category_menus.softDeletes' , '=' , 0)
            ->join('tb_category_menus' , 'tb_menu.id_menuCat' , '=' , 'tb_category_menus.id')
            ->paginate(15);
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
        $menuCat = categoryMenu::select('id' , 'name')->where('softDeletes' , '=' , 0)->get();
        return view('back_end.Menu.add' , compact('product' , 'menuCat'));
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
            'status' => 'required',
            'id_menuCat' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $slug = Str::slug($request->slug);
        $validatedData = $validator->validated();
        $validatedData['slug'] = $slug;
        Menu::create($validatedData);
        return redirect('menu');
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
        $menuCat = categoryMenu::select('id' , 'name')->where('softDeletes' , '=' , 0)->get();

        return view('back_end.Menu.add', compact('data', 'product' , 'menuCat'));
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
            'status' => 'required',
            'id_menuCat' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = [
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'status' => $request->input('status'),
            'id_menuCat' => $request->input('id_menuCat')
        ];
        $menu = Menu::find($request->id_s);
        if (!$menu) {
            dd('1i1u29');
            // Xử lý khi không tìm thấy bản ghi
            // Ví dụ: Hiển thị thông báo lỗi, chuyển hướng, vv.
        }

        $menu->update($data);
        return redirect('menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id)->update(['softDeletes'=> 1]);
        if($menu) {
            return redirect('menu');
        }
        else {
            return redirect()->back()->with('msg' , 'chưa thế xóa');
        }
    }


    // front_end

    public function getMenu() {
        $list_menu = Menu::all();
        $courses = courses::all();
        return view('front_end.blocks.menu' , compact('list_menu', 'courses'));
    }
}
