<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employeeIndex')    ;
    
       
    }

    public function fetchEmployeeRecords()
    {
        $employees = Employee::get(); 
        return response()->json([
            'employee'=>$employees,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $phone = $request->get('phone');
        $image = $request->file('image');
        $filename = $image->getClientOriginalName();

        if(!empty($image)){
            $image->move('employees/',$filename);
        }

        $employee = new Employee([
            'name'=>$name,
            'phone'=>$phone,
            'image'=>$filename,
        ]);
           
            $employee->save();
            
            return response()->json([
                'status'=>'200'
            ]);

            }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::find($id);
        if($employee){
            return response()->json([
                'status'=>200,
                'employee'=>$employee, 
            ]);
        }else{
            return response()->json([
                'status'=>404,
                'message'=>'Employee Not Found',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::find($id);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
