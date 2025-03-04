<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];
}
