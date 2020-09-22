@extends('backendtemplate')
@section('title','Department List')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>Department List</h1>
		<a href="{{route('department.create')}}" class="btn btn-success">Add New Department</a>
		{{--table--}}
		<table class="table my-4">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($department as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->name}}</td>
					
					<td>
						<a href="{{route('department.show',$row->id)}}" class="btn btn-info">Detail</a>
						<a href="{{route('department.edit',$row->id)}}" class="btn btn-warning">Edit</a>
						<form method="post" action="{{route('department.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
							@csrf
							@method('DELETE')
							<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						</form>
					</td>
				</tr>
				@endforeach 
			</tbody>
		</table>
	</div>
</div>

@endsection