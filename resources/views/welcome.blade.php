@extends('layout')

@section('content')

<?php foreach($people as $person) : ?>
  <li><?= $person; ?></li>
<?php endforeach; ?> 

<h3>With foreach</h3>

@foreach ($people as $person)
  <li>{{ $person }}</li>
@endforeach

@if(!empty($people))
  <h2>There is people</h2>
@endif

<h3>Same with unless</h3>

@unless(empty($people))
  <h2>There is a people</h2>
@endunless

@stop