<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strengths extends Model
{
    use HasFactory;

    protected $table = 'tb_strengths';

    protected $fillable = [
        'name',
        'name_short',
        'icon_svg',
        'description'
    ];
}
