<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PdsModel; // Import PdsModel
use App\SectionModel;
use App\AdminModel;


class Admin extends Controller
{
    // Route to View Dashboard
    public function Dashboard(Request $request){
        $get_user_Count = new AdminModel();
        $result = json_decode($get_user_Count::countData(),true);
        // dd($result);
        return view('pages.admin.dashboard',compact('result'));
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
