<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\config;
use App\traints\imageUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class configController extends Controller
{
    use imageUploads;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = config::all();
        return view('back_end.Config.list' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = config::all();
        return view('back_end.Config.add' , compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->hasFile('content');
        $currentYear = date('Y');
        $currentMonth = date('m');
        $dayMonth = date('d');
        $validator = Validator::make($request->all(), [
            'title'=>'required|unique:tb_config',
            'input_type'=>'required',
            'content'=>'required'
        ]);

        if($file) {
            $newfile = $request->file('content');
            $filePath = $newfile->store('configs/'.$currentYear.'/'.$currentMonth.'/'.$dayMonth);
            // quá trình uploads ảnh đã hoàn thành nhé

        }
        else {
            $filePath = $request->input('content');
        }

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = [
            'title'=>$request->title,
            'input_type'=>$request->input_type,
            'content'=>$filePath
        ];

        config::insert($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        dd(config::all());
        $update_id= explode(",", $id);
        $content = [];
        $check_file_empty = [];

        for ($i = 1 ; $i <= count($update_id) ; $i++) {
            $content[$i - 1] = [
                'input' => $request->input('content_' . $i),
                'file' => $request->file('content_' . $i)
            ];
        }

        $combinedFields = [];
        foreach ($content as $field) {
            if (!is_null($field['input'])) {
                $combinedFields[] = $field['input'];
            }
            if (!is_null($field['file'])) {
                $combinedFields[] = $field['file'];
            }
        }


        $contents = array_filter($content, function($values) {
            return !is_null($values);
        });

        foreach ($update_id as $key => $update_ids) {
            $content_empty = $request->input('content_' . ($key + 1));

            if (empty($request->file('content_' . ($key + 1))) && empty($content_empty)) {
                $check_file_empty[] = $update_ids;
            }
        }

        $update_id = array_diff($update_id, $check_file_empty);
        $data = [
            0 => [
                'input_type'=>'text',
                'content' => 'ledat123'
            ],
            1 => [
                'input_type'=>'text',
                'content' => 'ledat123ledast'
            ],

        ];
        $data_update = '';
        $currentYear = date('Y');
        $currentMonth = date('m');
        $dayMonth = date('d');

        foreach ($combinedFields as $key => $testData) {
            if($testData instanceof \Illuminate\Http\UploadedFile) {
                $newfile = $testData;
                $filePath = $newfile->store('configs/' . $currentYear . '/' . $currentMonth . '/' . $dayMonth);
//                // Thực hiện quá trình tải lên ảnh và lưu đường dẫn vào cơ sở dữ liệu
                $data_update = $filePath; // Cập nhật đường dẫn của file trong cơ sở dữ liệu
            }
            else {
                $data_update = $testData;
            }

            config::whereIn('id',[$update_id[$key]])->update(['content' => $data_update]);
        }

        return response()->json(['messages' => 'đã sửa thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
