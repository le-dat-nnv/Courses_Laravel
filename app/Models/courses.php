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

    protected $fillable = [
        'title' ,
        'description',
        'price',
        'image',
        'duration',
        'is_featured',
        'level',
        'rating',
        'enrollment_count',
        'id_category',
        'start_date',
        'end_date',
        'is_published',
        'is_trash',
        'schedule_datetime_start',
        'schedule_datetime_end',
        'slug'
    ];
}
