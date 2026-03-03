@extends('admin.layouts.master')
@section('page_title','Articles')
@section('main-content')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">@yield('page_title')</h1>
        <a class="btn btn-success pull-right" href="{{url('article/create')}}">Create</a>
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
                                <th>Article Number</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Pages</th>
                                <th>Volume</th>
                                <th>Issue</th>
                                <th>Issue Date</th>
                                <th width="100px">Action</th>
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
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }


    var groupColumn = 0;

    var table = $('.data-table').DataTable({
        // columnDefs: [{ visible: false, targets: [groupColumn,1] }],

        // drawCallback: function (settings) {
        //     var api = this.api();
        //     var rows = api.rows({ page: 'current' }).nodes();
        //     var last = null;
 
        //     api
        //         .column(groupColumn, { page: 'current' })
        //         .data()
        //         .each(function (group, i) {
        //             if (last !== group) {
        //                 $(rows)
        //                     .eq(i)
        //                     .before('<tr class="row-group"><td colspan="8">' + group + '</td></tr>');

        //                 last = group;
        //             }
        //         });
        // },
        processing: true,
        serverSide: true,
        ajax: "{{ route('articles.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'article_num', name: 'article_num'},
            {data: 'title', name: 'title'},
            {data: 'author', name: 'author'},
            {data: 'pages', name: 'pages'},
            {data: 'volume', name: 'volume'},
            {data: 'issue', name: 'issue'},
            {data: 'issue_date', name: 'issue_date'},
            // {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });

  
</script>
@endsection