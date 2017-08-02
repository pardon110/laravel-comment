<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rely extends Model
{
    //
    protected $table = 'replys';
    
    protected $fillable = ['user_id','comment_id','content'];
}
