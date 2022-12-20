<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
 

class PostController extends Controller
{   
    public function add()
    {
        return view('post.create');
    }

    public function postpage (Request $request){
      
        // Varidationを行う
      $this->validate($request, Post::$rules);

      $post = new Post;
      $post = $request->all();
        return view ('home');
    }
       
    public function savenew (Request $request){
        $post = new Post;
        $post ->user_id = auth()->id();
        $post ->body = $request->body;
        $post->save();

         return redirect ('/home');
    }

    public function index (Request $request){
        $user = User::all();
        $data = Post::orderBy('created_at', 'desc')->get();
        return view('home',['datas' => $data, 'users' => $user]);
    }
    
    public function delete(Request $request){
        $post = Post::find($request->id);
        $post->delete();
        return redirect ('/home');
    }

    // public function show ($id){
        // $data = Post::with('user')->where('id', $id)->get();
        // return view ('home')->with(['datas' => $data]);

// }
}
