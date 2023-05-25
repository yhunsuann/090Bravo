<?php 
namespace App\Services;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Http\UploadedFile;

class FileUploader
{
    public function uploadFileRecruitment(Request $request)
    {
        if ($request->hasFile('upload_image')) {
            $ext = $request->file('upload_image')->extension();
            $file_name = time(). '-' . 'img.' .$ext;
            $file = $request->file('upload_image');

            $image = Image::make($file);
            $image->fit(535, 480);
            $image->save(public_path('assets/img/cruitments') . '/' . $file_name);

            return $file_name;
        }
    
        return null;
    }
    public function uploadFileBlog(Request $request)
    {
        if ($request->hasFile('upload_image')) {
            $ext = $request->file('upload_image')->extension();
            $file_name = time(). '-' . 'img.' .$ext;
            $file = $request->file('upload_image');

            $image = Image::make($file);
            $image->fit(535, 480);
            $image->save(public_path('assets/img/blog') . '/' . $file_name);

            return $file_name;
        }
    
        return null;
    }
    public function uploadFilePost(Request $request)
    {
        if ($request->upload_image) {
            $imageData = [];
    
            foreach ($request->upload_image as $file) {
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                $file_name = time() . '-' . 'img.' . $ext;
                $file->save(public_path('assets/img/post'), $file_name);
                $imageData[] = $file_name;
            }
    
            $imageJson = json_encode($imageData);
            dd($imageJson);
            return $imageJson;
        }
    
        dd('ket thuc');
        return null;
    }
}
?>