<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['name', 'name_en','description_name','description_name_en','description','description_en','file'];
}
