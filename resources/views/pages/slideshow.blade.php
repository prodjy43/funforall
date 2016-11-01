@extends('layout')
@section('content')
	<div class="grid-container">
		<div class="slider grid-80 prefix-10 suffix-10 section shadow-no">
	      <ul class="slides">
	        @foreach ($files as $file)
	        	<li class="slide">
		          <figure>
		            <img src="{{ elixir('images/'.$folder.'/'.$file->getFilename()) }}" alt="">
		          </figure>
		        </li>
	        @endforeach
	      </ul>
	    </div>
	</div>
@stop