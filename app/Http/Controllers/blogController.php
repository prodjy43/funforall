<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\News;
use App\Comment;

class blogController extends Controller
{
    public function showAll(){
    	$news = News::orderBy('news.created_at', 'desc')->get();
    	return view('pages.news', ['title' => 'Actualité', 'news' => $news]);
    }

    public function show($slug){
    	$news = News::where('slug' ,$slug)->first();
    	$comments = Comment::where('news_slug', $slug)->orderBy('comments.created_at', 'desc')->get();
    	return view('pages.comment', ['title' => $slug, 'news' => $news, 'comments' => $comments]);
    }

    public function postCom(Request $request, $slug){
    	$this->create($request->all(), $slug);
    	return redirect('/actualite/comment/'.$slug);
    }

    protected function create(array $data, $slug){
    	return Comment::create([
    		'title' => $data['title'],
    		'content' => $data['content'],
    		'nom' => $data['nom'],
    		'prenom' => $data['prenom'],
    		'news_slug' => $slug,
    	]);
    }
}
