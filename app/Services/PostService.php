<?php

namespace App\Services;
use App\Repositories\ArticleRepository;

 class PostService {
   protected $articleRepository;

   public function __construct(ArticleRepository $articleRepository)
   {
     $this->articleRepository = $articleRepository;
   }

   public function getAll()
   {
     return $this->articleRepository->all();
   }

   public function getById($id)
   {
     return $this->articleRepository->findById($id);
   }
 }
