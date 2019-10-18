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
                        <button class="btn btn-primary" id="addsubfield" name="addsubfield"><i class="la la-plus"></i>&nbsp;&nbsp;New Subfield</button>
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
<div id="showSubfieldModal">
    <!-- modal start -->
    <div class="modal" id="modal">
        <center>
            <div class="card" id="subfield-modal-card" >
                <button class="btn" id="subfieldclose-button" style="background-color:transparent;"><i class="la la-close"></i>&nbsp;close</button>
                <div class="alert alert-warning" role="alert" style="display:none;" id="error">
                  <strong>Warning!</strong> there are empty fields
                </div>
               <center>
                    <div class="container" id="subfield-input-container">

                        <!-- field form start -->
                        <form id="subfield_form">
                            {{ csrf_field() }}
                           
                            <div class="row" id="row">
                                 <div class="column">
                                    <input type="hidden" class="form-control"  id="fieldID" name="fieldID" value="{{session()->get('fieldID')}}">
                                </div>
                                <div class="column">            
                                    <input type="text" class="form-control" id="input_subfield_name" name="subfield_name"></br>
                                    <label style="position:relative;">Enter subfield Name</label>
                                </div>

                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                <div class="column">
                                    <input type="text" class="form-control"  id="input_sequence" name="sequence"></br>
                                    <label style="position:relative;">Enter Sequence</label>
                                </div>
                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                <div class="column">
                                   <select class="form-control" name="input_type">
                                    <?php
                                        foreach($InputTypeResult as $value)
                                        {   
                                    ?>
                                        <option  value="<?php echo $value['id']?>"><?php echo $value['Name'] ?></option>
                                    <?php
                                        }   
                                    ?>
                                </select>
                                <label style="position:relative;">Select input type</label>
                                </div>
                            </div>
                             <button type="submit" class="btn btn-primary" id="submit-subfield" name="submit">Add field</button>
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
       $('#load-here').load('/load-subfield');
    })

    //refresh data
    setInterval(function(){
            $('#load-here').load('/load-subfield');
        },3000);
    //#END

    //#END

     //open modal function
        $('#addsubfield').click(function(){
            $('#modal').fadeIn();
        })
        //#END

        //close modal function
         $('#subfieldclose-button').click(function(){
            closeModal();
            resetForm();
        })
         //#END

         //close modal function
        function closeModal(){
            $('#modal').fadeOut();
        }
        //#END

       //  //Ajax inserting start
       $('#subfield_form').on('submit',function(event){
        event.preventDefault();
        var input_subfield = $('#input_subfield_name').val();
        var input_sequence = $('#input_sequence').val();
        
        if (input_subfield != '' &&  input_sequence != '') {
           $('#subfield-input-container').css('border-color','');
            validate(input_subfield,input_sequence);
           $.ajax({
                type: 'POST',
                url: '/view-subfields',
                data:$('#subfield_form').serialize(),
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
            $('#subfield-input-container').css('border-color','red');
            validate(input_subfield,input_sequence);
        }
       });
       // //#END

       //validate form function
       function validate(param1, param2){
        if (param1 == '') {
            $('#input_subfield_name').css('border-color','red');
        }else{
            $('#input_subfield_name').css('border-color','');
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
            $('#subfield_form')[0].reset();
            $('#input_subfield_name').css("border-color",'');
            $('#input_sequence').css("border-color",'');
            $('#error').css("display",'none');
            $('#subfield-input-container').css("border-color",'#ebedf2');
        }
        //#END

});
</script>
@stop