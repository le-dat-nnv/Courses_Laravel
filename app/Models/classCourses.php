<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classCourses extends Model
{
    use HasFactory;

    protected $table ='tb_class_courses';

    public function getCourses() {
        $course = courses::find($this->id_course);
        return $course;
    }

    public function getLectures() {
        $lectures = lectures::find($this->id_lecture);
        return $lectures;
    }
}
