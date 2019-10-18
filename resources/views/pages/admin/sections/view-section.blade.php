<div class="card">
    <div class="card-header">
        <div class="card-title">
            <button class="btn btn-primary" id="addsection" name="addSection"><i class="la la-plus"></i>&nbsp;&nbsp;New Section</button>
        </div>
    </div>
    <!--  start load content here -->
     <div class="card-body">
       <div id="load-here">
           
       </div>
    </div>
     <!--#End -->
</div>

@section('css')
<link href="{{ asset('assets/css/custom-css.css') }}" rel="stylesheet">
@stop
 
@section('modal')
<div id="showSectionModal">
    <!-- modal start -->
    <div class="modal" id="modal">
        <center>
            <div class="card" id="section-modal-card" >
                <button class="btn" id="close-button" style="background-color:transparent;"><i class="la la-close"></i>&nbsp;close</button>
                <div class="alert alert-warning" role="alert" style="display:none;" id="error">
                  <strong>Warning!</strong> there are empty fields
                </div>
               <center>
                    <div class="container" id="section-input-container">

                        <!-- section form start -->
                        <form id="section_form">
                            {{ csrf_field() }}
                            <div class="row" id="row">
                                <div class="column">            
                                    <input type="text" class="form-control" id="input_section_name" name="section_name"></br>
                                    <label style="position:relative;">Enter Section Name</label>
                                </div>

                                &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                <div class="column">
                                    <input type="text" class="form-control"  id="input_sequence" name="sequence"></br>
                                    <label style="position:relative;">Enter Sequence</label>
                                </div>
                            </div>
                             <button type="submit" class="btn btn-primary" id="submit-section" name="submit">Add section</button>
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

@section('jquery')
<script type="text/javascript">
    //load file
    window.addEventListener("load",function(){
       $('#load-here').load('/load-section');
    })
    //#END

    //refresh data
    setInterval(function(){
            $('#load-here').load('/load-section');
        },3000);
    //#END


    $(document).ready(function() {

        //Ajax inserting start
       $('#section_form').on('submit',function(event){
        event.preventDefault();
        var input_section = $('#input_section_name').val();
        var input_sequence = $('#input_sequence').val();
        
        if (input_section != '' &&  input_sequence != '') {
           $('#section-input-container').css('border-color','');
            validate(input_section,input_sequence);

           $.ajax({
                type: 'POST',
                url: '/edit-pds',
                data:$('#section_form').serialize(),
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
            $('#section-input-container').css('border-color','red');
            validate(input_section,input_sequence);
        }
       });
       //#END

       //validate form function
       function validate(param1, param2){
        if (param1 == '') {
            $('#input_section_name').css('border-color','red');
        }else{
            $('#input_section_name').css('border-color','');
        }
        if (param2 == '') {
              $('#input_sequence').css('border-color','red');
            
        }else{
            $('#input_sequence').css('border-color','');
        }
       }
       //#END


       //close modal function
        function closeModal(){
            $('#modal').fadeOut();
        }
        //#END

        //reset form function
        function resetForm(){
            $('#section_form')[0].reset();
            $('#input_section_name').css("border-color",'');
            $('#input_sequence').css("border-color",'');
            $('#error').css("display",'none');
            $('#section-input-container').css("border-color",'#ebedf2');
        }
        //#END

        //open modal function
        $('#addsection').click(function(){
            $('#modal').fadeIn();
        })
        //#END

        //close modal function
         $('#close-button').click(function(){
            closeModal();
            resetForm();
        })
         //#END
    });
</script>
@stop