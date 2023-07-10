<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'tb_banners';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
        'status',
        'image'
    ];
}
