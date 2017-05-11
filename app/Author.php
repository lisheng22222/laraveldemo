<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $fillable = array('name','blog_id');

    protected $table = 'author';

    public $timestamps = 'false';

    public function blog()
    {
    	return $this->belongsTo('App\Blog');
    }
}
