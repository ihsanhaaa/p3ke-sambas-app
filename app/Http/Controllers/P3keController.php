<?php

namespace App\Http\Controllers;

use App\Imports\P3keExcelImport;
use App\Models\Individu;
use App\Models\Keluarga;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class P3keController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keluargas = Keluarga::all();

        return view('p3ke.index', compact('keluargas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('p3ke.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'file_excel' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('file_excel');

        // dd($file);

        Excel::import(new P3keExcelImport, $file);

        return redirect()->back()->with('success', 'File Excel berhasil diimport.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $keluarga = Keluarga::find($id);

        $individus = Individu::where('keluarga_id', $keluarga->id_keluarga)->get();

        // dd($individus);

        return view('p3ke.show', compact('keluarga', 'individus'));
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
