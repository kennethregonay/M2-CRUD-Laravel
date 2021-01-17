<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Resources\EmployeeResource;
use App\Http\Resources\EmployeeResourceCollection;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /*
        @param Employee $employee
        @return EmployeeResource
    */

    // application manipulator

    // show a 1 data from the database.
    public function show (Employee $employee):EmployeeResource
    {
        return new EmployeeResource($employee);   
    }
    //show all data from the database.
   public function index():EmployeeResourceCollection
   {
       return new EmployeeResourceCollection(Employee::paginate());
   }

   //create a new record
   public function store(Request $request)
   {
        $request->validate([
            'Firstname' => 'required',
            'Lastname' => 'required',
            'Middlename' => 'required',
            'Address' => 'required',
            'Gender' => 'required',
            'Birthdate' => 'required',
            'Position_Code' => 'required',
        ]);
          $employee = Employee::create($request->all());  
            return new EmployeeResource($employee);
   }

   // update a new record credentials
   public function update (Employee $employee,Request $request):EmployeeResource
   {
        $employee->update($request->all());
        return new EmployeeResource ($employee);
   }    

   //delete a record
   public function destroy (Employee $employee)
   {
        $employee->delete();
        return response()->json();
   }

}
