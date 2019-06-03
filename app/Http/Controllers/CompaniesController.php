<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companies;

class CompaniesController extends Controller
{
    public function index()
    {
        //$companies = Companies::all();
        $companies = Companies::paginate(5);

        return view('index', compact('companies'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {

        request()->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'website' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.request()->logo->getClientOriginalExtension();
        request()->logo->move(public_path('../storage/app/public'), $imageName);

        $company = new Companies();

        $company->name = request('name');
        $company->email = request('email');
        $company->website = request('website');
        $company->logo = $imageName;
        $company->save();

        return redirect('/companies');
    }

    public function edit($id)
    {
        $company = Companies::findOrFail($id);
        return view('edit', compact('company'));
    }

    public function update($id)
    {
        $imageName = time().'.'.request()->logo->getClientOriginalExtension();
        request()->logo->move(public_path('../storage/app/public'), $imageName);

        $company = Companies::findOrFail($id);

        $company->name = request('name');
        $company->email = request('email');
        $company->website = request('website');
        $company->logo = $imageName;
        $company->save();

        return redirect('/companies');
    }

    public function destroy($id)
    {
        Companies::findOrFail($id)->delete();

        return redirect('/companies');
    }

    public function show($id)
    {
        $company = Companies::findOrFail($id);
        return view('show', compact('company'));
    }
}
