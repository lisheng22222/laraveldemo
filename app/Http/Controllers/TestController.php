<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;

class TestController extends Controller
{
    //

    public function index()
    {

    	$blogInfo = Blog::find(1);

    	echo $blogInfo->subjects;

    	return $blogInfo;
    }
}
