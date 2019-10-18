<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.admin.pds-edit');
    }

    // Route to View View PDS
    public function ViewPDS(Request $request){          
        return view('pages.admin.pds-view');	
    }
}
