<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Http\Requests\StoreaboutRequest;
use App\Http\Requests\UpdateaboutRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = about::select('id', 'name', 'summary', 'content', 'email', 'location', 'telephone', 'iframe')->paginate(15);
        return view('back_end.about.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.about.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreaboutRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreaboutRequest $request)
    {
        $about = about::insert($request->except('_token'));
        if ($about) {
            return redirect('about');
        } else {
            return view('back_end.about.add')->with('msg', 'chưa thế thêm vào db');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\about $about
     * @return \Illuminate\Http\Response
     */
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\about $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = about::find($id)->first();
        return view('back_end.about.edit' , compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateaboutRequest $request
     * @param \App\Models\about $about
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateaboutRequest $request, $id)
    {
        for ($i = 0; $i < 5; $i++) {
            echo "++i: " . $i . "\n";
        }
        dd('123');
        $about_update = $request->except(['_method' , '_token']);
        $update = about::find($id)->update($about_update);
        if($update) {
            return redirect('about');
        }
        else {
            return view('back_end.about.edit')->with('msg' , 'chưa thế update lại dữ liệu');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\about $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(about $about)
    {
        //
    }
}
