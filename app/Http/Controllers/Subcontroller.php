<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sub;
use Validator;

class Subcontroller extends Controller
{
    public function sub(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'subscription' => 'required',
            'plan' => 'required',
            'cost' => 'required|integer'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $order = Sub::create($request->all());

        return response()->json($order, 201);
    }
}
