<?php

namespace App;

use Illuminate\Database\Eloquent\Model; // Eloquent
use Illuminate\Support\Facades\DB; // DB Methods

class SectionModel extends Model
{
	//pass loaded data
    protected function viewSection(){
    	$result = DB::Select('call getPDS_Section'); // get all section from database
        return json_encode($result); //return all the result
    }

    protected function insertSection($getRequest){
       $section = $getRequest['section_name']; // get section name data from parameter
       $sequence = $getRequest['sequence']; // get sequence data from parameter
        DB::Select("call insert_section('$section','$sequence')"); // insert into database
    }
}
