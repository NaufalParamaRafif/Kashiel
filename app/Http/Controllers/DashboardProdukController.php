<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard_produk.index', [
            'produks' => Produk::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard_produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk'   => 'required',
            'harga'         => 'required',
            'stok'          => 'required',
            'category_id'   => 'required',
        ]);
        
        
        Produk::create([
            'nama_produk'   => $request->nama_produk,
            'harga'         => $request->harga,
            'stok'          => $request->stok,
            'category_id'   => $request->category_id,
            'created_at'    => now(),
        ]);
        
        return redirect()->route('dashboard_produk.index')->with(['success' => 'Data Produk Berhasil Disimpan!']);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('dashboard_produk.show', ['produk' => Produk::findOrFail($id),]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard_produk.edit', ['produk' => Produk::findOrFail($id),]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_produk'   => 'required',
            'harga'         => 'required',
            'stok'          => 'required',
            'category_id'   => 'required',
        ]);
        
        $produk = Produk::findOrFail($id);
        
        $produk->update([
            'nama_produk'   => $request->nama_produk,
            'harga'         => $request->harga,
            'stok'          => $request->stok,
            'category_id'   => $request->category_id,
            'created_at'    => now(),
        ]);

        return redirect()->route('dashboard_produk.index')->with(['success' => 'Data Produk Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produk::findOrFail($id)->delete();

        return redirect()->route('dashboard_produk.index')->with(['success' => 'Data Produk Berhasil Dihapus!']);
    }
}
