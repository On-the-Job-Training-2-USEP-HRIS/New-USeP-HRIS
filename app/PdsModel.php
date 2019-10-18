<?php

namespace App;

use Illuminate\Database\Eloquent\Model; // Eloquent
use Illuminate\Support\Facades\DB; // DB Methods

class PdsModel extends Model
{
    // View PDS
    protected function ViewPds(){
        $result = DB::Select('CALL PDS_ViewPDS()');
        return json_encode($result);
    }

    // View PDS (by Username)
    protected function ViewPds_Username($UserID){
        $result = DB::Select("CALL PDS_ViewPDS_UserID('$UserID')");
        return json_encode($result);
    }

    // Create PDS
    protected function CreatePDS($json_decode){
        foreach($json_decode as $data){
            return $data->InputGroupId . ' ' . $data->FieldSubfieldId . ' ' . $data->Data;
        }

    }
}