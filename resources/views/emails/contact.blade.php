@extends('adminlayout')
@section('content')
	<div class="grid-container">
		<div class="event section grid-45 suffix-5">
            <div class="banner-sect">
                <div class="banner-opacity">
                    <h1>{{ $mail['subject'] }}</h1>
                </div>
            </div>
        </div>
	</div>
@stop