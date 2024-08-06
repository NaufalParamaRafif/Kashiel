<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class DashboardPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard_pelanggan.index', [
            'pelanggans' => Pelanggan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard_pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat'         => 'required',
            'nomor_tlp'      => 'required',
        ]);
        
        
        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat'         => $request->alamat,
            'nomor_tlp'      => $request->nomor_tlp,
            'created_at'    => now(),
        ]);
        
        return redirect()->route('dashboard_pelanggan.index')->with(['success' => 'Data Pelanggan Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard_pelanggan.show', ['pelanggan' => Pelanggan::findOrFail($id),]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard_pelanggan.edit', [
            'pelanggan' => Pelanggan::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat'         => 'required',
            'nomor_tlp'      => 'required',
        ]);
        $pelanggan = Pelanggan::findOrFail($id);
        
        $pelanggan->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat'         => $request->alamat,
            'nomor_tlp'      => $request->nomor_tlp,
            'created_at'    => now(),
        ]);
        
        return redirect()->route('dashboard_pelanggan.index')->with(['success' => 'Data Pelanggan Diubah!']);
    }
}
