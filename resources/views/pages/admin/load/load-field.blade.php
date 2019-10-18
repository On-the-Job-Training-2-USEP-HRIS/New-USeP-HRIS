<?php
$getID = session()->get('sectionID');
$getFields = \DB::select("call getPDS_Field($getID)");
$result = json_decode(json_encode($getFields),true);
?>

@foreach($result as $value)
<?php
$param1 = Crypt::encrypt($value['id']);
$param2 = Crypt::encrypt($value['Field Name']);
?>
<table class="table table-hover">
	<tr>
		<td> <input type="checkbox" id="select" name="select"> </td>
		<td style="width:410px;"> <a id='passID'style="text-decoration:none;" href="view-subfields?fieldID={{$param1}}&fieldName={{$param2}}">{{$value['Field Name']}}</a> </td>
		<td style="width:360px;"> {{$value['Number of Subfields']}}</td>
		<td style="width:200px;"> {{$value['Sequence']}} </td>
		<td colspan="2"> <img src="{{ asset('assets/img/edit.png') }}" width="23px" height="23px" onClick="editModal(<?php echo $value['id']; ?>)" id="editsection<?php echo $value['id']; ?>"> </td>
		<td> <img src="{{ asset('assets/img/delete.png') }}" width="22px" height="22px" onClick="deleteModal(<?php echo $value['id']; ?>)" id="deletesection<?php echo $value['id']; ?>"> </td>
	</tr>
</table>
@endforeach



