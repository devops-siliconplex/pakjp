@extends('layouts.master')
@section('page_title', 'Information For Authors')

@section('main-content')
<style>
    /* h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    unicode-bidi: isolate;
} */
</style>
<div class="container">
    <div class="inner-wrapper">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <article class="post page type-page status-publish hentry">
                    <div class="content-wrap">
                        <div class="content-wrap-inner">

                            <header class="entry-header">
                                <h2 class="entry-title">Appeal against the Editorial Decision:</h2>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p>Submissions may be rejected at the internal peer review stage without external review, accompanied by a statement of rejection. Usually, these decisions are not qualified for appeal. However, authors who believe that their manuscript lies within the scope and the guidelines were followed, and the article was rejected due to a misunderstanding or a decision that did not follow journal policies, may appeal the decision by sending the editor a comprehensive, detailed response to the rejection letter by email (pakjps@hotmail.com). Appeals against editorial decisions should be directed to the Editor-in-Chief initially. Appeals will be considered by at least two editors. Authors should note that this process may require additional time if internal and/or external reviews are needed. The appeal can be done only once.</p>
                                <p><strong>Appeal against Misconduct</strong><br> Individuals involved in research misconduct (as defined in the publication misconduct section on the PAKJP website) will have the right to appeal the decision. The appeals will be handled fairly and without bias.
                                </p>
                                <p><strong>Appeal against Complaint</strong></p>
                                <p style="    text-align: center;width: 85%;margin: 20px auto;">“There is a provision to file an appeal if the complainant is not satisfied with the committee's resolution. Within 3 months of obtaining the committee's judgment, written appeals must be lodged. The appeal should include all supporting documentation, including additional facts or information, as well as a clear explanation of the reasons for disagreement. A separate body, comprising two editors, will evaluate appeals, and its decision shall be deemed final.”</p>
                                
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