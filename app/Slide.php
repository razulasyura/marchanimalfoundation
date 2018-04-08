<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = ['name', 'name_en', 'description','description_en','link','file'];
}
