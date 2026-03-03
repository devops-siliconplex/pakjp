@extends('admin.layouts.master')
@section('page_title','Articles Tracking')
@section('main-content')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">@yield('page_title')</h1>
        <a class="btn btn-success pull-right" href="{{url('article_tracking/create')}}">Create</a>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">@yield('page_title')</li>
        </ol>
    </div>
    <div class="page-content fade-in-up">
        @include('admin.layouts.notification_messages')
        <div class="ibox">
            <div class="ibox-body">
                <div class="table-responsive row">
                     <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Acknowledgement Date</th>
                                <th>Scanned</th>
                                <th>Sent for Modification</th>
                                <th>Received after Modification</th>
                                <th>Sent for Evaluation</th>
                                <th>Received after Evaluation</th>
                                <th>Sent for Revision </th>
                                <th>Received after Revision</th>
                                <th>Accept/Reject for Publication</th>
                                <th width="140px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
@endsection
@section('scripts')
<script type="text/javascript">
  $(function () {
            var groupColumn = 0;

    var table = $('.data-table').DataTable({
       
        processing: true,
        serverSide: true,
        ajax: "{{ route('article_tracking.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'ack_date', name: 'ack_date'},
            {data: 'scanned', name: 'scanned'},
            {data: 'sForMod', name: 'sForMod'},
            {data: 'rAfterMod', name: 'rAfterMod'},
            {data: 'sForEval', name: 'sForEval'},
            {data: 'rAfterEval', name: 'rAfterEval'},
            {data: 'sForRev', name: 'sForRev'},
            {data: 'rAfterRev', name: 'rAfterRev'},
            {data: 'pubDate', name: 'pubDate'},
            // {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
@endsection