<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        td {
            text-align: center;

        }

        .tc {
            text-align: left;
        }
    </style>
</head>
<body>
<hr/>
<table border="6" align="center" width="60%" class="table table-bordered">
    <th>Companies</th>
    <tr>
        <td class="tc">
            <form action="/companies/create">
                <button type="submit" class="btn btn-success">Create new company</button>
            </form>
            <table border="1" align="center" width="98%" class="table table-bordered">
                <tr>
                    <td>Companies kist</td>
                </tr>
                <tr>
                    <td>
                        <table border="1" align="center" width="98%" class="table table-bordered">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Logo</th>
                            <th></th>

                            @foreach($companies as $compani)
                                <tr>
                                    <td><a href="/companies/{{ $compani->id }}">{{$compani->name}}</a></td>
                                    <td>{{$compani->email}}</td>
                                    <td>{{$compani->website}}</td>
                                    <td><img src="storage/{{$compani->logo}}" width="100" height="100" alt=""></td>
                                    <td>
                                        <form action="/companies/{{ $compani->id }}/edit">
                                            <button type="submit" class="btn btn-outline-dark">Edit</button>
                                        </form>
                                        <form method="POST" action="/companies/{{ $compani->id }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
{{-- <table>
	<th>Companies</th>
		<table border="1" align="center" cellpadding="9">
		<th>Companies list</th>
	
			
				@foreach($companies as $compani)
					<tr>
						<td>{{$compani->name}}</td>
						<td>{{$compani->email}}</td>
						<td>{{$compani->website}}</td>
						<td><img src="{{$compani->logo}}" width="100" height="100" alt=""></td>
					</tr>
				@endforeach
			
	
		</table>
</table> --}}
{{ $companies->links() }}
</body>
</html>
