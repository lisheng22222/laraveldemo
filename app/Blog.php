<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    protected $fillable = array('title');

    public $timestamps = false;

    public function author()
    {
    	return $this->hasOne('App\Author');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }


    public function subjects()
    {
    	return $this->belongsToMany('App\Subject','blogs_subjects','blog_id','subject_id');
    }
}


