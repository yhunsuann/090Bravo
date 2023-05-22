<?php
namespace App\Repositories\Interfaces;

Interface BlogTranslateRepositoryInterface
{    
    public function updateBlogTranslate($id, $languageCode, $data);
} 
?>
