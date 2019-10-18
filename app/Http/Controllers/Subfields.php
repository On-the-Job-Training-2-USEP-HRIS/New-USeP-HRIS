<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubfieldsModel;

class Subfields extends Controller
{
    public function ViewSubfields(Request $request){
    	 $id = \Crypt::decrypt($request->input('fieldID')); //decrypt id
    	 $name = \Crypt::decrypt($request->input('fieldName'));//decrypt name

    	 \Session::put('fieldID', $id);

    	  $SubfieldsModel = new SubfieldsModel();

    	  $InputTypeResult = json_decode($SubfieldsModel::Dropdowndata(),true);

    		return view('pages.admin.subfields.view-subfields',compact('InputTypeResult'));
    }

    public function InsertSubfields(Request $request){
    	$SubfieldsModel = new SubfieldsModel();
    	$SubfieldsModel::insertSubfield($request);
    }

    //load subfield function
	public function loadSubfield(Request $request){
        return view('pages.admin.load.load-subfield'); //retrieve all data from html page
    }
    //#END
}
