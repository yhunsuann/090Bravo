<?php
namespace App\Repositories\Interfaces;

Interface ContactRepositoryInteface
{    
    public function allContact($data = []);
    public function submitContact($data);
} 
