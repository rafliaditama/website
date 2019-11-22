<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index(){
    	$posts = Post::all();
    	return view('posts.index',compact(['posts']));
    }
    public function add(){
    	return view('posts.add');
    }

    public function create(Request $request){
    	$post = Post::create([
    		'title' => $request->title,
    		'content' => $request->content,
            'isi_content' => $request->isi_content,
    		'user_id' => auth()->user()->id,
    		'thumbnail' => $request->thumbnail
    	]);

    	return redirect()->route('posts.index')->with('sukses','Post berhasil disubmit');
    }
     public function delete(Post $post){
        $post->delete();        
        return redirect('/posts')->with('sukses','Data berhasil dihapus');
      }
    
}
