<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TransaksiController extends Controller {

    public function showAllTransaksi()
    : JsonResponse {

        return response()->json(Transaksi::all());
    }

    public function showOneTransaksi()
    : JsonResponse{

        return response()->json(Lapangan::find($id));
    }

    public function create(Request $request)
    : JsonResponse{

        $transaksi = Transaksi::create($request->all());

        return response()->json($transaksi, Response::HTTP_CREATED);
    }

    public function update($id, Request $request)
    : JsonResponse{

        $transaksi = Transaksi::findOrFail($id);
        $transaksi = update($request->all());

        return response()->json(Transaksi::all());
    }

    public function delete($id) {

        Transaksi::findOrFail($id)->delete();

        return response('Deleted Successfuly', Response::HTTP_OK);
    }
}
