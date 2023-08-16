<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryMenu extends Model
{
    use HasFactory;
    protected $table = 'tb_category_menus';

    protected $fillable = [
        'name',
        'status',
        'softDeletes'
    ];
}
