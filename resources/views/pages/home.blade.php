@extends('layout')
@section('content')
    <div class="banner">
        <a href="/help" class="btn">Nous aidez !</a>
    </div>
    <div class="grid-container">
        <div class="event section grid-80 suffix-10 prefix-10">
            <div class="banner-sect" style="background-image: url('../images/event.jpeg')">
                <div class="banner-opacity">
                    <h1>Evenements</h1>
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
                    <a href="#!" class="comment">Commentaire <i class="fa fa-comment-o"></i></a>
                </div>
            </div>
        </div>
        <div class="event section grid-80 suffix-10 prefix-10">
            <div class="banner-sect" style="background-image: url('../images/assoc.jpeg')">
                <div class="banner-opacity">
                    <h1>L'association</h1>
                </div>
            </div>
            <div class="content-sect">
                <h2>NOA Association Fun For All</h2>
                <p>Elle a été créée le 19 janvier 2009.<br>Les objectifs de l’Association sont de mettre à disposition de ses membres du matériel adapté pour les loisirs de personnes en situation de polyhandicap ou à mobilité réduite et de leur famille et de rechercher des fonds pour l’acquisition de ce matériel.<br>L’Association a également pour vocation de constituer une plateforme d’échanges pour ses membres.</p>
            </div>
        </div>
    </div>
@stop
