<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class categoriesController extends Controller
{
    public function index() {
        $data = categories::where('softDeletes' , '=' , 0)->paginate(15);
        return view('back_end.categories.list' , compact('data'));
    }

    public function getAdd() {
        $product = categories::all();
        return view('back_end.categories.add' , compact('product'));
    }

    public function store(Request $request) {
        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDay = date('d');
        $new_file = $request->hasFile('Image');
        if($new_file) {
            $file_new = $request->file('Image');
            $file_upload = $file_new->store('CetagoriesCourse/'.$currentYear.'/'.$currentMonth.'/'.$currentDay);
        }
        $slug = Str::slug($request->name);
        $data = [
            'name'=> $request->name,
            'description' => $request->description,
            'slug' => $slug,
            'image' => $file_upload
        ];
        categories::insert($data);
        return redirect()->to('categories/list');
    }

    public function edit(Request $request , $id) {
        $data = categories::select('id' , 'name' , 'slug' , 'description' , 'image')->find($id);
        return view('back_end.categories.add' , compact('data'));
    }

    public function update($id , Request $request) {
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description
        ];
        if(empty($request->Image)) {
            categories::find($id)->update($data);
            return redirect()->to('categories/list');
        }
        else {
            $currentYear = date('Y');
            $currentMonth = date('m');
            $currentDay = date('d');
            $newFile = $request->Image;
            $fileNew = $newFile->store('CetagoriesCourse/'.$currentYear.'/'.$currentMonth.'/'.$currentDay);
            $data['image'] = $fileNew;
            categories::find($id)->update($data);
            return redirect()->to('categories/list');
        }
    }

    public function destroy($id) {
        $categories = categories::find($id)->update(['softDeletes'=>1]);
        if($categories) {
            return redirect('categories/list');
        }
        else {
            return redirect()->back()->with('msg' , 'chưa thế xóa recored');
        }
    }
}
