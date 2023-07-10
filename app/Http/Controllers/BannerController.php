<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Http\Requests\StorebannerRequest;
use App\Http\Requests\UpdatebannerRequest;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = banner::paginate(15);
        return view('back_end.BannerMarking.list' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.BannerMarking.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebannerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebannerRequest $request)
    {

        $file_image = $request->has('image');
        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDay = date('d');
        if($file_image) {
            $new_file = $request->file('image');
            $file_push_new = $new_file->store('banner_home/'.$currentYear.$currentMonth.$currentDay);
        }

        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'image' => $file_push_new,
            'is_active' => $request->is_active,
            'status' => $request->status
        ];

        banner::insert($data);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(banner $banner)
    {
        $data = banner::find($banner->id);
        return view('back_end.BannerMarking.edit' , compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebannerRequest  $request
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebannerRequest $request, banner $banner)
    {
        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDay = date('d');
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'is_active' => $request->is_active,
            'status' => $request->status,
        ];
        if($request->file('image')) {
            $newFile = $request->file('image');
            $file_data = $newFile->store('banner_home/'.$currentYear.'/'.$currentMonth.'/'.$currentDay);
            $data['image'] = $file_data;
            banner::find($request->id)->update($data);
        }
        else {
            banner::find($request->id)->update($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(banner $banner )
    {
        $check_del = banner::find($banner->id)->delete();

        if($check_del) {
            return response()->json(['messages'=> 'đã xóa thành công']);
        }
        else {
            dd('123');
        }
    }
}
