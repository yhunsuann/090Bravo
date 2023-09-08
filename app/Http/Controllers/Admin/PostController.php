<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Http\Request;
use App\Services\FileUploader;
use App\Http\Controllers\Controller;

class PostController extends Controller
{    
    /**
     * postRepository
     *
     * @var mixed
     */
    protected $postRepository;
    
    /**
     * fileUploader
     *
     * @var mixed
     */
    protected $fileUploader;
        
    /**
     * __construct
     *
     * @param  mixed $postRepository
     * @return void
     */
    public function __construct(PostRepositoryInterface $postRepository) {
        $this->postRepository = $postRepository;
        $this->fileUploader = new FileUploader;
    }
    
    /**
     * index
     *
     * @param  mixed $type
     * @return void
     */
    public function index($type){;
        $value = $this->postRepository->allPost($type);
    
        return view('admin.post.'.$type,['result' => $value]);
    }
    
    /**
     * updatePost
     *
     * @param  mixed $request
     * @param  mixed $type
     * @return void
     */
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
                return back()->withErrors('Please select at least 1 photo');
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
