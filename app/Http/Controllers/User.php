<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    // Route to View View PDS
    public function Registration(Request $request){          
        return view('pages.pds-registration');	    
    }
}
