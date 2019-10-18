<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SectionModel; //import sectionmodel
use App\PdsModel; // import pds model

class Section extends Controller{
	//load section function
	public function loadSection(Request $request){
        return view('pages.admin.load.load-section'); //retrieve all data from html page
    }
    //#END


    //Insert section function
     public function insertSection(Request $request){
    	$sectionModel = new SectionModel();// initialize Section Model
    	$sectionModel::insertSection($request);//Pass data to section model
    	$pds = new PdsModel(); // Initialize PDS Model      
        $result = json_decode($pds::viewPds(),true); // Get Result            
        return view('pages.admin.pds-edit', compact('result'));	
    }
    //#END
}
