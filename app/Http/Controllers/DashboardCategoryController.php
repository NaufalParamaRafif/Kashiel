<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard_category.index', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        Category::create([
            'name' => $request->name,
            'created_at'      => now(),
        ]);
        
        return redirect()->route('dashboard_category.index')->with(['success' => 'Data Category Berhasil Disimpan!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard_category.edit', ['category' => Category::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        $category = Category::findOrFail($id);
        
        $category->update([
            'name' => $request->name,
            'updated_at'=> now(),
        ]);
        
        return redirect()->route('dashboard_category.index')->with(['success' => 'Data Category Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::findOrFail($id)->delete();

        return redirect()->route('dashboard_category.index')->with(['success' => 'Data Category Berhasil Dihapus!']);
    }
}
