<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlantRequest;
use App\Http\Requests\UpdatePlantRequest;
use App\Http\Resources\PlantCollection;
use App\Http\Resources\PlantResource;
use App\Models\Plant;
use Validator;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PlantCollection(Plant::all());
    }

    public function store(StorePlantRequest $request)
    {
        try {
            $input = $request->all();
    
            if ($photo = $request->file('photo')) {
                $destinationPath = 'photo/';
                $plantImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
                $request->merge(['photo' => $plantImage]);
                $photo->move($destinationPath, $plantImage);
                $input['photo'] = $destinationPath.$plantImage;
            }
            
            $plant = Plant::create($input);
            
            return response()->json([
                'code' => '200',
                'message' => 'Plant created successfully.', 
                'data'  =>  new PlantResource($plant)
            ]);
        }
        catch (\Throwable $th) {
            return response()->json([ "code" => '500', "message" => $th->getMessage() ], 500);
        }
    }
}
