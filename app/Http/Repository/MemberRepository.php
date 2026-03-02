<?php
namespace App\Http\Repository;

use App\Models\Member;
use Exception;
use Carbon\Carbon;
use App\Http\Repository\MemberRepositoryInterface;
use Illuminate\Support\Facades\DB;

class MemberRepository implements MemberRepositoryInterface{
    // Create Member Function
    public function createMember($request){
        // Body of function
        $data=$request->all();
        if ($request->file('file')){
            $uploadnewfile=$this->uploadImage($request->file('file'));
            $data['file'] = $this->getUploadPath(true).$uploadnewfile;
        }
        $member = Member::create($data);
        if($member && !empty($member)){
            return $member;
        }
        throw new Exception('Something went wrong'); 
      }
    
    //   Delete Member Function here
      public function deleteMember($id){
        $member=Member::find($id);
        $member=$member->delete();
        if ($member && !empty($member)){
            return $member;
        }
        throw new Exception('Something went wrong'); 
      }


    // Get Single Article 
    public function getSingleArticle($id){
      $first_record=Member::find($id);
      if ($first_record && !empty($first_record)){
        return $first_record;
      }
      throw new Exception('Something went wrong!!!');
    }

    // Update Member Function here
    public function updateMember($request,$id){
      $data=$request->all();
      if ($request->file('file')){
        $upload_new_file=$this->uploadImage($request->file('file'));
        $data['file'] = $this->getUploadPath(true).$upload_new_file;
      }
      $member=Member::find($id);
      $member=$member->update($data);

      if ($member && !empty($member)){
        return $member;
      }
      else{
        throw new Exception('Something went wrong !!!');
      }
    }
    



public function uploadImage($image,$name = false){
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



    


public function getUploadPath($get_path = false){
    $date = Carbon::today();
    if($get_path){
      return 'uploads/'.$date->format('Y').'/'.$date->format('m').'/';
    }
    else{
      return public_path('uploads/'.$date->format('Y').'/'.$date->format('m').'/');
    }
  }



}
