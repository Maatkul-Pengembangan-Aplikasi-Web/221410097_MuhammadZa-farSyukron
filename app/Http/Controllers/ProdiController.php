<?php

namespace App\Http\Controllers;
use App\Models\Prodi;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = Prodi::all(); 
        return view('prodi.index', compact('prodis'));

        return view('prodi.index');
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        Prodi::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('prodi')->with('success', 'Program Studi berhasil ditambahkan');
    }
}
