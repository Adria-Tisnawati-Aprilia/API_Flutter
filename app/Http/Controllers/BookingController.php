<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookingController extends Controller {

    public function showAllBooking()
    : JsonResponse {

        return response()->json(Booking::all());
    }

    public function showOneBooking()
    : JsonResponse{

        return response()->json(Booking::find($id));
    }

    public function create(Request $request)
    : JsonResponse{

        $booking = Booking::create($request->all());

        return response()->json($booking, Response::HTTP_CREATED);
    }

    public function update($id, Request $request)
    : JsonResponse{

        $booking = Booking::findOrFail($id);
        $booking = update($request->all());

        return response()->json(Booking::all());
    }

    public function delete($id) {

        Booking::findOrFail($id)->delete();

        return response('Deleted Successfuly', Response::HTTP_OK);
    }
}
