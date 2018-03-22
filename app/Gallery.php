<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;  
    
class Gallery extends Model
{
    public function get()
    {
        $query = DB::table('galleries')
                ->get();
        return $query;
    }
}
