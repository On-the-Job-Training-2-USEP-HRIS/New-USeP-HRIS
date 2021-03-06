@extends('layouts.admin.default')

@section('content')
<div class="content">

    <!-- Container-Fluid -->
    <div class="container-fluid">

        <!-- Tab Container -->
        <div class="row tab-container">

            <!--
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 tab-menu">
                <div class="list-group"> </div>                
            </div>            
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 tab section"> </div>
            -->

            <!-- Tab Menu -->
            <div class="col-3 tab-menu position-fixed" style="overflow-y: visible;">
                <div class="list-group">
                    <!-- (Javascript) -->
                </div>                
            </div>
            <!-- /# Tab Menu -->
            
            <!-- /# Tab Content -->
            <div class="col-8 tab section" style="margin-left:30%">    
                <!-- (Javascript) -->
            </div>
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
<script src="{{ asset('ajax/pds-view.js') }}"></script> <!-- Create PDS -->
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
});
</script>
@stop