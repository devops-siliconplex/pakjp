@extends('layouts.master')
@section('page_title', 'Article Tracking')
@section('main-content')
<div class="container">
  <div class="inner-wrapper">
      <div class="content three_quarter">
        <h2>Article Tracking</h2>
        <p>Please input the reference id of the desired article:</p>
        
        <div align="center" style="margin:10px 0px">
          <form name="searchArtStatus" method="post" action="{{ route('oursearch') }}">
            @csrf
            <input type="text" name="msNumber" value="{{ request()->msNumber ?? '' }}" />
            <input type="hidden" name="type" value="article_tracking">
            <input type="submit" name="searchArt" value="search"/>
          </form>
        </div>
        <?php
          if(isset($customFields) && !empty($customFields)){
              $ack_date = $customFields["ack_date"];
              $scanned = $customFields["scanned"];
              $sForMod = $customFields["sForMod"];
              $rAfterMod = $customFields["rAfterMod"];
              $sForEval = $customFields["sForEval"];
              $rAfterEval = $customFields["rAfterEval"];
              $sForRev = $customFields["sForRev"];
              $rAfterRev = $customFields["rAfterRev"];
              $pubDate = $customFields["pubDate"];
              ?>
          <table border="1" class="tracking_table">
            <tr class="titles">
              <td>MsNo</td>
              <td>Date of Acknowledgement</td>
              <td>Scanned</td>
              <td>Sent for Modification</td>
              <td>Received after Modification</td>
              <td>Sent for Evaluation</td>
              <td>Received after Evaluation</td>
              <td>Sent for Revision</td>
              <td>Received after Revision</td>
              <td>Accept \ Reject for Publication</td>
            </tr>
            <tr>
              <td><?php echo $customFields->title;?></td>
              <td><?php echo $ack_date;?></td>
              <td><?php echo $scanned;?></td>
              <td><?php echo $sForMod;?></td>
              <td><?php echo $rAfterMod;?></td>
              <td><?php echo $sForEval;?></td>
              <td><?php echo $rAfterEval;?></td>
              <td><?php echo $sForRev;?></td>
              <td><?php echo $rAfterRev;?></td>
              <td><?php echo $pubDate;?></td>
            </tr>
          </table>
          <?php
              }else{
                echo 'No Result found!';
            }
        ?>
      </div>
    </div>
  </div>
@endsection
