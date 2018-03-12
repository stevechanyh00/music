<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use App\Models\Post;
use Psy\Output\ProcOutputPager;

class TestingController extends Controller
{
    //
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function test() {
       echo $this->postRepository->findAll();
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
