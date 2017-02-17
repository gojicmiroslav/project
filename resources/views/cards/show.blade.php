@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2>Card title: {{ $card->title }}</h2>

			<ul class="list-group">
				@foreach ($card->notes as $note)
					<li class="list-group-item">
						<span class="note-body">
							{{ $note->body }} 
						</span>

						<div class="pull-right">
							<a href="#">{{ $note->user->username }}</a>
							<a href="/notes/{{ $note->id }}/edit" class="btn btn-info">Edit</a> 
							<a href="" class="btn btn-danger">Delete</a> 
						</div>
					</li>
				@endforeach
			</ul>

			<hr>
			<h3>Add a New Note</h3>

			<form method="POST" action="/cards/{{ $card->id }}/notes">
				{{ csrf_field() }}
				<div class="form-group">
					<textarea name="body" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Note</button>
				</div>
			</form>

			@if (count($errors))
				<ul class="list-group">
					@foreach ($errors->all() as $error)
						<li class="list-group-item list-group-item-danger">{{ $error }}</li>
					@endforeach
				</ul>
			@endif
		</div>
	</div>
@stop
