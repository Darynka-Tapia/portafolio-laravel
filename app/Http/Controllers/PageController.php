<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Post;

class PageController extends Controller
{
    public function home(){
        return view('index');
    }
    public function course(Course $course){
        $skils = Post::where('course_id', '=', $course->id)->get();
        return view('course', compact('course', 'skils'));
    }


}
