@extends('layouts.admin.default')

@section('content')
<div class="content" >
    <!-- Container-Fluid -->
    <div class="container-fluid" id="load-content">

        <h4 class="page-title">Edit PDS</h4>
        <!-- field area start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <button class="btn btn-primary" id="addfield" name="addField"><i class="la la-plus"></i>&nbsp;&nbsp;New Field</button>
                    </div>
                </div>
                <!--  start load content here -->
                 <div class="card-body">
                   <div id="load-here">
                       
                   </div>
                </div>
                 <!--#End -->
            </div>
         <!--/# field area ends -->
    </div>
    <!-- /# Container-Fluid -->

</div>
@stop   

@section('css')
<link href="{{ asset('assets/css/custom-css.css') }}" rel="stylesheet">
@stop

@section('modal')
<div id="showFieldModal">
    <!-- modal start -->
    <div class="modal" id="modal">
        <center>
            <div class="card" id="field-modal-card" >
                <button class="btn" id="close-button" style="background-color:transparent;"><i class="la la-close"></i>&nbsp;close</button>
                <div class="alert alert-warning" role="alert" style="display:none;" id="error">
                  <strong>Warning!</strong> there are empty fields
                </div>
               <center>
                    <div class="container" id="field-input-container">

                        <!-- field form start -->
                        <form id="field_form">
                            {{ csrf_field() }}
                           
                            <div class="row" id="row">
                                 <div class="column">
                                    <input type="hidden" class="form-control"  id="sectionID" name="sectionID" value="{{session()->get('sectionID')}}">
                                </div>
                                <div class="column">            
                                    <input type="text" class="form-control" id="input_field_name" name="field_name"></br>
                                    <label style="position:relative;">Enter field Name</label>
                                </div>

                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                <div class="column">
                                    <input type="text" class="form-control"  id="input_sequence" name="sequence"></br>
                                    <label style="position:relative;">Enter Sequence</label>
                                </div>
                            </div>
                             <button type="submit" class="btn btn-primary" id="submit-field" name="submit">Add field</button>
                        </form>
                       <!-- #End -->

                    </div>
               </center>
            </div>
        </center>
    </div>
    <!-- #END -->
</div>
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

     //load file
    window.addEventListener("load",function(){
       $('#load-here').load('/load-field');
    })

    //refresh data
    setInterval(function(){
            $('#load-here').load('/load-field');
        },3000);
    //#END

    //#END

     //open modal function
        $('#addfield').click(function(){
            $('#modal').fadeIn();
        })
        //#END

        //close modal function
         $('#close-button').click(function(){
            closeModal();
            resetForm();
        })
         //#END

         //close modal function
        function closeModal(){
            $('#modal').fadeOut();
        }
        //#END

        //Ajax inserting start
       $('#field_form').on('submit',function(event){
        event.preventDefault();
        var input_field = $('#input_field_name').val();
        var input_sequence = $('#input_sequence').val();
        
        if (input_field != '' &&  input_sequence != '') {
           $('#field-input-container').css('border-color','');
            validate(input_field,input_sequence);
           $.ajax({
                type: 'POST',
                url: '/view-fields',
                data:$('#field_form').serialize(),
                success: function(data){
                    resetForm();
                    closeModal();
                },
                error: function(data){
                    resetForm();
                    closeModal();
                }
            }); 

        }else{
            $('#field-input-container').css('border-color','red');
            validate(input_field,input_sequence);
        }
       });
       //#END

       //validate form function
       function validate(param1, param2){
        if (param1 == '') {
            $('#input_field_name').css('border-color','red');
        }else{
            $('#input_field_name').css('border-color','');
        }
        if (param2 == '') {
              $('#input_sequence').css('border-color','red');
            
        }else{
            $('#input_sequence').css('border-color','');
        }
       }
       //#END

        //reset form function
        function resetForm(){
            $('#field_form')[0].reset();
            $('#input_field_name').css("border-color",'');
            $('#input_sequence').css("border-color",'');
            $('#error').css("display",'none');
            $('#field-input-container').css("border-color",'#ebedf2');
        }
        //#END

});
</script>
@stop