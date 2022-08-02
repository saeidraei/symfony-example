<?php

namespace App\Controller;

use App\Repository\PostRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/post/{id}')]
    public function show(int $id, PostRepositoryInterface $postRepository): Response
    {
        $post = $postRepository->findById($id);

        return $this->render('post/show.html.twig', [
            'title' => $post->getTitle(),
        ]);
    }
}