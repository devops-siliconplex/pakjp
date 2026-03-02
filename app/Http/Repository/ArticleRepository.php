<?php
namespace App\Http\Repository;

use App\Models\WpArticle;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

class ArticleRepository implements ArticleRepositoryInterface{

  public function createArticle($request){
    $data = $request->all();
    if ($request->file('file')) {
      $uploadNewImage = $this->uploadImage($request->file('file'));
      $data['attachment'] = $this->getUploadPath(true).$uploadNewImage;
    }
    $article = WpArticle::create($data);
    if($article && !empty($article)){
        return $article;
    }
    throw new Exception('Something went wrong'); 
  }

  public function updateArticle($request,$id){
    $data = $request->all();
    if ($request->file('file')) {
      $uploadNewImage = $this->uploadImage($request->file('file'));
      $data['attachment'] = $this->getUploadPath(true).$uploadNewImage;
    }
    $article = WpArticle::find($id);
    $article = $article->update($data);
    if($article && !empty($article)){
        return $article;
    }
    throw new Exception('Something went wrong'); 
  }

  public function getSingleArticle($id){
    $article = WpArticle::find($id);
    if($article && !empty($article)){
      return $article;
    }
    throw new Exception('Article Not Found');
  }

  public function uploadImage($image,$name = false)
  {
    if($name){
      $imageName = $image->getClientOriginalName() . '.' . $image->extension();
    }
    else{
      $imageName = time() . '.' . $image->extension();
    }
    
    $uploaded = $image->move($this->getUploadPath(), $imageName);
    if ($uploaded) {
      return $imageName;
    }
    throw new Exception('File Uploading Failed');
  }

  public function deleteImage($image_name, $path)
  {
    $image_path = $path . $image_name;
    if (file_exists($image_path)) {
      return unlink($image_path);
    }
    return true;
  }

  public function getMaxVolume($type , $is_active){
      return WpArticle::select(DB::raw("MAX(volume) as max"))->where(['type' => $type,'is_active' => $is_active])->first()->max;
  }

  public function getMaxIssue($volume,$type , $is_active){
      return WpArticle::select(DB::raw("MAX(issue) as max"))->where(['volume' => $volume,'type' => $type,'is_active' => $is_active])->first()->max;
  }
  public function getArticles($volume,$issue,$type ,$is_active){
    return WpArticle::where(['volume' => $volume,'issue' => $issue ,'type' => $type ,'is_active' => $is_active ])->orderBy('article_num')->get();
  }
  public function getArticlesWithIssue($volume = null, $issue = null, $type ,$is_active, bool $order_by = true, int $limit = null){
    $query = WpArticle::where(['type' => $type ,'is_active' => $is_active ]);
    if($volume != null){
      $max_volume = $volume;
    }
    else{
      $max_volume = $query->max('volume');
    }

    if($issue != null){
      $max_issue = $issue;
    }
    else{
      $max_issue = $query->where('volume',$max_volume)->max('issue');
    }
    
    $article = $query->where(['volume' => $max_volume,'issue' => $max_issue ]);
    if($order_by != null){
      $article = $article->orderBy('article_num');
    }
    if($limit != null){
      $article = $article->limit($limit);
    }
    return [$article->get(),$max_volume,$max_issue];
  }
    
  public function getUploadPath($get_path = false){
    $date = Carbon::today();
    if($get_path){
      return 'uploads/'.$date->format('Y').'/'.$date->format('m').'/';
    }
    else{
      return public_path('uploads/'.$date->format('Y').'/'.$date->format('m').'/');
    }
  }

  public function deleteArticle($id){
    $article = WpArticle::find($id);
    $article = $article->delete();
    if($article && !empty($article)){
        return $article;
    }
    throw new Exception('Something went wrong'); 
  }
}
