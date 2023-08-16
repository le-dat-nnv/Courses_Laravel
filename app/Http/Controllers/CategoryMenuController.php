<?php

namespace App\Http\Controllers;

use App\Models\categoryMenu;
use App\Http\Requests\StorecategoryMenuRequest;
use App\Http\Requests\UpdatecategoryMenuRequest;

class CategoryMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = categoryMenu::select('id' , 'name' , 'status')
            ->where('softDeletes' , '=' , 0)
            ->paginate(15);
        return view('back_end.Menu.listCateMenu' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.Menu.addCateMenu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecategoryMenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoryMenuRequest $request)
    {
            $menuCat = categoryMenu::insert($request->except(['_token' , 'id_s']));
            if($menuCat) {
                return redirect('categoriesMenu');
            }
            else{
                return redirect('categoriesMenu/create')->json(['msg'=> 'chưa thế thêm thành công']);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categoryMenu  $categoryMenu
     * @return \Illuminate\Http\Response
     */
    public function show(categoryMenu $categoryMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categoryMenu  $categoryMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(categoryMenu $categoryMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoryMenuRequest  $request
     * @param  \App\Models\categoryMenu  $categoryMenu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoryMenuRequest $request, categoryMenu $categoryMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categoryMenu  $categoryMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menuCategory = categoryMenu::find($id)->update(['softDeletes'=> 1]);
        if($menuCategory) {
            return redirect('categoriesMenu');
        }
        else {
            return redirect()->back()->with('msg' , 'chưa thế xóa recored');
        }
    }
}
