@extends('backendtemplate')
@section('title','Position Detail')

@section('content')
	<h1>Position Detail</h1>
	<a href="{{route('position.index')}}">Back</a>
	
	<p>Name:{{$position->name}}</p>
	
@endsection