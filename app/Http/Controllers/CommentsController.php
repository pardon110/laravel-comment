<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\Comment;

class CommentsController extends Controller
{
    //
    public function store(Request $request)
    {
    	$this->validate($request,[
	   'content' => 'required', 
	]);
	if(Auth::check()){
	   $user_id = Auth::id();
	}else{
	   $user_id = 0;
	}
	$comment = Comment::create([
	   'user_id' => $user_id,
	   'content' => $request->content,
	]);
	session()->flash('success','Sucess!');
	return redirect()->back();
    }

}
