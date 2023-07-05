<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::all();
        return response()->json($barang);
    }

    public function show($id){
        $barang = Barang::find($id);
        return response()->json($barang);
    }

    public function create(Request $request){
        $barang = new Barang();

        $barang->nama_barang = $request->nama_barang;
        $barang->harga_jual = $request->harga_jual;
        $barang->harga_beli = $request->harga_beli;
        $barang->stok = $request->stok;
        $barang->deskripsi = $request->deskripsi;
        $barang->kategori = $request->kategori;

        $barang->save();
        
        return response()->json("Barang berhasil ditambahkan! :)");
    }

    public function update(Request $request, $id){
        $barang = Barang::find($id);

        $barang->nama_barang = $request->nama_barang;
        $barang->harga_jual = $request->harga_jual;
        $barang->harga_beli = $request->harga_beli;
        $barang->stok = $request->stok;
        $barang->deskripsi = $request->deskripsi;
        $barang->kategori = $request->kategori;

        $barang->save();
        
        return response()->json($barang);
    }

    public function delete($id){
        $barang = Barang::find($id);

        $barang->delete();

        return response()->json("Barang berhasil dihapus! ^^");
    }
}
 