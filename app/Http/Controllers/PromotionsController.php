<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promotion;
use Illuminate\Support\Facades\DB;

class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =promotion::paginate(15);
        return view('back_end.promotion.list' , ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.promotion.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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

    public function statistical() {

    }

    public function fetch_provinces(Request $rq) {
        $test = $rq->all();
        $data = [];
        $i = 0;
        foreach ($test['jsonData'] as $item) {
            $i++;
            $data['id'] = $i;
            $data['name_city'] = $item['name'];
            $data['code'] = $item['code'];
            $data['division_type'] = $item['division_type'];
            $data['codename'] = $item['codename'];
            $data['phone_code'] = $item['phone_code'];
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            //DB::table('tb_city')->insert($data);
        }
    }

    public function fetch_districts(Request $rq) {
        $test = $rq->all();
        $data = [];
        $i = 0;
        foreach ($test['jsonData'] as $item) {
            $i++;
            $data['id'] = $i;
            $data['name_district'] = $item['name'];
            $data['code'] = $item['code'];
            $data['division_type'] = $item['division_type'];
            $data['codename'] = $item['codename'];
            $data['province_code'] = $item['province_code'];
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            // DB::table('tb_district')->insert($data);
        }
    }

    public function fetch_wards(Request $rq) {
        $test = $rq->all();
        $data = [];
        $i = 10500;
//        dd($rq->all());
        foreach ($test['jsonData'] as $item) {
            $i++;
            $data['id'] = $i;
            $data['name_ward'] = $item['name'];
            $data['code'] = $item['code'];
            $data['division_type'] = $item['division_type'];
            $data['codename'] = $item['codename'];
            $data['district_code'] = $item['district_code'];
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            // DB::table('tb_ward')->insert($data);
        }
    }
}
