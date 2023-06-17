<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ConfigContactRepositoryInterface;
use App\Models\ConfigContact;
use App\Services\FileUploader;
use App\Models\ConfigTranslate;

class ConfigContactRepository implements ConfigContactRepositoryInterface
{    
    /**
     * model
     *
     * @var mixed
     */
    protected $model;  
    /**
     * fileUploader
     *
     * @var mixed
     */
    protected $fileUploader;
    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct(
        ConfigContact $model, 
        FileUploader $fileUploader
    ){
        $this->model = $model;
        $this->fileUploader = $fileUploader;
    }
    
    /**
     * allConfigContact
     *
     * @return void
     */
    public function allConfigContact(){
        return $this->model
            ->with('trans')
            ->get();
    }
    
    /**
     * save
     *
     * @param  mixed $data
     * @return void
     */
    public function save($lang_code, $data)
    {
        foreach ($data as $key => $item) {
            if (isset($item['value']) && $item['value'] instanceof \Illuminate\Http\UploadedFile) {
                $file_name = $this->fileUploader->uploadFileContact($item['value']);

                if ($file_name !== null) {
                    $item['value'] = $file_name;
                }
            }

            if (isset($item['value'])) {
                $conf = ConfigTranslate::where('config_id', $item['id'])->where('language_code', $lang_code)->first();
                if (!empty($conf)) {
                    $conf->update([
                        'value' => $item['value']
                    ]);
                } else {
                    ConfigTranslate::insert([
                        'language_code' => $lang_code,
                        'config_id' => $item['id'],
                        'value' => $item['value']
                    ]);
                }
            }
        }
    }
    
    /**
     * getByLang
     *
     * @return void
     */
    public function getByLang($code)
    {
        return $this->model
                ->join('config_translates', 'config.id', 'config_translates.config_id')
                ->where('language_code', $code)
                ->pluck('value', 'contact_key')
                ->toArray();
    }
}    
