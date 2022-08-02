<?php
namespace App\Repository;

use App\Entity\Post;

interface PostRepositoryInterface {
    public function findById(int $id):?Post;
}