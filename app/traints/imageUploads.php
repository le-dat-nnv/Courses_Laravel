<?php

namespace App\traints;
use Illuminate\Support\Facades\Storage;
trait imageUploads
{
    public function createImage()
    {
        $imagePath = public_path('uploads'); // Đường dẫn của thư mục hình ảnh
        $configPath = $imagePath . '/config';

        if (!is_dir($imagePath . '/config')) {
            Storage::disk('local')->makeDirectory('config');
//            Storage::disk('local')->makeDirectory($imagePath.'\config');
        }
//        else {

        $configExists = Storage::disk('local')->exists('config');
        dd(Storage::disk('local'));
        if ($configExists) {
            echo 'Thư mục config đã được tạo!';
            echo 'Đường dẫn đến thư mục config: ' . $configPath;
        } else {
            echo 'Thư mục config chưa tồn tại hoặc không thể truy cập!';
        }
//        }

    }
}
