@extends('layouts.admin.default')

@section('content')
<div class="content">

    <!-- Container-Fluid -->
    <div class="container-fluid">

        <h4 class="page-title">View PDS</h4>

        <!-- Row -->
        <div class="row">

            <!-- Begin # Container -->
            <div class="col" id="sectionCon">

                <!-- Begin # PDSForm -->
                <form id="pdsform" name="pdsform" action="/PDSForm" method="POST" style="height: auto;">

                    <!-- Begin # PHP -->
                    <?php
                        $section = "";
                        $field = "";
                        echo "<br><br>";
                        foreach($result as $value) {
                            if($section == '') {
                                $section = $value['Section Name'];
                                echo '<a class="tabs" href="#" onclick="divClick(' ."'". $section . "'" . ')" style="border: 1px solid black; width: 100px; text-align: center; height: 20px; overflow: hidden; padding: 0px 10px; margin: 5px 5px; display: inline-block;"><div id="tabDiv" 
                                >' . $value['Section Name'] . '</div></a>';
                            } else if($section != $value['Section Name']) {
                                $section = $value['Section Name'];
                                echo '<a class="tabs" href="#" onclick="divClick(' ."'". $section . "'" . ')" style="border: 1px solid black; width: 100px; text-align: center; height: 20px; overflow: hidden; padding: 0px 10px; margin: 5px 5px; display: inline-block;" ><div id="tabDiv"
                                >' . $value['Section Name'] . '</div></a>';							
                            }
                        }

                        $section = "";
                        $field = "";
                        
                        foreach($result as $value){						
                            if($section == '') {
                                $section = $value['Section Name'];
                                echo "<div class='section' id='" . $section . "' style=' display: none'>";
                                echo "<hr><h5>" . $section . "</h5>";
                            } else if($section != $value['Section Name']) {
                                echo '</div>';
                                $section = $value['Section Name'];
                                echo '<div class="section" id="' . $section . '" style=" display: none">';
                                echo "<hr><h5>" . $section . "</h5>";
                            }
        
                            if($field != $value['Field Name']){
                                $field = $value['Field Name'];

                                if($field != NULL){ 
                                    if($field != $value['Subfield Name']){
                                        echo "<br><br><h6>" . $field . ":</h6>" . $value['Subfield Name'] . " ";
                                    } else if ($field == $value['Subfield Name']){
                                        echo "<br><br>" . $field . ": ";
                                    }
                                }
                                
                                if($value['InputType Name'] != NULL){
                                    echo "<input name='". $value['FieldSubfield Id'] .  "[]' value='" . $value['InputGroup Id'] . "' type='hidden'>  ";
                                    echo "<input name='". $value['FieldSubfield Id'] .  "[]' value='" . $value['FieldSubfield Id'] . "' type='hidden'>  ";
                                    if ($value['InputType Name'] != NULL && $value['InputType Name'] == "PDF" or $value['InputType Name'] == "Image"){
                                        echo "<input type='file' name='". $value['FieldSubfield Id'] .  "[]' >  ";
                                    } else if($value['InputType Name'] != NULL && $value['InputType Name'] == "Checkbox"){
                                        echo "<input class='". $value['Field Id'] ."' type='checkbox' name='". $value['FieldSubfield Id'] .  "[]' onclick='clickEvent(this)'>  ";
                                    } else {
                                        
                                        // START - For Searching ------------------------------------------------------------------------------------------------------------------------->>
                                        if ($value['FieldSubfield Id'] == '1'){
                                            echo "<input type='" . $value['InputType Name'] . "' name='". $value['FieldSubfield Id'] .  "[]' id='lname'> 1";    
                                        }
                                        // END - For Searching --------------------------------------------------------------------------------------------------------------------------->>
                                        else {
                                            echo "<input type='" . $value['InputType Name'] . "' name='". $value['FieldSubfield Id'] .  "[]' >";
                                        }    
                                        
                                    }
                                }  
                        
                            } else {
                                if($value['Subfield Name'] != NULL){
                                    echo "<input name='". $value['FieldSubfield Id'] .  "[]' value='" . $value['InputGroup Id'] . "' type='hidden'>  ";
                                    echo "<input name='". $value['FieldSubfield Id'] .  "[]' value='" . $value['FieldSubfield Id'] . "' type='hidden'>  ";
                                    if($value['InputType Name'] != NULL && $value['InputType Name'] == "PDF" or $value['InputType Name'] == "Image"){
                                        echo "<input type='file' name='". $value['FieldSubfield Id'] . "[]' >  ";
                                    } else if($value['InputType Name'] != NULL && $value['InputType Name'] == "Checkbox"){
                                        echo $value['Subfield Name'] . " " . "<input class='". $value['Field Id'] ."' type='checkbox' name='". $value['FieldSubfield Id'] .  "[]' onclick='clickEvent(this)'>  ";
                                    } else {
                                        
                                        // START - For Searching ------------------------------------------------------------------------------------------------------------------------->>
                                        if ($value['FieldSubfield Id'] == '2'){
                                            echo $value['Subfield Name'] . " " . "<input type='" . $value['InputType Name'] . "' name='". $value['FieldSubfield Id'] .  "[]' id='fname'> 2";    
                                        } else if ($value['FieldSubfield Id'] == '3'){
                                            echo $value['Subfield Name'] . " " . "<input type='" . $value['InputType Name'] . "' name='". $value['FieldSubfield Id'] .  "[]' id='mname'> 3";
                                        // END - For Searching --------------------------------------------------------------------------------------------------------------------------->>
                                        } else {
                                            echo $value['Subfield Name'] . " " . "<input type='" . $value['InputType Name'] . "' name='". $value['FieldSubfield Id'] . "[]' >  ";
                                        }
                                        
                                    } 
                                    
                                }
                            }                       
                        }
                        echo '</div>';
                    ?>
                    <!-- /# PHP -->

                </form>
                <!-- /# PDSForm -->
                <input type="text" name="1000" placeholder="test here">
            </div>
            <!-- /# Container -->

        </div>
        
    </div>
    <!-- /# Container-Fluid -->

</div>
@stop

@section('css')
@stop

@section('js')
<script>
	function clickEvent(param) {
		var checked = param.checked; // Get check status
		$('.' + $( param ).attr( "class" ) ).prop("checked", false); // Uncheck all
		if (checked){ $(param).prop('checked', true); }
	}
	function divClick(id) {
		var divs = document.getElementsByClassName('section');
		for(var i = 0; i < divs.length; i++) {
			divs[i].style.display = 'none';
		}
		document.getElementById(id).style.display = 'block';
	}
</script>

<!-- Variables for Searching -->
@stop

@section('jquery')
<script type="text/javascript">
$(document).ready(function() {

    $('#view-pds').addClass('active'); // Update Active Tab

    divClick('Personal Information'); // Call onReady

    // TOKEN
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Surname
    $('#lname').keyup(function(e) {
        var lname = $('#lname').val();
        var fname = $('#fname').val();
        var mname = $('#mname').val();
        console.log(lname + ' ' + fname + '' + mname);
    });
    

});
</script>
@stop