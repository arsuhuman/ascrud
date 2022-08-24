<?php

namespace App\Http\Controllers;

use App\Models\employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function index()

    {
        $data = Employees::latest()->paginate(5);
    
        return view('employees.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'age' => 'required',
           'city' => 'required'
       ]);
   
       Employees::create($request->all());
    
       return redirect()->route('employees.index')
                       ->with('success','Employees created successfully.');
   }

    public function show(employees $employees)
    {
        return view('employees.show',compact('employees'));
    }

    public function edit(employees $employees)
    {
        return view('employees.edit',compact('employees'));
    }

    public function update(Request $request, employees $employees)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'city' => 'required',
        ]);
    
        $employees->update($request->all());
    
        return redirect()->route('employees.index')
                        ->with('success','Employees updated successfully');
    }

    public function destroy(employees $employees)
    {
        $employees->delete();
        return redirect('/employees');
    }
}
