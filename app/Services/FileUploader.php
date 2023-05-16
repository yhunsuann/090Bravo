<?php 
namespace App\Services;

use Illuminate\Http\Request;

class FileUploader
{
    public function uploadFile(Request $request)
    {
        if ($request->hasFile('upload_image')) {
            $ext = $request->file('upload_image')->extension();
            $file_name = time(). '-' . 'img.' .$ext;
            $file = $request->file('upload_image');
            $file->move(public_path('assets/img/cruitments'), $file_name);
            
            return $file_name;
        }
            return null;
    }
}
?>