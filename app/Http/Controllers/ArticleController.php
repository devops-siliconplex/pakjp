<?php

namespace App\Http\Controllers;

use App\Models\WpArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ArticleRequest;
use Exception;
use App\Http\Repository\ArticleRepository;
use App\Http\Helpers\AppMessages;
use App\Http\Requests\SubmissionRequest;
use App\Mail\SubmissionMail;
use App\Models\ArticleTracking;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\DataTables;

class ArticleController extends Controller
{
    protected $articleRepository;
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function index(Request $request){
        if ($request->ajax()) {
            $data = WpArticle::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        return '<a href="article/edit/'.$row->id.'" class="btn-sm"><i class="la la-edit font-20"></i></a><a href="article/view/'.$row->id.'" class="btn-sm"><i class="la la-eye font-20"></i></a><a href="article/delete/'.$row->id.'"  onclick="return confirm(`Are you sure?`)" class="btn-sm"><i class="la la-trash font-20"></i></a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.article.index');
    }
    
    public function board(){
        return view('board');
    }
    public function instructions(){
        return view('instructions');
    }
    
    public function delete($id){
        try{
            $article = $this->articleRepository->deleteArticle($id);
            return redirect('articles')->with('success',AppMessages::ARTICLE_DELETE_SUCCESSFULLY);
        } catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
    public function create(){
        return view('admin.article.create');
    }

    public function edit($id){
        $article = $this->articleRepository->getSingleArticle($id);
        return view('admin.article.edit',compact('article'));
    }

    public function view($id){
        $article = $this->articleRepository->getSingleArticle($id);
        return view('admin.article.view',compact('article'));
    }

    public function update(ArticleRequest $request,$id){
        try{
            $article = $this->articleRepository->updateArticle($request,$id);
            return redirect('articles')->with('success',AppMessages::ARTICLE_UPDATED_SUCCESSFULLY);
        } catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function store(ArticleRequest $request){
        try{
            $article = $this->articleRepository->createArticle($request);
            return redirect('articles')->with('success',AppMessages::ARTICLE_CREATED_SUCCESSFULLY);
        } catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
    

    public function home(){
        list($regular_articles,$regular_volume,$regular_issue) = $this->articleRepository->getArticlesWithIssue(null,null,0,1,true,4);
        list($supplementary_articles,$supplementary_volume,$supplementary_issue) = $this->articleRepository->getArticlesWithIssue(null,null,1,1,true,1);
        list($special_articles,$special_volume,$special_issue) = $this->articleRepository->getArticlesWithIssue(null,null,2,1,true,1);
        $dataSet = [
            'regular' => [
                'articles' => $regular_articles,
                'volume' => $regular_volume,
                'issue' => $regular_issue
            ],
            'supplementary' => [
                'articles' => $supplementary_articles,
                'volume' => $supplementary_volume,
                'issue' => $supplementary_issue
            ],
            'special' => [
                'articles' => $special_articles,
                'volume' => $special_volume,
                'issue' => $special_issue
            ]
        ];
        view()->share('data',$dataSet);
        return view('home');
    }

    public function current(){
        $volume = $this->articleRepository->getMaxVolume(0,1);
        $issue = $this->articleRepository->getMaxIssue($volume,0,1);
        $articles = $this->articleRepository->getArticles($volume,$issue,0,1);
        $type = WpArticle::CURRENT;
        return view('issues',compact('articles','volume','issue','type'));
    }

    public function future(){
        $articles = $this->articleRepository->getArticles(0,0,0,1);
        $type = WpArticle::FUTURE;
        return view('issues',compact('articles','type'));
    }

    public function previous(){
        $volume = $this->articleRepository->getMaxVolume(0,1);
        $issue = $this->articleRepository->getMaxIssue($volume,0,1);
        if($issue == 1)
            $volume--;
        else
            $issue--;

        $articles = $this->articleRepository->getArticles($volume,$issue,0,1);
        $type = WpArticle::PREVIOUS;
        return view('issues',compact('articles','volume','issue','type'));
    }

    public function special(){
        $volume = $this->articleRepository->getMaxVolume(2,1);
        $issue = $this->articleRepository->getMaxIssue($volume,2,1);
        $articles = $this->articleRepository->getArticles($volume,$issue,2,1);
        $type = WpArticle::SPECIAL;
        return view('issues',compact('articles','volume','issue','type'));
    }

    public function supplementary(){
        $volume = $this->articleRepository->getMaxVolume(1,1);
        $issue = $this->articleRepository->getMaxIssue($volume,1,1);
        $articles = $this->articleRepository->getArticles($volume,$issue,1,1);
        $type = WpArticle::SUPPLEMENTARY;
        return view('issues',compact('articles','volume','issue','type'));
    }

    public function articleByCategory(){
        $volume = WpArticle::select(DB::raw('DISTINCT volume'))->orderBy('volume')->get();
        return view('search_article_by_category',compact('volume'));
    }

    public function stats_ajax(){
    
        if(isset($_POST['issue'])){
            $query = WpArticle::select(DB::raw('COUNT(id) as total'),'issue_date','TYPE','volume')->where(['volume'=>$_POST["volumeID"],'issue'=>$_POST["issue"]])->orderBy('volume')->groupBy('TYPE')->get();
            $year = $query[0]->issue_date;
            $year = strtotime($year);
            $year = date('Y',$year);
            $reports = $original_articles = $short_communication = $reviews ='N/A';
            $regular = $supplementry = $special = 'N/A';
            foreach($query as $que) {
                if($que->TYPE == 0) {
                    $regular = $que->total;
                }elseif($que->TYPE == 1) {
                    $supplementry = $que->total;
                }elseif($que->TYPE == 2) {
                    $special = $que->total;
                }
    
            }
            // print_r($category_types); die();
            echo '        <div class="row">
            <div>
            <table>
                <col>
                <colgroup span="2"></colgroup>
                <colgroup span="2"></colgroup>
                <colgroup span="2"></colgroup>
                <tr>
                    <th scope="col" class="th-width">Volume</th>
                    <th scope="col" style="width: 17.75em;">Issue</th>
                    <th scope="col" style="width: 17.75em;">No. of article</th>
                </tr>
                <tr>
                    <td rowspan="4" scope="col">'. $query[0]->volume .'<br>('.$year.')</td>
                </tr>
                <tr>
                    <td scope="row">Regular</td>
                    <td>'.$regular.'</td>
                </tr>
                <tr>
                    <td scope="row">Supplementary</td>
                    <td>'.$supplementry.'</td>
                </tr>
                <tr>
                    <td scope="row">Special</td>
                    <td>'.$special.'</td>
                </tr>
            </table>
            </div>
            <table>
                <tr>
                    <th>Original Articles</th>
                    <th>Reports</th>
                    <th>Short Communiaction</th>
                    <th>Reviews</th>
                </tr>
                <tr>
                    <td class="td-width">' . $original_articles . '</td>
                    <td class="td-width">' . $reports . '</td>
                    <td class="td-width">' . $short_communication . '</td>
                    <td class="td-width">' . $reviews . '</td>
                </tr>
            </table>
        </div>';
        die();
    
        }
        else{
            $option = "";
            $issue = WpArticle::select(DB::raw('DISTINCT(issue)'))->where(['volume'=>$_POST["volumeID"]])->orderBy('issue')->get();
            // $issue = $wpdb->get_results("SELECT DISTINCT(issue) FROM wp_article WHERE volume = ".$_POST['volumeID']. " ORDER BY issue;");
    
                for($i=0; $i<count($issue) ; $i++) 
                {
                    $option .= '<option value="'.$issue[$i]->issue.'">';

                    $option .= "Issue : ".$issue[$i]->issue;

                    $option .= '</option>';

                }
                echo '<option value="-1" selected="selected">Select Issue</option>'.$option;

                die();
        }
    }

    public function implement_ajax() {
        // global $wpdb;
        $type = 0;
        if(isset($_POST['type']))
            $type = $_POST['type'];
        
        if(isset($_POST['issue'])){
            
            // $articles = $wpdb->get_results("SELECT * FROM wp_article WHERE volume = ".$_POST['volumeID']." AND issue = ".$_POST['issue']." AND type=".$type." and is_active = 1 order by article_num");
            $articles = WpArticle::where(['volume' => $_POST["volumeID"], 'issue' => $_POST['issue'], 'type' => $type , 'is_active' => 1 ])->orderBy('article_num')->get();
            $option = '<span class="issues_title">Volume : '.$_POST['volumeID'].', Issue : '.$_POST['issue'].', '.date('M  Y',strtotime($articles[0]->issue_date)).'</span>';
            $option.= '<ul class="latest-article" style="list-style:decimal;">';
            
            for($i=0; $i< count($articles); $i++){
    
                $title = $articles[$i]->title;
                
                $atID  = $articles[$i]->id;
    
                $doi   = $articles[$i]->doi;
    
                $fileUrl = $articles[$i]->attachment;
                $path = explode('/wp-content',$fileUrl);
                $atPath = !empty($path[1])?$path[1]:$path[0];
    
                $pAuthor = $articles[$i]->author;
    
                $pNum = $articles[$i]->pages;
                
                $option.="<li style='margin:10px 0px;'><a href='".$atPath."'>".$title."</a><br>
    
                <span>Page No: ". $pNum."</span><br>
    
                <span>By: ". $pAuthor."</span><br>";
    
                if($doi != null) {
                    $option.='<span>DOI : <a href="'. $doi .'" >'. $doi .'</a></span><br>';
                }
    
                $option.="<span><a href='".url('')."/?page_id=276&id=".$atID ."'><i>[View Abstract]</i></a>&nbsp;
    
                <a href='".$atPath."'><i>[View Complete Article]</i></a>
    
                </span><br></li>";
            }
            $option.="</ul>";
            echo $option;
                
            die();
    
        }else{
        $issue = WpArticle::select(DB::raw('DISTINCT(issue)'))->where(['volume'=>$_POST["volumeID"], 'type' => $type ])->orderBy('issue')->get();
        //   $issue = $wpdb->get_results("SELECT DISTINCT(issue) FROM wp_article WHERE volume = ".$_POST['volumeID']." AND type=".$type." ORDER BY issue;");
                for($i=0; $i<count($issue) ; $i++) 
                {
                $option = '<option value="'.$issue[$i]->issue.'">';

                $option .= "Issue : ".$issue[$i]->issue;

                $option .= '</option>';

                }
                echo '<option value="-1" selected="selected">Select Issue</option>'.$option;
            die();
        }
    }

    public function ourSearch(Request $request){
        if($request->type && $request->type == "article_tracking"){
            $customFields = ArticleTracking::where(['title' => $request->msNumber])->first();
            return view('tracking',compact('customFields'));
        }
        $articles = WpArticle::where(['is_active' => 1,])->Where('author' ,'LIKE',"%" . $request->oursearch . "%")->orWhere('title','LIKE',"%" . $request->oursearch . "%")->get();
        return view('oursearch',compact('articles'));
    }

    public function submission_form(SubmissionRequest $request){
        try{
            $data = $request->all();
            $submission_type = $_POST['submission_type'];
            $title_ms = $_POST['title_ms'];
            $all_authors = $_POST['all_authors'];
            $email = $_POST['email'];
            $my_name = "Pjps";
            $my_mail = "sender@cjpas.net";
            // $mailArr = array("pakjps@hotmail.com","pjps@uok.edu.pk","szohaibnajam@gmail.com",'huzaif.siliconplex@gmail.com');
            $mailArr = array('huzaif.siliconplex@gmail.com');
            $my_subject = "You have received new Article";
            $is_mail_sent = false;
            $body = "You have received the following from the web based upload form\r\n";
                        //$body.= "---------------------------------------------------------------\r\n";
                        $body .= "
                        Submission Type : " . $data['submission_type'] . "\r\n
                        Title of the MS : " . $data['title_ms'] . "\r\n
                        Name of all authors : " . $data['all_authors'] . "\r\n
                        E-mail Address : " . $data['email'] . "\r\n";
                        // $body .= "</body></html>";
            for ($i = 0; $i < count($mailArr); $i++)
            {
                if($this->mail_attachment($mailArr[$i], $my_mail, $my_name, $mailArr[$i], $my_subject,$body,$data))
                {
                    $is_mail_sent = true;
                }
            }
            return redirect()->back()->with('success','Article submited successfully');
        } catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
      
    }

    function mail_attachment($recipient_email, $from_email, $sender_name, $reply_to_email, $subject,$message,$data) {
      
        //Get uploaded file data using $_FILES array
        $tmp_name = $_FILES['fileUploadArticle']['tmp_name']; // get the temporary file name of the file on the server
        $name     = $_FILES['fileUploadArticle']['name']; // get the name of the file
        $size     = $_FILES['fileUploadArticle']['size']; // get size of the file for size validation
        $type     = $_FILES['fileUploadArticle']['type']; // get type of the file
        $error     = $_FILES['fileUploadArticle']['error']; // get the error (if any)
        
        $tmp_name1 = $_FILES['fileUploadUndertaking']['tmp_name']; // get the temporary file name of the file on the server
        $name1     = $_FILES['fileUploadUndertaking']['name']; // get the name of the file
        $size1     = $_FILES['fileUploadUndertaking']['size']; // get size of the file for size validation
        $type1     = $_FILES['fileUploadUndertaking']['type']; // get type of the file
        $error1     = $_FILES['fileUploadUndertaking']['error']; // get the error (if any)
    
        //validate form field for attaching the file
        if($error > 0)
        {
            throw new Exception('Upload error or No files uploaded');
        }
    
        //read from the uploaded file & base64_encode content
        $handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
        $content = fread($handle, $size); // reading the file
        fclose($handle);                 // close upon completion

        $handle1 = fopen($tmp_name1, "r"); // set the file handle only for reading the file
        $content1 = fread($handle1, $size1); // reading the file
        fclose($handle1);                 // close upon completion
    
        $encoded_content = chunk_split(base64_encode($content));
        $encoded_content1 = chunk_split(base64_encode($content1));
        $boundary = md5("random"); // define boundary with a md5 hashed value
    
        //header
        $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
        $headers .= "From:".$from_email."\r\n"; // Sender Email
        $headers .= "Reply-To: ".$reply_to_email."\r\n"; // Email address to reach back
        $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
        $headers .= "boundary = $boundary\r\n"; //Defining the Boundary
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    
        //plain text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode($message));
            
        //attachment
        $body .= "--$boundary\r\n"; 
        $body .="Content-Type: $type; name=".$name."\r\n";
        $body .="Content-Disposition: attachment; filename=".$name."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
        $body .= $encoded_content; // Attaching the encoded file with email
        
        $body .= "--$boundary\r\n"; 
        $body .="Content-Type: $type1; name=".$name1."\r\n";
        $body .="Content-Disposition: attachment; filename=".$name1."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
        $body .= $encoded_content1; // Attaching the encoded file with email
        $body .= "--$boundary\r\n"; 
        
        $sentMailResult = mail($recipient_email, $subject, $body, $headers);
    
        if($sentMailResult )
        {
            return $sentMailResult;
        }
        throw new Exception("Sorry but the email could not be sent. Please go back and try again!");
    }

    public function single_article(Request $request){
        try{
            $article = $this->articleRepository->getSingleArticle($request->id);
            return view('single_article',compact('article'));
        } catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
        
    }
}
