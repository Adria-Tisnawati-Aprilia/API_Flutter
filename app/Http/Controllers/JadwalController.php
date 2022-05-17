<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JadwalController extends Controller {

    public function showAllJadwal()
    : JsonResponse {

        return response()->json(Jadwal::all());
    }

    public function showOneJadwal()
    : JsonResponse{

        return response()->json(Jadwal::find($id));
    }

    public function create(Request $request)
    : JsonResponse{

        $jadwal = Jadwal::create($request->all());

        return response()->json($jadwal, Response::HTTP_CREATED);
    }

    public function update($id, Request $request)
    : JsonResponse{

        $jadwal = Jadwal::findOrFail($id);
        $jadwal = update($request->all());

        return response()->json(Jadwal::all());
    }

    public function delete($id) {

        Jadwal::findOrFail($id)->delete();

        return response('Deleted Successfuly', Response::HTTP_OK);
    }
}
