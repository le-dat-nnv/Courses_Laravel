<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\lectures;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lectures = lectures::all();
        return response()->json($lectures , '200');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            return response()->json(['msg'=>'chúc mừng cậu đã thêm thành công vào bảng']);
        }
        else {
            lectures::insert($data);
            return response()->json(['msg'=>'chúc mừng cậu đã thêm thành công vào bảng']);
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
    public function edit($id , Request $request)
    {
        $lectures = lectures::find($id);
        if($lectures) {
            return response()->json($lectures);
        }
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
//        dd($request->all());
        $lectures = lectures::find($id);
        $file = $request->hasFile('image');
        if($lectures) {
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
                $lectures->update($data);
                return response()->json(['msg'=>'chúc mừng cậu đã thêm thành công vào bảng']);
            }
            else {
                $lectures->update($data);
                return response()->json(['msg'=>'chúc mừng bạn đã update thành công']);
            }

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
        $lectures = lectures::find($id);
        if($lectures) {
            $lectures->delete();
            return response()->json(['msg'=>'chúc mừng bạn đã xóa thành công']);
        }
    }
}
