<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'name_en', 'host','description_name','description_name_en','description','description_en','location','file','album_id'];
}
