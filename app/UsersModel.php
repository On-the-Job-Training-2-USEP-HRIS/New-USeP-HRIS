<?php

namespace App;

use Illuminate\Database\Eloquent\Model; // Eloquent
use Illuminate\Support\Facades\DB; // DB Methods

class UsersModel extends Model
{
    // Get Users
    protected function getUsers(){
        $result = DB::Select('CALL PDS_GetUsers()');
        return json_encode($result);
    }

    // Search User
    protected function SearchUser($request){
        $result = DB::Select("CALL PDS_SearchUser('$request->LastName','$request->FirstName','$request->MiddleName')");
        return json_encode($result);
    }

    // Insert User
    protected function insertUsers(){
        
    }
}