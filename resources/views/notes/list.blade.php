@extends('layout')

@section('content')
	<h2>Notes</h2>
	<p>
		<a href="{{ url('notes/create')}}">Add a note</a>
	</p>
	<ul>
		@foreach($notes as $note)
		<li>
			{{$note->note}}
		</li>
		@endforeach
	</ul>
	<!--<form method="post">
		{!! csrf_field() !!}
		<textarea></textarea>
		<button type="submit">Create note</button>
	</form>
	-->
@endsection
