<?php

namespace App\Http\Controllers;

use App\Models\config;
use App\Models\Menu;
use App\Models\MenuAdmin;
use App\Models\Modules;
use App\Http\Requests\StoreModulesRequest;
use App\Http\Requests\UpdateModulesRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;

class ModulesController extends Controller
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
    public function create()
    {
        $list_table = MenuAdmin::select('id' , 'name')->where('parent_id' , '=' , 0)
            ->whereNotIn('name' , ['config' , 'Modules'])
            ->get();
        return view('back_end.Modules.add' , compact('list_table'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreModulesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModulesRequest $request)
    {
        $list_table = MenuAdmin::select('id' , 'name')->where('parent_id' , '=' , 0)
            ->whereNotIn('name' , ['config' , 'Modules'])
            ->get();
        return view('back_end.Modules.add' , compact('list_table'));
    }

    public function getModules(Request $request , $slug) {
        $data_request = [];
        switch ($slug) {
            case 'menu':
                $data_request = Menu::all();
                break;
            case 'Strengths':
                $data_request = config::select('id', 'name')->get();
                break;
        }
        return response()->json($data_request);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function show(Modules $modules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function edit(Modules $modules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateModulesRequest  $request
     * @param  \App\Models\Modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModulesRequest $request, Modules $modules)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modules $modules)
    {
        //
    }
}
