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
                                

                                <h2>Authorship Criteria: </h2>
                                <p>All authors should have made substantial contributions to all of the following:
                                    <br>
                                    1.The conception and design of the study, or acquisition of data, or analysis and interpretation of
                                    data.
                                    <br>
                                    2. Drafting the article or revising it critically for important intellectual content.
                                    <br>
                                    3. Final approval of the version to be submitted.
                                    <br>
                                    4. Accountable for all aspects of the work and guarantees that queries related to the accuracy or
                                    integrity of any part of the work will be appropriately resolved and investigated.
                                    <br>
                                    5.A corresponding author should be appointed by the author(s) to deal with the journal's editorial
                                    procedures. All authors should be accountable for all aspects of the work so that the data accuracy and
                                    integrity can be assured and appropriately investigated and resolved if questioned.
                
                                </p>
                                <br>
                                <p>
                                    In addition to being accountable for the parts of the work he or she has done; an author should be able
                                    to identify which co-authors are responsible for specific other parts of the work and should have
                                    confidence in the integrity of the contributions of their co-authors. Moreover, the authors must provide
                                    all relevant affiliations to authenticate where the research work/project was
                                    approved/supported/conducted. For non-research articles, authors must provide their current
                                    institutional affiliation. In cases where an author joins a different institution after the article is
                                    published, they should mention the affiliation where the work was performed, along with their current
                                    affiliation and contact details, in the acknowledgment section. Change of affiliation alone is not a
                                    valid reason to remove an author from a publication if he or she meets the authorship criteria.
                
                
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