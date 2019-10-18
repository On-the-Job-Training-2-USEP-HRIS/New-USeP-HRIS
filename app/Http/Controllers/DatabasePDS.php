<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PdsModel; // Import PdsModel

class DatabasePDS extends Controller
{
    // Route to Get PDS Template
    public function GetPdsTemplate(Request $request){
        $pds = new PdsModel(); // Initialize PDS Model      
        return json_decode($pds::ViewPds(),true); // View PDS    
    }

    // Route to Create PDS
    public function CreatePDS(Request $request){        
        $json_decode = json_decode($request->fields);
        $pds = new PdsModel(); // Initialize PDS Model      
        return $pds::CreatePDS($json_decode); // View PDS 
    }
}
