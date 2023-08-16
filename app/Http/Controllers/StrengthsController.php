<?php

namespace App\Http\Controllers;

use App\Models\Strengths;
use App\Http\Requests\StoreStrengthsRequest;
use App\Http\Requests\UpdateStrengthsRequest;

class StrengthsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Strengths::select('id' , 'name' , 'name_short')->paginate(15);
        return view('back_end.Strengths.list' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.Strengths.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStrengthsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStrengthsRequest $request)
    {
        $data = [
            'name' => $request->name,
            'icon_svg' => $request->icon_svg,
            'name_short' => $request->name_short,
            'description' => $request->description
        ];

        Strengths::insert($data);

        return redirect()->back()->with('message','Thêm thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Strengths  $strengths
     * @return \Illuminate\Http\Response
     */
    public function show(Strengths $strengths)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Strengths  $strengths
     * @return \Illuminate\Http\Response
     */
    public function edit(Strengths $strengths , $id)
    {
        $data = Strengths::select('id' , 'name' , 'name_short' , 'icon_svg' , 'description')->find($id);
        return view('back_end.Strengths.add' , compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStrengthsRequest  $request
     * @param  \App\Models\Strengths  $strengths
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStrengthsRequest $request, Strengths $strengths)
    {
        $data = [
            'name' => $request->name,
            'name_short' => $request->name_short,
            'icon_svg' => $request->icon_svg,
            'description' => $request->description
        ];

        Strengths::find($request->id_s)->update($data);
        return redirect()->to('strengths');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Strengths  $strengths
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_strengths = Strengths::find($id)->delete();
        if($delete_strengths) {
            return redirect('strengths');
        }
    }
}
