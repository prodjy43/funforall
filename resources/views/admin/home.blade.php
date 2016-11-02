@extends('adminlayout')
@section('content')
	<div class="grid-container">
		<div class="event section grid-45 suffix-5">
            <div class="banner-sect" style="background-image: url('../images/news.jpg')">
                <div class="banner-opacity">
                    <h1>News</h1>
                </div>
            </div>
            <div class="admin-list">
            	<ul>
            		<li><a href="#!" class="add">Ajouter</a></li>
            		<li><a href="#!" class="edit">Modfier</a></li>
            		<li><a href="#!" class="delete">Supprimer</a></li>
            	</ul>
            </div>
        </div>
        <div class="event section grid-45 prefix-5">
            <div class="banner-sect" style="background-image: url('../images/temoi.jpeg')">
                <div class="banner-opacity">
                    <h1>Témoignages</h1>
                </div>
            </div>
            <div class="admin-list">
            	<ul>
            		<li><a href="#!" class="add">Ajouter</a></li>
            		<li><a href="#!" class="edit">Modfier</a></li>
            		<li><a href="#!" class="delete">Supprimer</a></li>
            	</ul>
            </div>
        </div>
        <div class="event section grid-45 suffix-5">
            <div class="banner-sect" style="background-image: url('../images/comment.jpg')">
                <div class="banner-opacity">
                    <h1>Commentaires</h1>
                </div>
            </div>
            <div class="admin-list">
            	<ul>
            		<li><a href="#!" class="delete">Supprimer</a></li>
            	</ul>
            </div>
        </div>
        <div class="event section grid-45 prefix-5">
            <div class="banner-sect" style="background-image: url('../images/account.jpeg')">
                <div class="banner-opacity">
                    <h1>Mon compte</h1>
                </div>
            </div>
            <div class="admin-list">
            	<ul>
            		<li><a href="#!" class="edit">Modfier</a></li>
                    <li><a href=/admin/deconnexion class="delete">Déconnexion</a></li>
            	</ul>
            </div>
        </div>
	</div>
@stop