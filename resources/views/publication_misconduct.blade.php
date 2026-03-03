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

                            {{-- <header class="entry-header">
                                <h2 class="entry-title">Peer Review Guidelines</h2>
                            </header><!-- .entry-header --> --}}

                            <div class="entry-content">
  
                                <h2>Publication Misconduct:</h2>
                                <p>To uphold the standards of academic publishing, the Pakistan Journal of Pharmaceutical Sciences (PJPS)
                                    makes every effort to ensure high standards of publication ethics and follows the
                                    <a
                                        href="https://www.icmje.org/recommendations/browse/publishing-and-editorial-issues/scientific-misconduct-expressions-of-concern-and-retraction.html">ICMJE
                                        </a>
                                            and 
                                          <a
                                        href="https://publicationethics.org/guidance?f%5B0%5D=type%3A21">
                                        COPE Guidelines</a>.
                                    Publication Misconduct refers to inappropriate or unacceptable behavior in publishing articles. It can
                                    include plagiarism, fabrication, falsification, inappropriate authorship, duplicate submissions,
                                    overlapping publication, and salami publication. PJPS takes all the necessary actions to protect the
                                    integrity of the original data.
                                </p>
                
                                <p> <strong>Plagiarism </strong> <br>
                                Plagiarism is an unauthorized use of another person's words, ideas, data, statistics, images, research
                                    techniques, or other materials (conference proceedings, seminar presentation, project reports,
                                    dissertation, research proposal/synopsis, published/unpublished data, grey literature, etc.), without
                                    giving due acknowledgment and proper citation.
                                </p>
                
                                <p>Policy of the Journal: <br>
                                  • The Journal uses Turnitin for Plagiarism checking once an article is submitted. The plagiarism report of 19% or below is acceptable.
                                    <br>
                                    • Articles having Plagiarism above 19% will be rejected.
                                    <br>
                                    • The journal discourages excessive self-citations by authors too.
                                </p>
                
                                <p><strong>Fabrication</strong><br>
                                   Fabrication refers to the act of creating data or outcomes without conducting the necessary investigation or analysis.
                                </p>
                                <p>Policy of the Journal:<br>
                                    • Retraction of the paper is to be done by the author once the data fabrication has been proven.<br>
                                    • The Journal encourages data repositories to ensure data is not fabricated.
                                    <br>
                                    • To assist the Journal with manuscript evaluation, authors are expected to retain all raw data
                                    represented in their manuscripts.
                                    <br>
                                    • If the original data cannot be produced on request, acceptance of a manuscript or published paper may
                                    be declined.
                
                                </p>
                                <p><strong>Falsification</strong><br>
                                   The deliberate manipulation of data or outcomes to lead to an inaccurate conclusion is known as falsification.
                                </p>
                                <p>Policy of the Journal: <br>
                                    • The journal will either reject the manuscript or ask the author to withdraw it.
                                    <br>
                                  • If falsification of data is proved, the journal will not accept the manuscripts of the same author for a year.
                
                                </p>
                
                                <p> <strong>Inappropriate Authorship</strong> <br>
                                    According to the author's actual contributions, authorship is not accurately ascribed.
                                </p>
                
                                <p>Policy of the Journal: <br>
                                    • Removal of the name of the author that doesn’t line up with the author’s contribution criteria of the Journal (as described on the PJPS website).
                                </p>
                                <p><strong>Duplicate Submissions</strong> <br>
                                   The practice of submitting the same manuscript, or multiple manuscripts with slight variations (such as differences in the title, keywords, abstract, author order, author affiliations, or a small amount of text), to two or more journals simultaneously, or submitting to another journal within a predetermined window of time, is known as duplicate submission or multiple submissions.
                                </p>
                                <p>Policy of the Journal: <br>
                                    • Upon confirmation of the duplicate submission, the journal will reject the manuscript.
                                    <br>
                                    • Once the duplicate submission is confirmed, the journal (PJPS) will notify the author about the duplicate submission to the journal where the article was originally published
                                    <br>
                                    •  Upon verifying any misconduct, the journal will notify the Author’s affiliated Institute about the misconduct of the author(s).
                                </p>
                
                                <p><strong>Overlapping Publication</strong> <br>
                                    The act of publishing a paper that considerably overlaps with one that has previously been published is known as "overlapping publication."
                                </p>
                
                                <p>Policy of the Journal: <br>
                                   • Upon confirmation of the overlapping data the journal will reject the manuscript or request the author to withdraw it.
                                </p>
                
                                <p><strong>Salami Publication</strong> <br>
                                  The term "salami publication" refers to the process of publishing data from two or more studies that address the same population, techniques, and questions, after dividing a major study's data into separate portions that could have been presented in a single paper.
                                </p>
                
                                <p>Policy of the Journal: <br>
                                 •	The Journal discourages the submission of salami publications and does not approve manuscripts that are based on it.
                
                
                                </p>
                
                                <p><strong>Image Manipulation</strong> <br>
                                    When a conscious effort has been made to manipulate or create a picture incorrectly. It is forbidden to alter, conceal, relocate, remove, or add specific characteristics to an image without providing sufficient notice of the change. This is a significant form of misconduct since it is intended to deceive people and compromise the credibility of academic research, both of which have far-reaching and permanent repercussions.
                                </p>
                                <p>Policy of the Journal: <br>
                                    •	The journal will reject or revoke acceptance of a manuscript if the original, unedited photographs are not provided when requested.                    
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