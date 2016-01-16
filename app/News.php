<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = ['user_id','headline','news','upload_date'];

    public $timestamps = false;
}
