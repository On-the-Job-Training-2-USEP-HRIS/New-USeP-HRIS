@extends('layouts.default.default')

@section('content')
<div class="content">

    <!-- Container-Fluid -->
    <div class="container-fluid">

        <!-- Tab Container -->
        <div class="row tab-container">

            <!-- Tab Menu -->
            <div class="col-3 tab-menu position-fixed" style="overflow-y: visible;">
                <div class="list-group">
                    <!-- (Javascript) -->
                </div>
            </div>
            <!-- /# Tab Menu -->

            <!-- /# Tab Content -->
            <form class="col-8 form-content" style="margin-left:30%">
                <div class="tab section">
                    <!-- (Javascript) -->
                </div>
            </form>
            <!-- /# Tab Content -->

        </div>
        <!-- /# Row -->

    </div>
    <!-- /# Container-Fluid -->

</div>
@stop

@section('css')
<link href="{{ asset('pds-tab/style.css') }}" rel="stylesheet"> <!-- PDS-Tab CSS -->
@stop

@section('js')
<script src="{{ asset('pds-tab/side-tab.js') }}"></script> <!-- InitSideTab -->
<script src="{{ asset('ajax/pds-create.js') }}"></script> <!-- Create PDS -->
<script src="{{ asset('ajax/pds-view.js') }}"></script> <!-- View PDS -->
<script src="{{ asset('ajax/pds-search-user.js') }}"></script> <!-- Search User | KeyUp -->
@stop

@section('jquery')
<script type="text/javascript">
$(document).ready(function() {

    $('#view-pds').addClass('active'); // Update Active Tab

    // TOKEN
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    ViewPdsTemplate("{{ action('DatabasePDS@GetPdsTemplate') }}"); // Display PDS @ pds-view.js

    // InitKeyUp('{{ action('DatabaseUsers@SearchUser') }}', '#lname', '#fname', '#mname'); // Search User | KeyUp
});
</script>
@stop