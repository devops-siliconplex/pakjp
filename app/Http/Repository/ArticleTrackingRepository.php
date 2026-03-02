<?php
namespace App\Http\Repository;

use App\Models\ArticleTracking;
use App\Models\WpArticle;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

class ArticleTrackingRepository implements ArticleTrackingRepositoryInterface{

  public function createArticleTracking($request){
    $data = $request->all();
    $article = ArticleTracking::create($data);
    if($article && !empty($article)){
        return $article;
    }
    throw new Exception('Something went wrong'); 
  }

  public function updateArticleTracking($request,$id){
    $data = $request->all();
    $article = ArticleTracking::find($id);
    $article = $article->update($data);
    if($article && !empty($article)){
        return $article;
    }
    throw new Exception('Something went wrong'); 
  }

  public function getSingleArticleTracking($id){
    return ArticleTracking::find($id);
  }

  public function deleteArticleTracking($id){
    $article = ArticleTracking::find($id);
    $article = $article->delete();
    if($article && !empty($article)){
        return $article;
    }
    throw new Exception('Something went wrong'); 
  }
  
}
