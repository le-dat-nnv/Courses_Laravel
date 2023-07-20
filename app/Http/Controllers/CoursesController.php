<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\lectures;
use Illuminate\Http\Request;
use App\Models\courses;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    public function index() {
        $data = courses::paginate(15);
        return view('back_end.courses.list' , compact('data'));
    }

    public function getAdd() {
        $product = courses::all();
        $categories = categories::select('id' , 'name')->get();
        $lecture = lectures::select('id' , 'name')->get();
        return view('back_end.courses.add' , compact('product' , 'categories'));
    }

    public function payList() {

    }

    public function store(Request $request) {
        if(empty($request->slug)) {
            $slug = Str::slug($request->title);
        }
        else{
            $slug = Str::slug($request->slug);
        }
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'is_featured' => $request->is_featured,
            'level' => $request->level,
            'rating' => $request->rating,
            'enrollment_count' => $request->enrollment_count,
            'id_category' => $request->id_category,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'is_published' => $request->is_published,
            'is_trash' => $request->is_trash,
            'schedule_datetime_start' => $request->schedule_datetime_start,
            'schedule_datetime_end' => $request->schedule_datetime_end,
            'slug' => $slug,
            'id_lecture' => $request->id_lecture,
            'curriculum' => $request->curriculum
        ];
        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDay = date('d');
        $fileImage = $request->hasFile('image');
        if($fileImage) {
            $fileNew = $request->image;
            $newFile = $fileNew->store('course/'.$currentYear.'/'.$currentMonth.'/'.$currentDay);
            $data['image'] = $newFile;
            courses::insert($data);
            return redirect('courses/list');
        }
    }

    public function edit($id , Request $request){
        $data = courses::find($id);
        $categories = categories::select('id' , 'name')->get();
        $lecture = lectures::select('id' , 'name')->get();
        return view('back_end.courses.add' , compact('data' , 'categories' , 'lecture'));
    }

    public function update($id , Request $request) {
        if(empty($request->slug)) {
            $slug = Str::slug($request->title);
        }
        else{
            $slug = Str::slug($request->slug);
        }
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'duration' => $request->duration,
            'is_featured' => $request->is_featured,
            'level' => $request->level,
            'rating' => $request->rating,
            'enrollment_count' => $request->enrollment_count,
            'id_category' => $request->id_category,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'is_published' => $request->is_published,
            'is_trash' => $request->is_trash,
            'schedule_datetime_start' => $request->schedule_datetime_start,
            'schedule_datetime_end' => $request->schedule_datetime_end,
            'slug' => $slug,
            'id_lecture' => $request->id_lecture,
            'curriculum' => $request->curriculum
        ];
        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDay = date('d');
        $fileImage = $request->hasFile('image');
        if(!$fileImage) {
            courses::find($id)->update($data);
            return redirect('courses/list');
        }
        else{
            $fileNew = $request->image;
            $newFile = $fileNew->store('course/'.$currentYear.'/'.$currentMonth.'/'.$currentDay);
            $data['image'] = $newFile;
            courses::find($id)->update($data);
            return redirect('courses/list');
        }
    }
}
