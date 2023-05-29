<?php
namespace App\Repositories\Interfaces;

Interface UserRepositoryInterface
{    
    public function recoverPass($data);
    public function updatePass($data);
} 
?>
