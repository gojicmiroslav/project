@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2>Card title: {{ $card->title }}</h2>

			<ul class="list-group">
				@foreach ($card->notes as $note)
					<li class="list-group-item">{{ $note->body }}</li>
				@endforeach
			</ul>

			<hr>
			<h3>Add a New Note</h3>

			<form method="POST" action="/cards/{{ $card->id }}/notes">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<textarea name="body" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Note</button>
				</div>
			</form>
		</div>
	</div>
@stop
