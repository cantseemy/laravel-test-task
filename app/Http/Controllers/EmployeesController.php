<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'create', 'edit', 'update', 'destroy']);
    }

    public function create($id)
    {	
    	$employee = Employees::findOrFail($id);
    	return view('employees.create', compact('employee'));
    }

    public function store()
    {
    	request()->validate([
    		'first_name' => 'required|min:3',
    		'last_name' => 'required',
    		'companies_id' => 'required',
    		'email' => 'required',
    		'phone' => 'required'
    	]);

    	$employee = new Employees();

    	$employee->first_name = request('first_name');
    	$employee->last_name = request('last_name');
    	$employee->companies_id = request('companies_id');
    	$employee->email = request('email');
    	$employee->phone = request('phone');
    	$employee->save();

    	return redirect("/companies/{$employee->companies_id}");
    }

    public function edit($id)
    {
    	$employee = Employees::findOrFail($id);
    	return view('employees.edit', compact('employee'));
    }

    public function update($id)
    {
    	$employee = Employees::findOrFail($id);

    	$employee->first_name = request('first_name');
    	$employee->last_name = request('last_name');
    	$employee->companies_id = request('companies_id');
    	$employee->email = request('email');
    	$employee->phone = request('phone');

    	$employee->save();

    	return redirect("/companies/{$employee->companies_id}");
    }

    public function destroy($id)
    {
    	$employee = Employees::findOrFail($id);
    	Employees::findOrFail($id)->delete();

    	return redirect("/companies/{$employee->companies_id}");
    }
}
