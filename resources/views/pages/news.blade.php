@extends('layout')
@section('content')
	<div class="grid-container">
		@foreach ($news as $post)
			<div class="event section grid-80 suffix-10 prefix-10">
	            <div class="banner-sect" style="background-image: url('../images/{{ $post->image }}')">
	                <div class="banner-opacity">
	                </div>
	            </div>
	            <div class="content-sect">
	                <h2>{{ $post->titre }}</h2>
	                <p>{{ $post->content }}</p>
	                <hr>
	                <div class="footer-sect">
	                    <a href="/actualite/like/{{ $post->slug }}" class="love">J'aime <i class="fa fa-heart-o"></i></a>
	                    <a href="/actualite/comment/{{ $post->slug }}" class="comment">Commentaire <i class="fa fa-comment-o"></i></a>
	                    <span class="auteur">Posté par <span class="auteur-i">{{ $post->prenom.' '.$post->nom }}</span><br><span class="auteur-i">Le {{ $post->created_at }}</span></span>
	                </div>
	            </div>
	        </div>
		@endforeach
	</div>
@stop