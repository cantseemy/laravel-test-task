<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add new employee</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1>Add new employee</h1>

	<form action="/employees" method="POST">
		@csrf
		<div>
			<input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
		</div>
		<div>
			<input type="text" name="last_name" placeholder="Last Name" required value="{{ old('last_name') }}" required>
		</div>
		<div>
			<input type="text" name="companies_id" value="{{$employee->companies_id}}" readonly  required>
		</div>
		<div>
			<input type="text" name="email" placeholder="Email" required value="{{ old('email') }}" required>
		</div>
		<div>
			<input type="text" name="phone" placeholder="Phone" required value="{{ old('phone') }}" required>
		</div>
		<div>
			<button type="submit" class="btn btn-success">Add Employee</button>
		</div>
		@if($errors->any())
		<div class="alert alert-danger" role="alert">

			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach

			</ul>
		</div>
		@endif
	</form>
</body>
</html>