<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Barang;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all(); //untuk extends data kategori
        $pembeli = Pembeli::all(); //untuk extends data supplier
        return view('penjualan.add', compact('barang', 'pembeli'));
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
            'barang_id' => 'required',
            'pembeli_id' => 'required',
            'jumlah' => 'required|numeric|min:1',
            'harga_jual' => 'required|numeric'
        ]);

        // mengurangi stock barang
        $penjualan = Penjualan::create([
            'barang_id' => $request->barang_id,
            'pembeli_id' => $request->pembeli_id,
            'jumlah' => $request->jumlah,
            'harga_jual' => $request->harga_jual
        ]);

        $barang_id = $request->barang_id;
        $barang = Barang::find($barang_id);
        $barang->stock -= $request->jumlah;
        $barang->update();

        $penjualan->save();

        // $penjualan = Penjualan::create($request->all());

        return redirect('penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penjualan = Penjualan::find($id);
        $barang = Barang::all();
        $pembeli = Pembeli::all();
        return view('penjualan.form', compact('penjualan', 'pembeli', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        $validate = $request->validate([
            'barang_id' => 'required',
            'pembeli_id' => 'required',
            'jumlah' => 'required|numeric|min:1',
            'harga_jual' => 'required|numeric'
        ]);

        $penjualan->update([
            'barang_id' => $request->barang_id,
            'pembeli_id' => $request->pembeli_id,
            'jumlah' => $request->jumlah,
            'harga_jual' => $request->harga_jual
        ]);

        return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();

        return redirect('penjualan');
    }
}
