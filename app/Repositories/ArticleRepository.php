<?php

namespace App\Repositories;
use App\Article;

class ArticleRepository{
  protected $article;
  public function __construct(Article $article)
  {
    $this->article = $article;
  }
  public function all()
  {
    return $this->article->all();
  }

  public function findById($id)
  {
    return $this->article
            ->where('id', $id)
            ->get(['title']);
  }
}
