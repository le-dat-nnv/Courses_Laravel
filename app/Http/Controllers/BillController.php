<?php

namespace App\Http\Controllers;

use App\Models\bill;
use App\Http\Requests\StorebillRequest;
use App\Http\Requests\UpdatebillRequest;
use Illuminate\Support\Facades\DB;
use App\Models\courses;
class BillController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $data = DB::table('tb_order')
//            ->paginate(15);
        $data = bill::paginate(15);
        $id_products = [];
        foreach ($data as $key=>$val) {
            $id_products[] = $val->product_id;
        }
        $id_products_array = [];
        foreach ($id_products as $ky=>$pro) {
            $id_products_array[] = explode(',', $pro);
            $query = $this->getName($id_products_array[$ky]);
        }
        return view('back_end.bill.list' , compact(['data' , 'query']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.bill.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = bill::find($id);
        $numberArray = array_map('intval', explode(',', $data->product_id));
        $course = courses::whereIn('id', $numberArray)->get();
        $arrayData = json_decode($course, true);
        $data_last = [];
        foreach ($arrayData as $item) {
            $data_last[] = $item['title'];
        }
        $hk = implode(',' , $data_last);
        return view('back_end.bill.edit' , compact(['data' , 'hk']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebillRequest  $request
     * @param  \App\Models\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebillRequest $request, bill $bill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(bill $bill)
    {
        //
    }

    public function getName($id) {
        $dataPro = DB::table('tb_courses')->whereIn('id', $id)->select('title')->get();
        $arrayData = json_decode($dataPro, true);
        $data_last = [];
        foreach ($arrayData as $item) {
            $data_last[] = $item['title'];
        }
        $hk = implode(',' , $data_last);
        return $hk;
    }
}
