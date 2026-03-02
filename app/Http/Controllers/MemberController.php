<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
use App\Http\Helpers\AppMessages;
use App\Http\Repository\MemberRepository;
use Yajra\DataTables\DataTables;
class MemberController extends Controller
{
    protected $memberRepository;
    public function __construct(MemberRepository $memberRepository)
    {
        $this->memberRepository = $memberRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Here needs to done work related to show data into table
        if ($request->ajax()){
            $data = Member::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        return '<a href="members/edit/'.$row->id.'" class="btn-sm"><i class="la la-edit font-20"></i></a><a href="members/view/'.$row->id.'" class="btn-sm"><i class="la la-eye font-20"></i></a><a href="members/delete/'.$row->id.'"  onclick="return confirm(`Are you sure?`)" class="btn-sm"><i class="la la-trash font-20"></i></a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.member.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.member.create');
    }

    // Delete Function
    public function delete($id){
        try{
            $member = $this->memberRepository->deleteMember($id);
            return redirect('members')->with('success',AppMessages::MEMBER_DELETE_SUCCESSFULLY);
        } catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    // View Function 
    public function view($id){
        try{
            $get_single_record=$this->memberRepository->getSingleArticle($id);
            return view('admin.member.view',compact('get_single_record'));
        }catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        //
        try{
            $member = $this->memberRepository->createMember($request);
            return redirect('members')->with('success',AppMessages::MEMBER_CREATED_SUCCESSFULLY);
        } catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try{
            $member=$this->memberRepository->getSingleArticle($id);
            return view('admin.member.edit',compact('member'));

        }catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function show_members(){
        // $data= Member::all()->sortBy('name')->sortBy('designation')->groupBy('designation');
        $query = Member::query() ->orderBy('name', 'asc') ->get()->toArray();
        $data = [];
        // Custom groupBy because of some issue on production
        foreach($query as $member){
            $data[$member['designation']][]=$member;
        }
        // Custom indexing
        $data = [
            "Patron"            =>  $data["Patron"],
            "Editor-in-Chief"   =>  $data["Editor-in-Chief"],
            "Associate Editor"  =>  $data["Associate Editor"],
            "Advisory Board"    =>  $data["Advisory Board"]
        ];
        return view('board',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(MemberRequest $request, $id)
    {
        //
        try{
            $member=$this->memberRepository->updateMember($request,$id);
            return redirect('members')->with('success',AppMessages::MEMBER_UPDATED_SUCCESSFULLY);
            
        }catch(Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
