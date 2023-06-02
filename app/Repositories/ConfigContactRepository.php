<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ConfigContactRepositoryInterface;
use App\Models\ConfigContact;
use App\Services\FileUploader;

class ConfigContactRepository implements ConfigContactRepositoryInterface
{
    protected $model;
    protected $fileUploader;

    public function __construct(
        ConfigContact $model, 
        FileUploader $fileUploader
    ){
        $this->model = $model;
        $this->fileUploader = $fileUploader;
    }

    public function allConfigContact(){
        return $this->model->all();
    }

    public function save($data)
    {
        foreach ($data as $key => $item) {
            
            if (is_array($item) && array_key_exists('edit', $item)) {

                if (isset($item['value']) && is_a($item['value'], 'Illuminate\Http\UploadedFile')) {
                    $file_name = $this->fileUploader->uploadFileContact($item['value']);

                    if ($file_name !== null) {
                        $item['value_edit'] = $file_name;
                    }
                }
                $updateData = ['value' => $item['value_edit']];
                $this->model->where('contact_key', $item['contact_key'])->update($updateData);
            } else if(is_array($item) && array_key_exists('add', $item)) {
                $configContact = [];

                if (isset($item['value']) && is_a($item['value'], 'Illuminate\Http\UploadedFile')) {
                    $file_name = $this->fileUploader->uploadFileContact($item['value']);

                    if ($file_name !== null) {
                        $item['value_add'] = $file_name;
                    }
                }

                $configContact['name'] = $item['name'];
                $configContact['contact_key'] = $item['contact_key'];
                $configContact['type'] = $item['type'];
                $configContact['value'] = $item['value_add'];
      
                $this->model->create($configContact);
            }
        }
    }
}    