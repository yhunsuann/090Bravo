<?php
namespace App\Repositories\Interfaces;

Interface PostRepositoryInterface
{    
    public function allPost($type);
    public function updatePost($data, $type);
} 
?>