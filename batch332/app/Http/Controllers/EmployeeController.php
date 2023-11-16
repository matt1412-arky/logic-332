<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee as Employee;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        return view('employee/index', ['employee' => $employee]);
    }

    public function findById($id)
    {
        $employee = DB::table('employees')->where('id', $id)->get();
        return view('employee/index', ['employee' => $employee]);
    }
    public function form()
    {
        return view('employee/form');
    }

    public function simpan(Request $req)
    {
        DB::table('employees')->insert([
            'name' => $req->name,
            'employee_id' => $req->employee_id,
            'position' => $req->position
        ]);
        return redirect('/employee');
    }
}
