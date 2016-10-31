@extends('layout')
@section('content')
	<div class="grid-container gallery">
		@for ($i = 0; $i < 20; $i++)
			<div class="grid-20 tablet-grid-33 mobile-grid-50 photo">
				<div class="img" style="background-image: url('images/event.jpeg')">
					<div class="caption">
						Je suis une caption
					</div>
					<div class="opacity">
						
					</div>
				</div>
			</div>
		@endfor
	</div>
@stop