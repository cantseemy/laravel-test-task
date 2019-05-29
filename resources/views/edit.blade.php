<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create new Company</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1>Edit company</h1>

	<form action="/companies/{{ $company->id }}" method="POST">
		@method('PATCH')
		@csrf
		<div>
			<input type="text" name="name" placeholder="Company name" value="{{ $company->name }}" required>
		</div>
		<div>
			<input type="text" name="email" placeholder="Email" value="{{ $company->email }}" required>
		</div>
		<div>
			<input type="text" name="website" placeholder="Website" value="{{ $company->website }}" required>
		</div>
		<div>
			<input type="text" name="logo" placeholder="storage/name.type" value="{{ $company->logo }}" required>
		</div>
		<div>
			<button type="submit" class="btn btn-success">Edit Company</button>
		</div>
	</form>

</body>
</html>