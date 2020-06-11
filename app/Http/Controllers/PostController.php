<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function create(Request $request){
        $validatedData = $request->validate([
            'title'=>['required', 'max:255', 'unique:posts'],
            'body'=>'required',
        ]);
        if (!$validatedData) {
            
        }
    }
    function store(StoreBlogPost $request) {
        // request
    }
}
