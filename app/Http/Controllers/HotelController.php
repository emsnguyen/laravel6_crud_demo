<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $request) {
        $hotels = Hotel::all();
        $isHas = $request->session()->has("my_name");
        $value = null;
        if ($isHas) {
            $value = $request->session()->pull('my_name', "Mien default");
        }
        return view('hotels', compact('hotels',"value" ));
    }
    public function downloadFile(Request $request) {
        // return $request->all();
        // return response()->file("https://logos-download.com/wp-content/uploads/2019/01/BAC_Credomatic_Logo_new.png");
    }
}
