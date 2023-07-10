<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;

    protected $table='tb_courses';

    public function getCat() {
        $cat = categories::find($this->id_category);
        $cat;
        return $cat;
    }
}
