@extends('layouts.admin.default')

@section('content')
<div class="content">

    <!-- Container-Fluid -->
    <div class="container-fluid">

        <h4 class="page-title">Users</h4>
        
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

    $('#users').addClass('active'); // Update Active Tab

    // TOKEN
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

});
</script>
@stop