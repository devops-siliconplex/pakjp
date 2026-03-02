<?php

namespace App\Http\Controllers;

use App\Http\Helpers\AppMessages;
// use App\Http\Repository\articleTrackingRepository;
use App\Http\Repository\ArticleTrackingRepository;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleTrackRequest;
use App\Models\ArticleTracking;
use App\Models\WpArticle;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ArticleTrackingController extends Controller
{
    protected $articleTrackingRepository;
    public function __construct(ArticleTrackingRepository $articleTrackingRepository)
    {
        $this->articleTrackingRepository = $articleTrackingRepository;
    }

    public function index(Request $request){
        if ($request->ajax()) {
            $data = ArticleTracking::all();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        return '<a href="article_tracking/edit/'.$row->id.'" class="btn-sm"><i class="la la-edit font-20"></i></a><a href="article_tracking/view/'.$row->id.'" class="btn-sm"><i class="la la-eye font-20"></i></a><a onclick="return confirm(`Are you sure?`)" href="article_tracking/delete/'.$row->id.'" class="btn-sm"><i class="la la-trash font-20"></i></a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.article_tracking.index');
    }
    
    public function create(){
        return view('admin.article_tracking.create');
    }

    public function edit($id){
        $article = $this->articleTrackingRepository->getSingleArticleTracking($id);
        return view('admin.article_tracking.edit',compact('article'));
    }

    public function view($id){
        $article = $this->articleTrackingRepository->getSingleArticleTracking($id);
        return view('admin.article_tracking.view',compact('article'));
    }

    public function delete($id){
        try{
            $article = $this->articleTrackingRepository->deleteArticleTracking($id);
            return redirect('article_tracking')->with('success',AppMessages::ARTICLE_TRACKING_DELETED_SUCCESSFULLY);
        } catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function update(ArticleTrackRequest $request,$id){
        try{
            $article = $this->articleTrackingRepository->updateArticleTracking($request,$id);
            return redirect('article_tracking')->with('success',AppMessages::ARTICLE_TRACKING_UPDATED_SUCCESSFULLY);
        } catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function store(ArticleTrackRequest $request){
        try{
            $article = $this->articleTrackingRepository->createArticleTracking($request);
            return redirect('article_tracking')->with('success',AppMessages::ARTICLE_TRACKING_CREATED_SUCCESSFULLY);
        } catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function setData(){
        // $posts = DB::table('wp__posts')->select('wp__posts.id','wp__postmeta.post_id','wp__posts.post_title','meta_key','meta_value')
        // ->leftJoin('wp__postmeta','wp__postmeta.post_id','wp__posts.id')
        // ->where('post_type','article_tracking')->orderBy('wp__postmeta.post_id')
        // ->get();
        // $dataset = [];
        // foreach($posts as $post){
        //     $dataset[$post->post_id][$post->meta_key] = $post->meta_value;
        //     $dataset[$post->post_id]['post_title'] = $post->post_title;
        // }
        // $finalDataSet = [];
        // $date = date('m/d/Y h:i:s a', time());
        // foreach($dataset as $data){
        //     if(count($data) >= 14){
        //         $item['title'] = $data['post_title']; 
        //         $item['ack_date'] = $data['ack_date']; 
        //         $item['scanned'] = $data['scanned']; 
        //         $item['sForMod'] = $data['sForMod']; 
        //         $item['rAfterMod'] = $data['rAfterMod']; 
        //         $item['sForEval'] = $data['sForEval']; 
        //         $item['rAfterEval'] = $data['rAfterEval']; 
        //         $item['sForRev'] = $data['sForRev']; 
        //         $item['rAfterRev'] = $data['rAfterRev']; 
        //         $item['pubDate'] = $data['pubDate'];
        //         $item['pubDate'] = $data['pubDate'];
        //         $item['created_at'] = $date;
        //         $item['updated_at'] = $date;
        //         $finalDataSet[] = $item; 
        //     }
        // }
        // $insert = ArticleTracking::insert($finalDataSet);
        // dd($insert);
        // dd($dataset);
        // $postid = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_title = '" . $posttitle . "' and post_type = 'article_tracking';" );

    }
}
