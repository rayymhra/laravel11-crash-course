<?php

//artisan make:controller todo/todoController --resource

namespace App\Http\Controllers\todo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class todoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("todo.app");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //untuk menampilkan form
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //untuk penyimpanan data
    {
        //dd -> die dump : untuk melihat apa saja yg dikirimkan dari form yg kita miliki / mengeluarkan data yg dikirimkan melalui form
        // dd($request);
        
        // validasi -> minimal huruf
        $request->validate([
            // name dari input ""=> "required",
            "task" => 'required|min:3|max:25'
        ],[  //kalo mau custom teks
            "task.required" => "form wajib diisi",
            "task.min" => "minimal 3 huruf",
            "task.max" => "maksimal 25 huruf"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
