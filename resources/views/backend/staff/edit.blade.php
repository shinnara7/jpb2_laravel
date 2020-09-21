@extends('backendtemplate')
@section('title','Staff Create')

@section('content')
	<h1>Staff Edit</h1>
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
	<form method="post" action="{{route('staff.update',$staff->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label for="InputName">Name</label>
			<input type="text"name="name" class="form-control" id="inputname" value="{{$staff->name}}">	
		</div>

		<div class="form-group">
			<label for="InputProfile">Profile</label>
			<input type="file" name="profile" class="form-control" id="inputprofile" >
			<img src="{{asset($staff->profile)}}" alt="profile image">
			<input type="hidden" name="oldprofile" value="{{$staff->profile}}">	
		</div>

		<div class="form-group">
			<label for="phoneNo">Phone No:</label>
			<input type="text" name="phoneno" class="form-control" id="phoneno" value="{{$staff->phoneno}}" >
		</div>

		<div class="form-group">
			<label for="address">Address</label>
			<textarea class="form-control" name="address" id="address">{{$staff->address}}</textarea>  		
		</div>

		<div class="form-group">
			<label for="salary">Salary</label>
			<input type="number" name="salary" class="form-control" id="salary" value="{{$staff->salary}}">
		</div>
		
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
@endsection