@extends('layout')

@section('content')
	<h1>Create a note</h1>
	<form method="post" action="{{ url('notes')}}" class="form">
		{!! csrf_field() !!}
		<textarea name="note" class="form-control"></textarea>
		<button type="submit" class="btn btn-primary">create note</button>
	</form>
@endsection