<?php 
namespace App\Http\Repository;
interface MemberRepositoryInterface {
    public function createMember($request);
    public function deleteMember($id);
    public function getSingleArticle($id);
    public function updateMember($request,$id);
}