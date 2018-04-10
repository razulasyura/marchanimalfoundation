<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;  
    
class Gallery extends Model
{
    protected $fillable = [
        'name', 'description','location','file','album_id','is_media'
    ];

    public function get()
    {
        $query = DB::table('galleries')
                ->get();
        return $query;
    }
}
