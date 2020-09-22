@extends('backendtemplate')
@section('title','Department Edit')

@section('content')
	<h1>Edit Existing Department</h1>
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
	<form method="post" action="{{route('department.update',$department->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label for="InputName">Name</label>
			<input type="text"name="name" class="form-control" id="inputname" value="{{$department->name}}">	
		</div>

		
		
		
		
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
@endsection