<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lectures extends Model
{
    use HasFactory;

    protected $table = 'tb_lectures';

    protected $fillable = [
        'name',
        'description',
        'duration',
        'specialize',
        'image',
        'slug'
    ];

}
