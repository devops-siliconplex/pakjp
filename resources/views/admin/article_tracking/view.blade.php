@extends('admin.layouts.master')
@section('page_title','Article Tracking')
@section('main-content')
<div class="content-wrapper">
<div class="page-heading">
    <h1 class="page-title">@yield('page_title')</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item"><a href="/article_tracking">@yield('page_title')</a></li>
        <li class="breadcrumb-item">View</li>
    </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Title</div>
                            <small class="text-muted">{{ $article->title }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Acknowledgement Date</div>
                            <small class="text-muted">{{ $article->ack_date }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Scanned</div>
                            <small class="text-muted">{{ $article->scanned }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Sent for Modification </div>
                            <small class="text-muted">{{ $article->sForMod }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Received after Modification</div>
                            <small class="text-muted">{{ $article->rAfterMod }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Sent for Evaluation</div>
                            <small class="text-muted">{{ $article->sForEval }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Received after Evaluation </div>
                            <small class="text-muted">{{ $article->rAfterEval }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Sent for Revision</div>
                            <small class="text-muted">{{ $article->sForRev }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Received after Revision:</div>
                            <small class="text-muted">{{ $article->rAfterRev }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Accept/Reject for Publication</div>
                            <small class="text-muted">{{ $article->pubDate }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Created At</div>
                            <small class="text-muted">{{ $article->created_at }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection