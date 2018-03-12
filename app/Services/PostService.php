<?php

namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function findAllRecord()
    {
        return $this->postRepository->findAll();
    }

    /*public function __construct(Post $post)
    {
        $this->post = $post;
    }*/

    /*public function findAll()
    {
        return $this->post
            ->get();
    }*/
}
