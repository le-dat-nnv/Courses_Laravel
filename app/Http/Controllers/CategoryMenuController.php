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
        dd('123');
        return view('back_end.Menu.listCateMenu');
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
        dd($request->except('_token'));
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
    public function destroy(categoryMenu $categoryMenu)
    {
        //
    }
}
