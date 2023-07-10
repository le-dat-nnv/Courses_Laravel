<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class config extends Model
{
    use HasFactory;
    protected $table= 'tb_config';

    protected $fillable = [
        'title',
        'input_type',
        'content'
    ];

    public static function getData() {
        echo 'ledat';
        die();
    }
}
