<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // DB Methods
class FieldsModel extends Model
{
	//view field
  protected function viewFields($id,$name){
        $getFields = DB::select("call getPDS_Field($id)"); // get data from database
        $result = json_decode(json_encode($getFields),true); // convert json data
       	return json_encode($result); //return result
    }
    //#END

    protected function insertField($getRequest){
      	$field = $getRequest['field_name']; // get field name data from parameter
        $sequence = $getRequest['sequence']; // get sequence data from parameter
        $sectionID = $getRequest['sectionID'];

        DB::select("CALL insert_field('$field','$sequence')");
        DB::select("CALL insert_sectionfield('$sectionID')"); 
    }
}
