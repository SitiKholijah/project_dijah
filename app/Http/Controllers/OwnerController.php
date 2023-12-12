<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owner = Owner::latest()->paginate(10);
        return view('owner.index', compact('owner'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('owner.tambah');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $owner = Owner::created([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
        ]);
        if ($owner){
            return redirect()->route('owner.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('owner.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Owner $owner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owner $owner)
    {
        //
    }
}
