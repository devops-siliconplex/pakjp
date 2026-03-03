@extends('layouts.master')
@section('page_title', 'Contact Us')
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
                                    <h2 class="entry-title">Contact Us</h2>
                                </header><!-- .entry-header -->

                                <div class="entry-content">

                                    <p><strong>Editor-in-Chief :</strong> <br>Faiyaz HM Vaid<br>Faculty of Pharmacy and
                                        Pharmaceutical Sciences,<br>University of Karachi, Karachi, Pakistan
                                        <br><br><strong>Editorial Office :</strong> <br>Faculty of Pharmacy and
                                        Pharmaceutical Sciences,<br>University of Karachi,<br>Karachi-75270, Pakistan.
                                        <br><br><strong>Email :</strong> <br><a
                                            href="mailto:pj_pharmacology@yahoo.com">pj_pharmacology@yahoo.com</a><br><a
                                            href="mailto:pjp@uok.edu.pk">pjp@uok.edu.pk</a> <br><br><strong>Website
                                            :</strong> <br>{{ url("/") }} </p>
                                </div><!-- .entry-content -->

                            </div>
                        </div>

                    </article><!-- #post-## -->

                </main><!-- #main -->
            </div><!-- #primary -->

            @include('layouts.sidebar')

        </div><!-- .inner-wrapper -->
    </div>
@endsection
