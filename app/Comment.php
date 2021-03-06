<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Comment extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'title', 'content', 'nom', 'prenom', 'news_slug',
    ];

    public function commentLikes(){
    	return $this->hasMany('App\CommentLike', 'id_comments', 'id_comment');
    }
}
