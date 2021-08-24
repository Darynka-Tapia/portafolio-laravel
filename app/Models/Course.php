<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Course extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getExcerptAttribute(){
        return substr($this->description, 0, 80) . "..." ;
    }

    /* public function post(){
        return Post::where('course_id', '=', $this->id)->get();
    } */
}
