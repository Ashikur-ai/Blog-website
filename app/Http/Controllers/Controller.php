<?php

namespace App\Http\Controllers;
use App\Models\Post;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        $featurePost = Post::find('1');
        $data = Post::all();
        return view('Frontend.index', compact('featurePost', 'data'));
    }


    public function Post($id){

        $data = Post::find($id);
        return view('Frontend.singlePost', compact('data'));
    }
}
