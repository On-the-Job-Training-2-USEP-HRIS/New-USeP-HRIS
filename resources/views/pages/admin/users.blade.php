@extends('layouts.admin.default')

@section('content')
<div class="content">

    <!-- Container-Fluid -->
    <div class="container-fluid">

        <!-- Card -->
        <div class="card table-responsive">

            <!-- Card-Header -->
            <div class="card-header">
                <div class="card-title">Users</div>
            </div>
            <!-- /# Card-Header -->

            <!-- Card-Body -->
            <div class="card-body">

                <!-- Begin # Table -->
                <table id="table" class="table table-bordered table-hover" style="width:100%">

                    <!-- Begin # T-head -->
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Action</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                        </tr>
                    </thead>
                    <!-- /# T-head -->

                    <tbody>
                        <!-- TBODY -->
                    </tbody>

                </table>
                <!-- /# Table -->

            </div>
            <!-- /# Card-Body -->

        </div>
        <!-- /# Card -->

    </div>
    <!-- /# Container-Fluid -->

</div>
@stop

@section('css')
<!-- <link href="{{ asset('data-table/css/bootstrap.css') }}" rel="stylesheet"> -->
<link href="{{ asset('data-table/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@stop

@section('js')
<script src="{{ asset('data-table/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('data-table/js/dataTables.bootstrap4.min.js') }}"></script>
@stop

@section('jquery')

<script type="text/javascript">
$(document).ready(function() {

    $('#users').addClass('active'); // Update Active Tab

    // TOKEN
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // DataTable
    $('#table').DataTable({

        "processing": true,
        "ajax": {
            "url": "{{ action('DatabaseUsers@GetUsers') }}",
            "type": "POST",
            dataSrc: ''
        },
        "columns": [{
                "data": "id",
                "targets": 0,
                "visible": false
            },
            {
                "data": "Action",
                "render": function(data, type, row, meta) {
                    return '<a href="#"> Open </>';
                }
            },
            {
                "data": "FirstName"
            },
            {
                "data": "MiddleName"
            },
            {
                "data": "LastName"
            }
        ]

    });

});
</script>
@stop