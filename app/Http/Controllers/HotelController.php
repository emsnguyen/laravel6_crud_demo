<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index() {
        $hotels = Hotel::all();
        return view('hotels')->with('hotels', $hotels);
    }
    public function downloadFile(Request $request) {
        return $request->all();
        // return response()->file("https://logos-download.com/wp-content/uploads/2019/01/BAC_Credomatic_Logo_new.png");
    }
}
