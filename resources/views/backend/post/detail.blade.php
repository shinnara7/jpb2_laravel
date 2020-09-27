@extends('backendtemplate')
@section('title','Post Detail')

@section('content')
  <h1>Post Detail</h1>
  <a href="{{route('posts.index')}}">Back</a>
  <img src="{{asset($posts->profile)}}" alt="Post Profile">
  <p>Title:{{$posts->title}}</p>
  
  <p>Content: {!!$posts->content!!}</p>
  
@endsection