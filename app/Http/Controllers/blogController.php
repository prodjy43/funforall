<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\News;
use App\Comment;
use App\NewsLike;
use App\CommentLike;

class blogController extends Controller
{
    public function showAll(){
    	$news = News::orderBy('news.created_at', 'desc')->with('newsLikes')->get();
    	return view('pages.news', ['title' => 'Actualité', 'news' => $news]);
    }

    public function show($slug){
    	$news = News::where('slug' ,$slug)->with('newsLikes')->first();
    	$comments = Comment::where('news_slug', $slug)->orderBy('comments.created_at', 'desc')->with('commentLikes')->get();
    	return view('pages.comment', ['title' => $slug, 'news' => $news, 'comments' => $comments]);
    }

    public function postCom(Request $request, $slug){
    	$this->create($request->all(), $slug);
    	return redirect('/actualite/comment/'.$slug);
    }

    public function newsLike(Request $request, $slug){
        $ip = $request->ip();
        $this->likeNews($ip, $slug);
        return redirect('/actualite');
    }

    public function newsDislike(Request $request, $slug){
        $ip = $request->ip();
        NewsLike::where('slug_news', $slug)->where('visitor', $ip)->delete();
        return redirect('/actualite');
    }

    public function commentLike(Request $request, $id){
        $ip = $request->ip();
        $this->likeComment($ip, $id);
        return redirect('/actualite');
    }

    public function commentDislike(Request $request, $id){
        $ip = $request->ip();
        CommentLike::where('id_comments', $id)->where('visitor', $ip)->delete();
        return redirect('/actualite');
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
    protected function likeNews($ip, $slug){
        return NewsLike::create([
            'visitor' => $ip,
            'slug_news' => $slug,
        ]);
    }

    protected function likeComment($ip, $id){
        return CommentLike::create([
            'visitor' => $ip,
            'id_comments' => $id,
        ]);
    }
}
