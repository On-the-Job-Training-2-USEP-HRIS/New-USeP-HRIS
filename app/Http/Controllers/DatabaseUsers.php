<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersModel; // Import UsersModel
use App\PdsModel; // Import UsersModel

class DatabaseUsers extends Controller
{
    // Route to Get Users
    public function GetUsers(Request $request){
        $users = new UsersModel(); // Initialize Users Model
        return $users::GetUsers(); // Get Result
    }

    // Route to Search User
    public function SearchUser(Request $request){
        $users = new UsersModel(); // Initialize PDS Model      
        $result = json_decode($users::SearchUser($request),true); // Search User

        $pds = new PdsModel(); // Initialize PDS Model  
        return json_decode($pds::ViewPds_Username($result[0]['UserID']),true); // View PDS
    }
}