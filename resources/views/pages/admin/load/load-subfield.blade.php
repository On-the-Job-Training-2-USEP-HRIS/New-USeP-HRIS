<?php
$getID = session()->get('fieldID');
$getSubfield = \DB::select("call getPDS_Subfield('$getID')");
$result = json_decode(json_encode($getSubfield),true);
?>

@foreach($result as $value)
<table class="table table-hover">
	<tr>
		<td> <input type="checkbox" id="select" name="select"> </td>
		<td style="width:410px;"> <a id='passID'style="text-decoration:none;">{{$value['Subfield Name']}}</a> </td>
		<td style="width:360px;"> {{$value['Input Type']}}</td>
		<td style="width:200px;"> {{$value['Sequence']}} </td>
		<td colspan="2"> <img src="{{ asset('assets/img/edit.png') }}" width="23px" height="23px" onClick="editModal(<?php echo $value['id']; ?>)" id="editsection<?php echo $value['id']; ?>"> </td>
		<td> <img src="{{ asset('assets/img/delete.png') }}" width="22px" height="22px" onClick="deleteModal(<?php echo $value['id']; ?>)" id="deletesection<?php echo $value['id']; ?>"> </td>
	</tr>
</table>
@endforeach



