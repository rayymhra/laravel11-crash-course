<?php

namespace App\Http\Controllers\hi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class halooController extends Controller
{
    // function untuk mengakses halooController
    public function index(){
        // return "<h1>haloo dari controller</h1>";

        // biar data dari variabel nama masuk ke coba.halo blade
        $nama = "Shawn Mendes";
        $data = ['namaOrang'=> $nama];
        return view("coba.halo", $data);
    }
}
