<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create new Company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>Create company</h1>

<form action="/companies" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="text" name="name" placeholder="Company name" value="{{ old('name') }}">
    </div>
    <div>
        <input type="text" name="email" placeholder="Email" required value="{{ old('email') }}">
    </div>
    <div>
        <input type="text" name="website" placeholder="Website" required value="{{ old('website') }}">
    </div>
    <div>
        <!--<input type="text" name="logo" placeholder="storage/name.type" required value="{{ old('logo') }}">-->
            <input type="file" name="logo" required>
    </div>
    <div>
        <button type="submit" class="btn btn-success">Create Company</button>
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
