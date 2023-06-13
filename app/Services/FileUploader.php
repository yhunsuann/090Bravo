<?php 
namespace App\Services;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
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
    
    public function uploadFileContact(UploadedFile $file)
    {
            $ext = $file->extension();
            $file_name = time(). '-' . 'img.' .$ext;
    
            $image = Image::make($file);
            $image->fit(535, 480);
            $image->save(public_path('assets/img/contact') . '/' . $file_name);

            return $file_name;
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
        if ($request->hasFile('upload_new')) {
            $imageData = [];

            foreach ($request->file('upload_new') as $file) {
                $ext = $file->getClientOriginalExtension();
                $stringRamdom = bin2hex(Str::random(3));
                $file_name = time() . '-'. $stringRamdom . '-img.' . $ext;
    
                $image = Image::make($file);
                $image->fit(535, 480);
                $image->save(public_path('assets/img/post') . '/' . $file_name);
    
                $imageData[] = $file_name;
            }

            $image = json_encode($imageData);
            
            return $image;
        }
        return null;
    }  
}
?>