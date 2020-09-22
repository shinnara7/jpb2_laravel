@extends('backendtemplate')
@section('title','Position Create')

@section('content')
	<h1>Position create</h1>
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
	<form method="post" action="{{route('position.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="InputName">Name</label>
			<input type="text"name="name" class="form-control" id="inputname" >	
		</div>

		
		
		
		
		
		<button type="submit" class="btn btn-primary">Create</button>
	</form>
@endsection