<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1>Edit Employye</h1>

	<form action="/employees/{{ $employee->id }}" method="POST">
		@method('PATCH')
		@csrf
		<div>
			<input type="text" name="first_name" placeholder="Company name" value="{{ $employee->first_name }}" required>
		</div>
		<div>
			<input type="text" name="last_name" placeholder="Email" value="{{ $employee->last_name }}" required>
		</div>
		<div>
			<input type="hidden" name="companies_id" value="{{ $employee->companies_id }}" readonly>
		</div>
		<div>
			<input type="text" name="email" placeholder="Website" value="{{ $employee->email }}" required>
		</div>
		<div>
			<input type="text" name="phone" placeholder="storage/name.type" value="{{ $employee->phone }}" required>
		</div>
		<div>
			<button type="submit" class="btn btn-success">Edit</button>
		</div>
	</form>
</body>
</html>
