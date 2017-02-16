@extends('layout')

@section('content')

	<h1>All Cards</h1>

	@foreach ($cards as $card)
		<p><a href="{{ $card->path() }}">{{ $card->title }}</a></p>
	@endforeach

@stop