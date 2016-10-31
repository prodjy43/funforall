@extends('layout')
@section('content')
	<div class="grid-container">
		<div class="help section grid-80 suffix-10 prefix-10">
	        <div class="banner-sect" style="background-image: url('../images/contact.jpeg')">
	            <div class="banner-opacity">
	                <h1>Contactez-nous</h1>
	            </div>
	        </div>
	        <div class="content-sect">
	            <h2>Les moyens de nous contacter</h2>
	            <p>Voici les differents moyens de nous contacter
					<ul class="info-list fa-ul">
		            	<li><i class="fa-li fa fa-dot-circle-o"></i>Téléphone : 023 / 841.23.64</li>
		            	<li><i class="fa-li fa fa-dot-circle-o"></i>E-Mail: info@funforall.ch</li>
		            	<li><i class="fa-li fa fa-dot-circle-o"></i>Via le formulaire de contact ci-dessous</li>
	            	</ul>
	            </p>
	            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2723.286130098821!2d6.745760050851105!3d46.95606794057951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478de795945beedb%3A0x9cb4795a77ab1b13!2sAu+Village+13%2C+2149+Brot-Dessous!5e0!3m2!1sfr!2sch!4v1452971025279" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen="" scrolling="no" ></iframe>
	        </div>
	    </div>
	    <div class="help section grid-80 suffix-10 prefix-10">
	        <div class="content-sect">
	        	<form action="#" method="post" accept-charset="utf-8">
			        <input type="text" name="nom" value="" placeholder="Votre nom ..." class="input-50">
			        <input type="text" name="prenom" value="" placeholder="Votre prenom ..." class="input-50">
			        <input type="text" name="mail" value="" placeholder="Votre adresse e-mail ...">
			        <input type="text" name="subject" value="" placeholder="Le sujet de votre demande ...">
			        <textarea name="msg" placeholder="Contenu du message ..."></textarea>
			        <button type="submit">Envoyer</button>
		        </form>
	        </div>
	    </div>
	</div>
@stop