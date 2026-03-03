@extends('layouts.master')
@section('main-content')
    <div id="main-content" style="width:976px">
        <div id="main-inner" style="padding:10px 15px;width:946px">
            <p><?php // echo 'nahi diaa acha ????';
            ?></p>
            <p><?php //echo $_POST['oursearch'] ;
            ?></p>
            <p> Following is the list of all articles published in all issues with the word
                <b><u><?php echo $_POST['oursearch']; ?></u></b>. Click on the article to view it.
            </p>
            <!-- <p> If you wish to see articles in the previous issues <a href=""" target="_top" style="text-decoration:none">Click Here.</a> </p>-->
            <?php
            ?>
            <ul class="latest-article" style="padding:0px">
                
            <?php for($i=0; $i < count($articles); $i++){

		$title = $articles[$i]->title;
        
        if($articles[$i]->attachment && isset($articles[$i]->attachment)){
    		// $atPath = $articles[$i]->attachment;
            $fileUrl = $articles[$i]->attachment;
            $path = explode('/wp-content',$fileUrl);
            $atPath = !empty($path[1])?$path[1]:$path[0];
        }
        // if($atPath[0] == '.'){
        //     $atPath = str_replace('..', 'http://localhost/pjps', $atPath);
        // }
        $pAuthor = $articles[$i]->author;
				
		$doi = $articles[$i]->doi;

		$pNum = $articles[$i]->pages;
                ?>
                <li style="margin:10px 0px;">
                    <div style="float:left;margin:0px 10px;height:100%"> <strong> <?php echo $i + 1; ?>.</strong></div>
                    <div style="float:left;width:95%"> <a href="{{ $atPath ?? '#' }}"> <?php echo $title; ?></a><br>
                        <?php if($doi != null) { ?><div style="float:left;width:95%"> DOI : <a href="<?php echo $doi; ?>">
                                <?php echo $doi; ?></a><br><?php } ?>
                            <?php if($pNum){?>
                            <span>Page No: <?php echo $pNum; ?></span><br>
                            <?php }
                        if($pAuthor){?>
                            <span>By: <?php echo $pAuthor; ?></span><br>
                            <?php }?>
                            <span><a href="{{ url('single-article').'?id='.$articles[$i]->id }}"><i>[View Abstract]</i></a>&nbsp; <a href="{{ $atPath ?? '#' }}"><i>[View Complete
                                        Article]</i></a> </span><br>
                        </div>
                        <div style="clear:both"></div>
                </li>
                <?php 
        }
	  ?>
            </ul>
        </div>
    </div>
@endsection
