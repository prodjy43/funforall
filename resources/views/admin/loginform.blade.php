@extends('adminlayout')
@section('content')
	<div class="grid-container">
		<div class="event section grid-80 suffix-10 prefix-10">
            <div class="banner-sect" style="background-image: url('../images/lock.jpeg')">
                <div class="banner-opacity">
                    <h1>Administration</h1>
                </div>
            </div>
            <div class="content-sect">
                <h2>Connexion</h2>
                <p>Veillez vous connecter avec le formulaire ci-dessous pour accéder à l'administration.<br>Cordialement le webmaster.</p>
            </div>
        </div>
		<div class="help section grid-80 suffix-10 prefix-10">
	        <div class="content-sect">
	        	<form action="/admin/login" method="post" accept-charset="utf-8">
			        <input type="text" name="login" value="" placeholder="Votre nom d'utilisateur ...">
			        <input type="password" name="password" value="" placeholder="Votre mot de passe ...">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			        <button type="submit">Envoyer</button>
		        </form>
	        </div>
	    </div>
	</div>
@stop