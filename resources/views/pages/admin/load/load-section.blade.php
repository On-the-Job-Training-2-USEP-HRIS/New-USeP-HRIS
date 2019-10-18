<?php
$getSection = \DB::select('call getPDS_Section');
$result = json_decode(json_encode($getSection),true);
?>

@foreach($result as $value)
<?php
$param1 = Crypt::encrypt($value['id']);
$param2 = Crypt::encrypt($value['Section Name']);
?>
<table class="table table-hover">
	<tr>
		<td> <input type="checkbox" id="select" name="select"> </td>
		<td style="width:410px;"> <a id='passID' href="view-fields?sectionID={{$param1}}&sectionName={{$param2}}" style="text-decoration:none;">{{$value['Section Name']}}</a> </td>
		<td style="width:360px;"> {{$value['Number of Fields']}}</td>
		<td style="width:200px;"> {{$value['Sequence']}} </td>
		<td colspan="2"> <img src="{{ asset('assets/img/edit.png') }}" width="23px" height="23px" onClick="editModal(<?php echo $value['id']; ?>)" id="editsection<?php echo $value['id']; ?>"> </td>
		<td> <img src="{{ asset('assets/img/delete.png') }}" width="22px" height="22px" onClick="deleteModal(<?php echo $value['id']; ?>)" id="deletesection<?php echo $value['id']; ?>"> </td>
	</tr>
</table>
@endforeach