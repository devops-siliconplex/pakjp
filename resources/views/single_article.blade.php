@extends('layouts.master')
@section('main-content')
    <div class="container">
        <div class="inner-wrapper">
                <?php
                
                $title = $article->title;
                $atID = $article->id;
                // $atPath =  $article->attachment;
                $fileUrl = $article->attachment;
                $path = explode('/wp-content', $fileUrl);
                $atPath = !empty($path[1]) ? $path[1] : $path[0];
                $pAuthor = $article->author;
                $doi = $article->doi;
                $pKeywords = $article->keywords;
                $artDetail = $article->description;
                $pNum = $article->pages;
                ?>
                <div style="padding:10px 0px 0px 15px">
                    <div style="background:#fff;border-radius:5px;padding:10px 30px 30px;font-size: 13px;">
                        <span class="issues_title"
                            style="text-transform:capitalize;margin-bottom:15px;padding-left:0px; text-align:center; font-size:18px;"><?php echo $title; ?></span>
                        <?php  if($pNum){?>
                        <span><strong>Page No:</strong> <?php echo $pNum; ?></span><br><br>
                        <?php }
            if($pAuthor){?>
                        <span><strong>By:</strong> <?php echo $pAuthor; ?></span><br><br>
                        <?php }
            if($pKeywords){?>
                        <span><strong>Keywords:</strong> <?php echo $pKeywords; ?></span><br><br>
                        <?php } ?>
                        <?php if($doi != null) { ?>
                        <span><strong>DOI : </strong> <?php echo $doi; ?><br>
                            <?php } ?>
                            <?php if($artDetail){ ?>
                            <span>
                                <p><strong>Abstract:</strong> <?php echo $artDetail; ?>
                            </span></p><br>
                            <?php }
            ?>
                            <br />
                            <a href="<?php echo $atPath; ?>"><i>[View Complete Article]</i></a>
                        </span><br>
                    </div>
                </div>
        </div><!-- #content -->
    </div><!-- #primary -->
@endsection
