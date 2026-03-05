@extends('layouts.master')
@section('page_title', 'Information For Authors')

@section('main-content')
<div class="container">
    <div class="inner-wrapper">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <article class="post page type-page status-publish hentry">
                    <div class="content-wrap">
                        <div class="content-wrap-inner">
                            
                            <div class="entry-content">
                                <h2>Advertising Policy</h2>
                                <p>
                                    The Pakistan Journal of Pharmaceutical Sciences (PJPS) maintains a strict
                                    no-advertising policy across all print and digital platorms. To uphold the highest standards of editorial
                                    independence, all content is curated and published exclusively for scholarly advancement, remaining
                                    entirely free from commercial influence.
                                </p>
                                
                            </div><!-- .entry-content -->
                        </div>
                    </div>
                </article>

            </main>
        </div>

        @include('layouts.sidebar')

    </div>
</div>
@endsection