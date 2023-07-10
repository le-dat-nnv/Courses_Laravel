<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'tb_menu';
    protected $fillable = [
        'slug',
        'name',
        'parent_id',
        'status'
    ];

    public function getCat() {
//        $cat =
    }
}
