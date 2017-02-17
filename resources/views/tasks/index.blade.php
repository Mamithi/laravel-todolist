<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	<title>Todo List App</title>
</head>
<body>
<div class="container">
	<div class="col-md-offset-2 col-md-8">
		<div class="row">
			<h1>Todo List</h1>
		</div>

		@if(Session::has('success'))

			<div class="alert alert-success">
				<strong>Success:</strong>{{ Session::get('success')}}
			</div>

		@endif


		@if(count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error:</strong>
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<div class="row">
			<form action="{{ route('tasks.store') }}" method="POST">
			{{ csrf_field() }}
				<div class="col-md-9">
					<input type="text" class="form-control" name="newTaskName">
				</div>
				<div class="col-md-3">
					<input type="submit" class="btn btn-primary btn-block" value="Add Task" name="">
				</div>
			</form>
		</div>

		@if(count($storedTasks) > 0)

			<table class="table">
				<thead>
					<th>Task #</th>
					<th>Name</th>
					<th>Complete</th>
					<th>Delete</th>
				</thead>

				<tbody>
					@foreach($storedTasks as $storedTask)
						
						<tr>
							<th>{{ $storedTask -> id }}</th
							>
							<td>{{ $storedTask -> name }}</td>
							<td>
							{{-- {{  Form::open() }} --}}
							<form method="post" action="task">
							{{ csrf_field() }}
								<input type="checkbox" onClick="this.form.submit()"  {{ $storedTask->done ? 'checked' : '' }}/>
								<input type="hidden" name="id"  value="{{ $storedTask->id}}">
							{{-- {{ Form::close()}} --}}
							</form>
							</td>
							<td>
							
								<form  action="{{ route('tasks.destroy', ['tasks'=>$storedTask->id]) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
									<input type="submit" class="btn btn-danger" value="Delete">
								</form>
							</td>
						</tr>
						
					@endforeach
				</tbody>
			</table>

		@endif

		<div class="row text-center">
			{{ $storedTasks->links() }}
		</div>

	</div>
</div>
</body>
</html>