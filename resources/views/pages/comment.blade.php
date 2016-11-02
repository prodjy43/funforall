@extends('layout')
@section('content')
	<div class="banner-sect" style="background-image: url('/images/{{ $news->image }}')">
        <div class="banner-opacity">
            <h1>{{ $news->titre }}</h1>
        </div>
    </div>
    <div class="content-sect">
        <h2>{{ $news->titre }}</h2>
        <p>{{ $news->content }}</p>
        <hr>
        <div class="footer-sect">
        <a  @foreach ($news->newsLikes as $like)
                @if ($like->visitor == Request::ip())
                    href="/actualite/dislike/{{ $news->slug }}"
                @endif
            @endforeach href="/actualite/like/{{ $news->slug }}" class="love @foreach ($news->newsLikes as $like)
                @if ($like->visitor == Request::ip())
                    active
                @endif
            @endforeach">@if (count($news->newsLikes) !== 0)
                {{ count($news->newsLikes) }}
            @endif J'aime <i class="fa fa-heart-o"></i></a>
            <span class="auteur">Posté par <span class="auteur-i">Ivan Biedermann</span><br><span class="auteur-i">Le {{ $news->created_at }}</span></span>
        </div>
    </div>
    <div class="grid-container">
		<?php $i = 0 ?>
        @foreach ($comments as $comment)
            <div class="event section grid-80 suffix-10 prefix-10">
                <div class="content-sect">
                    <h2>{{ $comment->title }}</h2>
                    <p>{{ $comment->content }}</p>
                    <hr>
                    <div class="footer-sect">
                        <a  @foreach ($comment->CommentLikes as $like)
                            @if ($like->visitor == Request::ip())
                                href="/actualite/comment/dislike/{{ $comment->id_comment }}/{{ $title }}"
                            @endif
                        @endforeach href="/actualite/comment/like/{{ $comment->id_comment }}/{{ $title }}" class="love @foreach ($comment->CommentLikes as $like)
                            @if ($like->visitor == Request::ip())
                                active
                            @endif
                        @endforeach">@if (count($comment->CommentLikes) !== 0)
                            {{ count($comment->CommentLikes) }}
                        @endif J'aime <i class="fa fa-heart-o"></i></a>
                        <span class="auteur">Posté par <span class="auteur-i">{{ $comment->prenom.' '.$comment->nom }}</span><br><span class="auteur-i">Le {{ $comment->created_at }}</span></span>
                    </div>
                </div>
            </div>
            <?php $i++ ?>
        @endforeach
        @if ($i === 0)
            <div class="event section grid-80 suffix-10 prefix-10">
                <div class="content-sect">
                    <h2>Aucune news postée</h2>
                    <p>Aucune news n'as été posté pour le moment.</p>
                </div>
            </div>
        @endif
		<div class="help section grid-80 suffix-10 prefix-10">
	        <div class="content-sect">
	        	<form action="/actualite/comment/{{ $news->slug }}" method="post" accept-charset="utf-8">
	        		<h1>Posté un commentaire</h1>
	        		<hr>
			        <input type="text" name="nom" value="" required="" placeholder="Votre nom ..." class="input-50">
			        <input type="text" name="prenom" value="" required="" placeholder="Votre prenom ..." class="input-50">
                    <input type="text" name="title" value="" required="" placeholder="Titre de votre commentaire ...">
                    <input type="hidden" name="slug" value="{{ $news->slug }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			        <textarea name="content" required="" placeholder="Contenu du message ..."></textarea>
			        <button type="submit">Envoyer</button>
		        </form>
	        </div>
	    </div>
	</div>
@stop