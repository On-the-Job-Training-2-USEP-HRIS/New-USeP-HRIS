<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // DB Methods

class SubfieldsModel extends Model
{
    protected function Dropdowndata(){
    	$result = DB::select('call get_input_type_group');
        return json_encode($result);
    }

    protected function insertSubfield($getRequest){
    	$Subfield_name = $getRequest['subfield_name'];
    	$sequence = $getRequest['sequence'];
    	$input_type = $getRequest['input_type'];

    	$get_field_id = $getRequest['fieldID'];

    	DB::select("CALL insert_Subfield('$Subfield_name','$sequence')");
        DB::select("CALL insert_fieldsubfield($get_field_id)");
        DB::select("CALL insert_SubfieldInputType('$input_type')");
    }
}
