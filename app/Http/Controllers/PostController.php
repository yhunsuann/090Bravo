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
        $data = array();
        if ($request->upload_image) {
            $uploadImages = $request->upload_image;
            $imageArray = explode(',', trim($uploadImages));
            $request->merge(['upload_image' => $imageArray]);
            $file_name = $this->fileUploader->uploadFilePost($request);
            if ($file_name !== null) {
                $request->merge(['image' => $file_name]);
            }
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
