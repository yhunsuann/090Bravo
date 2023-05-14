<?php
namespace App\Repositories\Interfaces;

Interface RecruitmentRepositoryInterface
{    
    public function allRecruitments();
    public function addRecruitments($data);
    public function updateCruitments($data, $id); 
    public function deleteCruitments($id);
    public function editCruitments($id);
    public function searchCruitments($data);
    public function deleteSelect($ids);
    public function recoverPass($data);
    public function updatePass($data);
} 
?>