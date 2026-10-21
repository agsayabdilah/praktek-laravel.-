@extends('admin.layouts.app')

@section('content')
@include('admin.data.table.content')
@endsection

@section('styles')
<link href="{{ asset('admin-assets/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('plugin-scripts')
<script src="{{ asset('admin-assets/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin-assets/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('admin-assets/assets/js/table-datatable.js') }}"></script>
@endsection