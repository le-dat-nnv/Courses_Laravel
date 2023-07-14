<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lectures;

class LecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =lectures::paginate(15);
        return view('back_end.Lectures.list' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.Lectures.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->hasFile('image');
        $data = [
            'name'=>$request->name,
            'description' => $request->description,
            'duration'=>$request->duration,
            'specialize' => $request->specialize,
        ];
        if($file) {
            $currentYear = date('Y');
            $currentMonth = date('m');
            $currentDay = date('d');
            $fileNew = $request->file('image');
            $NewFile = $fileNew->store('Lecture/'.$currentYear.'/'.$currentMonth.'/'.$currentDay);
            $data['image'] = $NewFile;
            lectures::insert($data);
            return redirect('Lectures');
        }
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
        $data = lectures::find($id);
        return view('back_end.Lectures.add' , compact('data'));
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
        $file_check = $request->hasFile('image');
        $data = [
            'name'=>$request->name,
            'description' => $request->description,
            'duration'=>$request->duration,
            'specialize' => $request->specialize,
        ];
        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDay = date('d');
        if(!$file_check) {
            lectures::find($id)->update($data);
            return redirect('Lectures');
        }
        else {
            $fileNew = $request->file('image');
            $NewFile = $fileNew->store('Lecture/'.$currentYear.'/'.$currentMonth.'/'.$currentDay);
            $data['image'] = $NewFile;
            lectures::find($id)->update($data);
            return redirect('Lectures');
        }
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
}
