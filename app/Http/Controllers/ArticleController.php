<?php

namespace App\Http\Controllers;

//use App\Repositories\ArticleRepository;
use App\Services\PostService;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $postService;
    public function __construct(PostService $postService){
      $this->postService=$postService;
    }

    public function index()
    {
      $customers = $this->postService->getAll();
      return $customers;
    }

    public function show($id)
    {
      $customers = $this->postService->getById($id);
      return $customers;
    }
}
