<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Township;
use App\Type;
use App\User;
use App\Post;
use DB;
use Illuminate\Support\Facades\Auth;

class ExtraController extends Controller
{

    public function __construct($value='')
    {
        $this->middleware('auth')->only('user');
    }
    public function index()
    {
        $posts=Post::all();

        return view('backend.posts.index',compact('posts'));
    }

    public function user()
    {
       $posts = DB::table('posts')
                    ->where('posts.user_id', '=', Auth::id())
                    ->get();
        return view('frontend.userposts.index',compact('posts'));
    }

     public function agency()
    {
       $users = DB::table('users')
                    ->where('role_id', '=', '1')
                    ->get();
        return view('backend.users.agencies',compact('users'));
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $posts = DB::table('posts')
            // ->join('types','posts.type_id','=','types.id')
            // ->join('townships','posts.township_id','=','townships.id')
            // ->join('users','posts.user_id','=','users.id')
            ->where('posts.townships.townshipName','like','%'. $search.'%')->paginate(5);
        return view('frontend.posts.index',['posts'=> $posts]);
    }
   
    

    // public function __construct($value='')
    // {
    // 	$this->middleware('auth')->only('post_ad');
    // }

    // public function home($value='')
    // {
    // 	$posts = Post::all();
    // 	// $townships = Township->take(4)->get();
    // 	return view('frontend.posts.index',compact('posts'));
    // }

    // public function postdetail($post)
    // {
    // 	$post = Post::find($post);
    // 	return view('frontend.posts.detail',compact('post'));
    	    
   	// }

    // public function post_ad()
    // {
    //     return view('frontend.posts.create');
    // }
}
