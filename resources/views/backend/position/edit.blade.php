@extends('backendtemplate')
@section('title','Position Edit')

@section('content')
	<h1>Edit Existing Position</h1>
	{{--Error--}}
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<form method="post" action="{{route('position.update',$position->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label for="InputName">Name</label>
			<input type="text"name="name" class="form-control" id="inputname" value="{{$position->name}}">	
		</div>

		
		
		
		
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
@endsection