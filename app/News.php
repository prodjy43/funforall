<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class News extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'title', 'content', 'image', 'nom', 'prenom', 'slug',
    ];

    public function newsLikes(){
    	return $this->hasMany('App\NewsLike', 'slug_news', 'slug');
    }
}
