<?php
namespace App\Repositories\Interfaces;

Interface BlogRepositoryInterface
{    
    public function allBlog($data = []);
    public function addBlog($data);
    public function deleteMutipleBaseIds($ids);
    public function deleteBlog($id);
    public function editBlog($id);
    public function updateBlog($data, $id);
    public function getBlogs($data = []);
    public function getInfoById(int $id);
} 
