<?php

namespace App;

use Illuminate\Database\Eloquent\Model; // Eloquent
use Illuminate\Support\Facades\DB; // DB Methods

class PdsModel extends Model
{
    // View PDS
    protected function viewPds(){
        $result = DB::Select('CALL getPDS_Dashboard()');
        return json_encode($result);
    }
}
