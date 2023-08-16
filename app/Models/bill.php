<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class bill extends Model
{
    use HasFactory;

    protected $table = 'tb_order';

    public function getNames() {
        $pro = $this->product_id;
        $numberArray = array_map('intval', explode(',', $pro));
        $dataPro = courses::whereIn('id' ,$numberArray)->get();
        $arrayData = json_decode($dataPro, true);
        $data_last = [];
        foreach ($arrayData as $item) {
            $data_last[] = $item['title'];
        }
        $hk = implode(',' , $data_last);
        return $hk;
    }


}
