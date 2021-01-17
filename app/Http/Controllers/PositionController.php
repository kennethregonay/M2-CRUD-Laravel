<?php

namespace App\Http\Controllers;

use App\Http\Resources\PositionResource;
use App\Http\Resources\PositionResourceCollection;
use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
        // show / fetch 1 record from the db.
    public function show (Position $position):PositionResource
   {
    return new PositionResource($position);
   }

   //show all data from the database
    public function index ():PositionResourceCollection
    {
        return new PositionResourceCollection(Position::paginate());
    }

      //create a new record
   public function store(Request $request)
   {
        $request->validate([
            'Position_Name' => 'required',
            'Department_Code' => 'required',
        ]);
          $position = Position::create($request->all());  
            return new PositionResource($position);
   }
  
   // update a new record credentials
   public function update (Position $position,Request $request):PositionResource
   {
        $position->update($request->all());
        return new PositionResource ($position);
   }    

   
   //delete a record
   public function destroy (Position $position)
   {
        $position->delete();
        return response()->json();
   }
}
