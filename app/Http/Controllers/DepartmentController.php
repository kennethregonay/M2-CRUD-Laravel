<?php

namespace App\Http\Controllers;

use App\Department;
use App\Http\Resources\DepartmentResource;
use App\Http\Resources\DepartmentResourceCollection;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    // show / fetch 1 record from the db.
   
    public function show (Department $department):DepartmentResource
   {
    return new DepartmentResource($department);
   }

     //show all data from the database.
     public function index():DepartmentResourceCollection
     {
         return new DepartmentResourceCollection(Department::paginate());
     }

      //create a new record
   public function store(Request $request)
   {
        $request->validate([
            'Department_Name' => 'required',
        ]);
          $department = Department::create($request->all());  
            return new DepartmentResource($department);
   }


     // update a new record credentials
   public function update (Department $department,Request $request):DepartmentResource
   {
        $department->update($request->all());
        return new DepartmentResource ($department);
   }    

   //delete a record
   public function destroy (Department $department)
   {
        $department->delete();
        return response()->json();
   }

}
