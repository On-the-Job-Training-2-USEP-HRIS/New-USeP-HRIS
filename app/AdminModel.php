<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // DB Methods

class AdminModel extends Model
{
    protected function countData(){
    	$getUsers = DB::select("call count_users"); // get data from database
    	$getSections = DB::select("call sectionCount"); // get data from database
    	$getFields = DB::select("call fieldCount"); // get data from database
   		$getfieldsubfield = DB::select("call fieldsubfieldCount"); // get data from database

    	$user_result = $getUsers[0]->userCount;
    	$section_result = $getSections[0]->sectionCount;
    	$field_result = $getFields[0]->fieldCount;
    	$fieldsubfield_result = $getfieldsubfield[0]->fieldsubfield;
   			
 		$dataArr = array(
 			'users' => $user_result,
 			'sections' => $section_result,
 			'fields' => $field_result,
 		);

       	return json_encode($dataArr);
    }
}
