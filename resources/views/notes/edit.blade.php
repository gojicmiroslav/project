@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2>Edit note ID: {{ $note->id }}</h2>

			<form method="POST" action="/notes/{{ $note->id }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				{{ method_field('PATCH') }}

			  <div class="form-group">
			    <label for="noteBody">Body</label>
			    <textarea name="body" class="form-control">{{ $note->body }}</textarea>
			  </div>
			  
			  <div class="form-group">
			  	<button type="submit" class="btn btn-primary">Edit Note</button>
			  </div>
			</form>	
		</div>
	</div>
@stop