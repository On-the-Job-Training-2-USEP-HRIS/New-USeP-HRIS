@extends('layouts.admin.default')

@section('content')
<div class="content" >
    <!-- Container-Fluid -->
    <div class="container-fluid" id="load-content">

        <h4 class="page-title">Edit PDS</h4>
        <!-- Section area start -->
            @include('pages.admin.sections.view-section',$result);
         <!--/# Section area ends -->
    </div>
    <!-- /# Container-Fluid -->

</div>
@stop   

@section('css')

@stop

@section('js')
@stop

@section('jquery')
<script type="text/javascript">
$(document).ready(function() {

    $('#edit-pds').addClass('active'); // Update Active Tab

    // TOKEN
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

});
</script>
@stop