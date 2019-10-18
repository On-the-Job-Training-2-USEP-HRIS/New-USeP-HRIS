<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FieldsModel;

class Fields extends Controller
{
	//view field
    public function ViewFields(Request $request){
    	 $id = \Crypt::decrypt($request->input('sectionID')); //decrypt id
    	 $name = \Crypt::decrypt($request->input('sectionName'));//decrypt name

    	 $FieldsModel = new FieldsModel(); //initialize field model
         
    	 $FieldsModel::viewFields($id,$name); //pass parameter to model

    	 $result = json_decode($FieldsModel::viewFields($id,$name),true); // get result from model

    	  \Session::put('sectionID', $id); // set session

    	return view('pages.admin.fields.view-fields',compact('result'));
    }
    //#END

    //load field function
	public function loadField(Request $request){
        return view('pages.admin.load.load-field'); //retrieve all data from html page
    }
    //#END
    public function insertFields(Request $request){
        $FieldsModel = new FieldsModel();
        $FieldsModel::insertField($request);

        return view('pages.admin.fields.view-fields');
    }
}
