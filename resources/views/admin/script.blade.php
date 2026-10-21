<!-- Bootstrap bundle JS -->
<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('admin/js/pace.min.js') }}"></script>
@stack('plugin-scripts')
<!--app-->
<script src="{{ asset('admin/js/app.js') }}"></script>
@stack('scripts')