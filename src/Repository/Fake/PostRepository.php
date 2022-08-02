<?php

namespace App\Repository\Fake;

use App\Entity\Post;
use App\Repository\PostRepositoryInterface;
use Symfony\Component\DependencyInjection\Attribute\When;

#[When(env: 'test')]
class PostRepository implements PostRepositoryInterface
{

    private array $fakeData = [];

    private function initData()
    {
        $this->fakeData = [
            new Post(['id' => 1, 'title' => 'test title 1']),
            new Post(['id' => 2, 'title' => 'test title 2'])
        ];
    }

    public function __construct()
    {
        $this->initData();
    }

    public function findById(int $id): ?Post
    {
        foreach ($this->fakeData as $model) {
            if ($model->getId() == $id) {
                return $model;
            }
        }
        return null;
    }
}