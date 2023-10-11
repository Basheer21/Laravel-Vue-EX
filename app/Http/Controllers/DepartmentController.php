<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        return view('managment.departments.index', ['departments' => $departments]);
    }

    public function create()
    {
        return view('managment.departments.create');
    }


    public function store(Request $request)
    {
        Department::create(
            [
                'user_id' =>  1,
                'director_id' => $request->director_id,
                'name' => $request->name
            ]
        );

        return redirect()->route('departmentsIndex');
    }


    public function edit($id)
    {
        $department = Department::find($id);
        return view('managment.departments.edit', ['department' => $department]);
    }


    public function update(Request $request, Department $department)
    {
        // $department->director_id = $request->director_id;
        // $department->name = $request->name;
        // $department->save();

        $department ->update([
            'director_id' => $request->director_id,
            'name' => $request->name,
        ]);

        return redirect()->route('departmentsIndex');
    }



    public function delete(Request $request,Department $department)
    {
        // $department = Department::find($id);

        // dd($department);
        $department->delete();
        // Department::find($id)f->delete();


        return redirect()->route('departmentsIndex');
    }




    public function test()
    {
        $department = Department::all()->last()->name;

        return response()->json($department->name);
    }
}
