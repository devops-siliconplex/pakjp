@extends('layouts.master')
@section('page_title', 'Home')
@section('main-content')
<div class="container">
    <div class="inner-wrapper">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <article class="default-main-height page type-page status-publish hentry">
                    <div class="entry-head">
                    </div>

                    <div class="content-wrap">
                        <div class="content-wrap-inner">

                            <header class="entry-header">
                            <h2 class="entry-title">Welcome</h2> </header><!-- .entry-header -->
                            <div class="entry-content">
                                <p>The Pakistan Journal of Pharmacology (ISSN 0255-7088) is
                                    published bi-annually in January and July on behalf of Faculty of
                                    Pharmacy and Pharmaceutical Sciences, University of Karachi,
                                    Karachi, Pakistan. The Journal is recognized by PMDC, WHO, ISSN and
                                    it is indexed in MEDLID, PAKISTAN ABSTRACT, CHEMICAL ABSTRACTS. All
                                    correspondence should be made to Editor-in-Chief. The Pakistan
                                    Journal of Pharmacology (ISSN 0255-7088) is published bi-annually
                                    in January and July on behalf of Faculty of Pharmacy and
                                    Pharmaceutical Sciences, University of Karachi, Karachi, Pakistan.</p>
                                <p>All correspondence should be made to Editor-in-Chief.</p>

                                <p><strong>Editor-in-Chief:</strong><br>Muhammad Harris Shoaib<br>Faculty of
                                    Pharmacy and Pharmaceutical Sciences,<br>University of Karachi,
                                    Karachi, Pakistan </p>
                            </div><!-- .entry-content --> 
                        </div>
                    </div>

                </article><!-- #post-## -->

            </main><!-- #main -->
        </div><!-- #primary -->
        @include('layouts.sidebar')
    </div><!-- .inner-wrapper -->
</div><!-- .container -->
@endsection
