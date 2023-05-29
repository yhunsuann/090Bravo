<?php
namespace App\Repositories\Interfaces;

Interface PostTranslateRepositoryInterface
{    
    public function updatePostTranslate($id, $languageCode, $data);
} 
?>