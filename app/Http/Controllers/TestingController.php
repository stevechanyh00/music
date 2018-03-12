<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Services\PostService;

class TestingController extends Controller
{
    //
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function test() {
       echo $this->postService->findAllRecord();
    }

    public function create() {
        /*$post = new Post;
        $post->title = 'Laravel 學習筆記';
        $post->content = 'Laravel 是一個 PHP Web 開發框架。';
        $post->save();*/

        return Post::create([
            'title' => '2',
            'content' => '1',
        ]);
    }
}
