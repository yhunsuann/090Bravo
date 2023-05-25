<?php

namespace App\Http\Controllers;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Http\Request;
use App\Services\FileUploader;

class PostController extends Controller
{
    private $postRepository;
    protected $fileUploader;
    public function __construct(PostRepositoryInterface $postRepository, FileUploader $fileUploader)
    {
        $this->postRepository = $postRepository;
        $this->fileUploader = $fileUploader;
    }
    public function index($type){;
        $value = $this->postRepository->allPost($type);
     
        return view('post.'.$type,['result' => $value]);
    }
    public function updatePost(Request $request, $type)
    {
        $data = array();;
        if ($request->has('upload_new')) { 
            if(empty($request->upload_image)){
                $array1 = [];
            }else{
                $str1 = str_replace(['[', ']', '"'], '', $request->upload_image);
                $array1 = explode(',', $str1);
            }

            $file_name = $this->fileUploader->uploadFilePost($request);
            $str2 = str_replace(['[', ']', '"'], '', $file_name);
            $array2 = explode(',', $str2);
            $result = array_merge($array1, $array2);
            $image = json_encode($result);

            if ($image !== null) {
                $request->merge(['image' => $image]);
            }

        }else{
            if(empty($request->upload_image)){
                return redirect()->back()->with('success','Please select at least 1 photo');
            }else{
                $str1 = str_replace(['[', ']', '"'], '', $request->upload_image);
                $array1 = explode(',', $str1);
            }

            $image = json_encode($array1);
            $request->merge(['image' => $image]);
        }
   
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['description'] = $request->description;
        $data['images'] = $request->image;
        $data['language_code'] = $request->language_code;

        $this->postRepository->updatePost($data, $type);
        
        return redirect()->back();
    }
}
