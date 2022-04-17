<?php

namespace App\Http\Controllers;

use App\Models\Arena;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArenaController extends Controller {

    public function showAllArenas()
    : JsonResponse {

        return response()->json(Arena::all());
    }

    public function showOneArenas()
    : JsonResponse{

        return response()->json(Arena::find($id));
    }

    public function create(Request $request)
    : JsonResponse{

        $arena = Arena::create($request->all());

        return response()->json($arena, Response::HTTP_OK);
    }

    public function update($id, Request $request)
    : JsonResponse{

        $arena = Arena::findOrFail($id);
        $arena = update($request->all());

        return response()->json(Arena::all());
    }

    public function delete($id) {

        Arena::findOrFail($id)->delete();

        return response('Deleted Successfuly', Response::HTTP_OK);
    }
}
