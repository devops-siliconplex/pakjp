@extends('admin.layouts.master')
@section('page_title','Article')
@section('main-content')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">@yield('page_title')</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item"> <a href="/articles"> @yield('page_title')</a></li>
            <li class="breadcrumb-item">Create</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        @include('admin.layouts.notification_messages')
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                   @include('admin.article.form')
                   <div class="ibox-footer">
                        <button class="btn btn-primary mr-2" type="submit">Submit</button>
                        {{-- <button class="btn btn-outline-secondary" type="reset">Cancel</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
@endsection

