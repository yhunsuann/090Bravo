<?php
namespace App\Repositories\Interfaces;

Interface ConfigContactRepositoryInterface
{    
    public function allConfigContact();
    public function save($key, $data);
    public function getByLang(string $code);
} 
