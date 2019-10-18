<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PdsModel; // Import PdsModel
use App\SectionModel;

class Admin extends Controller
{
    // Route to View Dashboard
    public function Dashboard(Request $request){
        return view('pages.admin.dashboard');
    }

     // Route to View Users
     public function Users(Request $request){
        return view('pages.admin.users');
    }

    // Route to View Edit PDS
    public function EditPDS(Request $request){
        $section = new SectionModel();//Initialize section Model     
        $result = json_decode($section::viewSection(),true); //Get Result
        return view('pages.admin.pds-edit',compact('result'));
    }

    // Route to View View PDS
    public function ViewPDS(Request $request){
        $pds = new PdsModel(); // Initialize PDS Model      
        $result = json_decode($pds::viewPds(),true); // Get Result            
        return view('pages.admin.pds-view', compact('result'));	
    }
}
