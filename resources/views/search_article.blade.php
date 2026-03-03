@extends('layouts.master')
@section('page_title', 'Article Tracking')
@section('main-content')
<style>
  select{
    width:200px;
  }
  </style>
    <div class="container">
        <div class="inner-wrapper">
            <div class="content three_quarter">
                <p> Pakistan Journal of Pharmaceutical Sciences spans over multiple volumes. Please select your<br />
                    desired volume from the following list: </p>
                <p align="center">
                    <select name="volumelist" onchange="javascript:getSubIssues(this)" id="volumelist">
                        <option value="-1">Select Volume</option>
                        <?php
                        $type = 0;
                        if (isset($_GET['type'])) {
                            $type = $_GET['type'];
                        }
                        // $volume = $wpdb->get_results("SELECT DISTINCT(volume) FROM wp_article Where type=".$type." ORDER BY volume;");
                        $volume = App\Models\WpArticle::select(DB::raw('DISTINCT(volume)'))->where('type', $type)->orderBy('volume')->get();
                        for ($i = 0; $i < count($volume); $i++) {
                            echo "<option value='" . $volume[$i]->volume . "'> Volume : " . $volume[$i]->volume . '</option>';
                        }
                        ?>
                    </select>
                    &nbsp;
                    <select  name="issuelist" onchange="javascript:getArticle()" id="issuelist" style="display:none">
                    </select>
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                </p>
                <div id="searchArt" style="padding:10px 7px"></div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript">
        function GetURLParameter(sParam) {
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++) {
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == sParam) {
                    return sParameterName[1];
                }
            }
        }

        function getSubIssues(e) {
            var type = "";
            if (GetURLParameter("type") != undefined)
                type = "&type=" + GetURLParameter("type");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                dataType: 'text',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('implement-ajax') }}",
                data: "action=my_special_ajax_call&volumeID=" + $(e).val() + type
            }).done(function(msg) {
                //$("#searchArt").html(msg);
                $("#issuelist").css({
                    "display": ""
                });
                $("#issuelist").html(msg);
            });
        }

        function getArticle() {
            $("body").css({
                background: "#ffe"
            });
            var type = "";
            if (GetURLParameter("type") != undefined)
                type = "&type=" + GetURLParameter("type");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                dataType: 'text',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('implement-ajax') }}",
                data: "action=my_special_ajax_call&volumeID=" + $("#volumelist").val() + "&issue=" + $("#issuelist")
                    .val() + type
            }).done(function(msg) {
                $("#searchArt").html(msg);
            });
        }
    </script>
@endsection
