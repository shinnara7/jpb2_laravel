@extends('backendtemplate')
@section('title','Department Detail')

@section('content')
	<h1>Department Detail</h1>
	<a href="{{route('department.index')}}">Back</a>
	
	<p>Name:{{$department->name}}</p>
	
@endsection