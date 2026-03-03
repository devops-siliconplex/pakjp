<script src="{{ url('admin/assets/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('admin/assets/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ url('admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ url('admin/assets/vendors/metisMenu/dist/metisMenu.min.js') }}"></script>
<script src="{{ url('admin/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('admin/assets/vendors/jquery-idletimer/dist/idle-timer.min.js') }}"></script>
<script src="{{ url('admin/assets/vendors/toastr/toastr.min.js') }}"></script>
<script src="{{ url('admin/assets/vendors/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ url('admin/assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/dataTables/datatables.min.js')}}"></script>
<script src="{{ asset('') }}admin/assets/customJs/datatableEngine.js"></script>
<script src="{{asset('')}}admin/assets/admin/js/scripts/dataTables.buttons.min.js"></script>
<script src="{{asset('')}}admin/assets/admin/js/scripts/dataTables.fixedColumns.min.js"></script>
<!-- PAGE LEVEL PLUGINS-->
<!-- CORE SCRIPTS-->
<script src="{{ url('admin/assets/js/app.min.js') }}"></script>
<script>
     $(document).ready(function() {
            $('.alert-msg').fadeOut(5000); // 5 seconds x 1000 milisec = 5000 milisec
        });
</script>
@yield('scripts')