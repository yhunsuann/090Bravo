<?php
namespace App\Repositories\Interfaces;

Interface RecruitmentRepositoryInterface
{    
    public function allRecruitments($data = []);
    public function addRecruitments($data);
    public function updateCruitments($data, $id); 
    public function deleteCruitments($id);
    public function editCruitments($id);
    public function deleteMutipleBaseIds($ids);
} 
?>
