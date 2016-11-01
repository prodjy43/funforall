@extends('layout')
@section('content')
	<div class="banner-sect" style="background-image: url({{ elixir('images/event.jpeg') }})">
        <div class="banner-opacity">
            <h1>Slow-up Morat</h1>
        </div>
    </div>
    <div class="content-sect">
        <h2>Slow-up Morat</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <hr>
        <div class="footer-sect">
            <a href="#!" class="love">J'aime <i class="fa fa-heart-o"></i></a>
            <span class="auteur">Posté par <span class="auteur-i">Ivan Biedermann</span><br><span class="auteur-i">Le 01.11.2016 à 11h52</span></span>
        </div>
    </div>
    <div class="grid-container">
		<div class="event section grid-80 suffix-10 prefix-10">
            <div class="content-sect">
                <h2>Slow-up Morat</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr>
                <div class="footer-sect">
                    <a href="#!" class="love">J'aime <i class="fa fa-heart-o"></i></a>
                    <span class="auteur">Posté par <span class="auteur-i">Ivan Biedermann</span><br><span class="auteur-i">Le 01.11.2016 à 11h52</span></span>
                </div>
            </div>
        </div>
		<div class="help section grid-80 suffix-10 prefix-10">
	        <div class="content-sect">
	        	<form action="#" method="post" accept-charset="utf-8">
	        		<h1>Posté un commentaire</h1>
	        		<hr>
			        <input type="text" name="nom" value="" placeholder="Votre nom ..." class="input-50">
			        <input type="text" name="prenom" value="" placeholder="Votre prenom ..." class="input-50">
			        <textarea name="msg" placeholder="Contenu du message ..."></textarea>
			        <button type="submit">Envoyer</button>
		        </form>
	        </div>
	    </div>
	</div>
@stop