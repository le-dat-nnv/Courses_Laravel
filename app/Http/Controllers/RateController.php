<?php

namespace App\Http\Controllers;

use App\Models\rate;
use App\Http\Requests\StorerateRequest;
use App\Http\Requests\UpdaterateRequest;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back_end.rate.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.rate.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorerateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function show(rate $rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function edit(rate $rate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterateRequest  $request
     * @param  \App\Models\rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterateRequest $request, rate $rate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function destroy(rate $rate)
    {
        //
    }
}
