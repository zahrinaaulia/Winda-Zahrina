<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bahan;

class EditMakananController extends Controller
{
    
    public function index()
    {
      $kategori = DB::table('kategoris')->get();

      $bahan = DB::table('kategoris')
            ->join('bahans', 'id_kategori', '=', 'kategoris.id')
            ->get();
        return view('edit_makanan')->with('bahan',$bahan)->with('kategori',$kategori);
    }

    public function create()
    {
        //
        return view('edit_makanan');
    }

    
    public function store(Request $request)
    {
        
        $bahan = new bahan;
        $bahan->Nama_Bahan = $request->namabahan;
        $bahan->Jumlah = $request->jumlahbahan;
        $bahan->Satuan = $request->satuanbahan;
        $bahan->Harga_Satuan = $request->hargabahan;
        $bahan->id_kategori = $request->id_kategori;
        $bahan->save();
        return back();
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit(request $request)
    {
        //
        //$bahan = DB::table('bahans')->select('Jumlah')->where('id', '=', $request->id_bahan)->first();
        
        DB::table('bahans')
        ->where('id', $request->id_bahan)
        ->update(['Nama_Bahan' => $request->namabahan]);

        DB::table('bahans')
                     ->where('id', $request->id_bahan)
                     ->update(['Satuan' => $request->satuanbahan]);
               
        DB::table('bahans')
                     ->where('id', $request->id_bahan)
                     ->update(['Harga_Satuan' => $request->hargabahan]);
        return back();
    }

    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        DB::table('bahans')->where('id', '=', $id)->delete();
        return back();
    }
}
