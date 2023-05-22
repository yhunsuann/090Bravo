<?php 
namespace App\Services;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FileUploader
{
    public function uploadFileRecruitment(Request $request)
    {
        if ($request->hasFile('upload_image')) {
            $ext = $request->file('upload_image')->extension();
            $file_name = time(). '-' . 'img.' .$ext;
            $file = $request->file('upload_image');

            $image = Image::make($file);
            $image->fit(1600, 900);
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
            $image->fit(1600, 900);
            $image->save(public_path('assets/img/blog') . '/' . $file_name);

            return $file_name;
        }
    
        return null;
    }
}
?>