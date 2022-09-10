<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all(); //untuk extends data kategori
        $supplier = Supplier::all(); //untuk extends data supplier
        return view('barang.add', compact('kategori', 'supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric|min:1',
            'supplier_id' => 'required',
            'kategori_id' => 'required'
        ]);

        $barang = Barang::create($request->all());

        return redirect('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        $kategori = Kategori::find($id);
        $supplier = Supplier::find($id);
        return view('barang.form', compact('barang', 'kategori', 'supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric|min:0',
            'supplier_id' => 'required',
            'kategori_id' => 'required'
        ]);

        $barang->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'supplier_id' => $request->supplier_id,
            'kategori_id' => $request->kategori_id
        ]);

        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect('barang');
    }
}
