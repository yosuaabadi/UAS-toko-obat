<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function tampilproduk(){
       $namaproduk = \DB::table("tblproduk")->get();
       return view("produk")
       ->with("namaProduk",$namaproduk);
    }
    
    public function create(Request $request){
           Produk::create([ 
               "nama" => $request->nama,
               "satuan" => $request->satuan,
               "harga" => $request->harga,
               "status" => "ready",
               ]);
        return redirect('/produk')->with('info', 'Data berhasil ditambahkan!');
    }
    
    public function delete($id){
        Produk::where("id",$id)->delete();
        return redirect('/produk')->with('info','Data berhasil dihapus!');
    }
    
    public function edit($id){
       $produk = \App\Models\Produk::find($id);
       return view("/edit",["produk"=>$produk]);
    }
    
    public function update(Request $request, $id){
        $produk = \App\Models\Produk::find($id);
        $produk->update($request->all());
        return redirect('/produk')->with('info', 'Data berhasil diubah!');
    }
    public function action($id){
        \DB::table("tblproduk")->where("id",$id)->update([
            "status" => "habis",
            "updated_at" => now()
            ]);
        return redirect('/produk');
    }
}

