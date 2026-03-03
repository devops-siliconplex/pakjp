@extends('admin.layouts.master')
@section('page_title','Article')
@section('main-content')
<div class="content-wrapper">
<div class="page-heading">
    <h1 class="page-title">@yield('page_title')</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item"><a href="/articles">@yield('page_title')</a></li>
        <li class="breadcrumb-item">View</li>
    </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Article Number</div>
                            <small class="text-muted">{{ $article->article_num }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Title</div>
                            <small class="text-muted">{{ $article->title }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Description</div>
                            <small class="text-muted">{{ $article->description }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Author</div>
                            <small class="text-muted">{{ $article->author }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Pages</div>
                            <small class="text-muted">{{ $article->pages }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">DOI</div>
                            <small class="text-muted">{{ $article->doi }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Keywords</div>
                            <small class="text-muted">{{ $article->keywords }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Volume</div>
                            <small class="text-muted">{{ $article->volume }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Issue</div>
                            <small class="text-muted">{{ $article->issue }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Issue Date:</div>
                            <small class="text-muted">{{ $article->issue_date }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Article Type</div>
                            @if ($article->type == 0)
                                <small class="text-muted"> {{ __('Regular') }}</small>
                            @elseif($article->type == 1)
                                <small class="text-muted"> {{ __('Supplementary') }}</small>
                            @elseif($article->type == 2)
                                <small class="text-muted"> {{ __('Special') }}</small>
                            @endif
                            {{-- {{ $article->type } --}}
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="flex-1">
                            <div class="media-heading">Supplementary Issue</div>
                            <small class="text-muted">{{ $article->sup_issue }}</small>
                        </div>
                    </div>
                    @if(!empty($article->attachment))
                        <div class="col-md-6 mb-4">
                            <div class="flex-1">
                                <div class="media-heading">File</div>
                                <small class="text-muted"> <a target="_blank" href="{{ url($article->attachment) }}">Click Here</a></small>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection