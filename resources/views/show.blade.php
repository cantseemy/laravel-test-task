@extends('layout')

@section('title')

@section('body')
    <table border="6" align="center" width="60%" class="table table-bordered">
        <th>{{ $company->name }}</th>
        <tr>
            <td>
                <table border="1" align="center" width="98%" class="table table-bordered">
                    <tr>
                        <td>Companies Employees</td>
                    </tr>
                    <tr>
                        <td>
                            <table border="1" align="center" width="98%" class="table table-bordered">
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th></th>

                                @foreach($company->employees as $employ)
                                    <tr>
                                        <td>{{$employ->first_name}}</td>
                                        <td>{{$employ->last_name}}</td>
                                        <td>{{$employ->email}}</td>
                                        <td>{{$employ->phone}}</td>
                                        @if (!Auth::guest())
                                        <td>
                                            <form action="/employees/{{$employ->id}}/edit">
                                                <button type="submit" class="btn btn-outline-dark">Edit</button>
                                            </form>
                                            <form action="/employees/{{$employ->id}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                            @endif
                                    </tr>
                                @endforeach

                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        @if (!Auth::guest())
    </table>
    <form action="/employees/{{ $company->id }}/create">
        <button type="submit" class="btn btn-success">Add new Employee</button>
    </form>
        @endif

@endsection
