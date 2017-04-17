<?php

namespace Tagtaste\Settings;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $visible = ['id','key','value'];
     protected $fillable = ['key','value'];
}
