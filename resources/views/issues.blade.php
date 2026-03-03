@extends('layouts.master')
@section('main-content')
    @php
        if ($type == 'current') {
            $message1 =
                'Following is the list of all articles published in the current issue. Click on the article to view it.';
            $message2 = 'If you wish to see articles in the previous issues ';
            $link = url('/previous-issues');
            $title = 'Current Issue';
        } elseif ($type == 'previous') {
            $message1 =
                'Following is the list of all articles published in the previous issues. Click on the article to view it.';
            $message2 = 'If you wish to browse articles from a specific issue ';
            $link = url('/search-article');
            $title = 'Previous Issue';
        }

    @endphp
@section('page_title', $title)

<div class="container">
    <div class="inner-wrapper">
        <div id="main-content" style="width:976px">
            <div id="main-inner" style="padding:10px 15px;width:946px">

                <p> {{ $message1 }} </p>
                <p> {{ $message2 }} <a href="{{ $link }}" target="_top" style="text-decoration:none">Click
                        Here.</a>
                </p>
                <?php
                
                //     $volume = $wpdb->get_var("SELECT MAX(volume) FROM wp_article where type=0 AND is_active = 1 ");
                //   $issue = $wpdb->get_var("SELECT MAX(issue) FROM wp_article where volume =".$volume . " AND type=0 AND is_active = 1 ");
                //   $articles = $wpdb->get_results("SELECT * FROM wp_article WHERE volume = ".$volume." AND issue = ".$issue ." AND is_active = 1 AND type=0 order by article_num");
                if (isset($volume)) {
                    echo '<span class="issues_title">Volume : ' . $volume . ', Issue : ' . $issue . ',' . date('M  Y', strtotime($articles[0]->issue_date)) . '</span>';
                }
                
                ?>
                <ul class="latest-article" style="padding:0px">
                    <?php for($i=0; $i< count($articles); $i++){

		$title = $articles[$i]->title;
		
		$atID  = $articles[$i]->id;
		
		$doi = $articles[$i]->doi;
        
        $fileUrl = $articles[$i]->attachment;
		$path = explode('/wp-content',$fileUrl);
        $atPath = !empty($path[1])?$path[1]:$path[0];

        $pAuthor = $articles[$i]->author;

		$pNum = $articles[$i]->pages;
		//echo $title." === " . $atID ."====" . $atPath . "======" . $pAuthor ." ===== ".$pNum;
		?>
                    <li style="margin:10px 0px;">
                        <div style="float:left;margin:0px 10px;height:100%"> <strong> <?php echo $i + 1; ?>.</strong>
                        </div>
                        <div style="float:left;width:95%"> <a href="<?php echo $atPath; ?>"> <?php echo $title; ?></a><br>
                            <?php if($doi != null) { ?>
                            <div style="float:left;width:95%"> DOI : <span>
                                    <?php echo $doi; ?></span><br><?php } ?>
                                <?php  if($pNum){?>
                                <span>Page No: <?php echo $pNum; ?></span><br>
                                <?php }
                        if($pAuthor){?>
                                <span>By: <?php echo $pAuthor; ?></span><br>
                                <?php }?>
                                <span><a href="{{ url('single-article') . '?id=' . $atID }}"><i>[View
                                            Abstract]</i></a>&nbsp;
                                    <a href="<?php echo $atPath; ?>"><i>[View Complete Article]</i></a> </span><br>
                            </div>
                            <div style="clear:both"></div>
                    </li>
                    <?php 
            }
        ?>
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection
