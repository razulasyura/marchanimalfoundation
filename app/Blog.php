<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['name', 'name_en','description_name','description_name_en','description','description_en','author', 'author_title','file','article_id'];
}
