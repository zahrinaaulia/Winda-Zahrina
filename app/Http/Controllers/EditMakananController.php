<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class EditMakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bahan = DB::table('kategoris')
            ->join('bahans', 'id_kategori', '=', 'kategoris.id')
            ->get();
        return view('edit_makanan',['bahan' => $bahan ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('edit_makanan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $bahan = new bahan;
        $bahan->id = $request->id_bahan;
        $bahan->Nama_Bahan = $request->namabahan;
        $bahan->Jumlah = $request->jumlah;
        $bahan->Satuan = $request->satuanbahan;
        $bahan->Harga_Satuan = $request->hargabahan;
        $bahan->created_at = date("Y-m-d");
        $bahan->id_kategori = $request->id_kategori;
        $bahan->save();
        DB::table('bahan')
                     ->where('id','=', $request->id_bahan)
                     ->update('Nama_Bahan');
        DB::table('bahan')
                     ->where('id','=', $request->id_bahan)
                     ->update('Satuan');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $bahan = DB::table('bahans')->select('Jumlah')->where('id', '=', $request->id_bahan)->first();
        // $databahan = DB::table('bahans')->select('Jumlah')->where('id', '=', $request->id_bahan)->first();
        // $stok = $databahan->Jumlah + $sebelumBKeluar->Jumlah - $request->jumlahedit;
        DB::table('bahans')
                     ->where('id', $request->id_bahan)
                     ->update(['Satuan' => $request->satuanbahan]);
        DB::table('bahans')
                     ->where('id', $request->id_bahan)
                     ->update(['Jumlah' => $request->jumlahbahan]);
                    
        DB::table('bahans')
                     ->where('id', $request->id_bahan)
                     ->update(['Harga_Satuan' => $hargabahan]);

        DB::table('bahans')
                     ->where('id', $request->id_bahan)
                     ->update(['Nama_Kategori' => $kategoribahan]);
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // DB::destroy($bahan->id);
        // return redirect('/')->with('status','Data Bahan Berhasil Dihapus !');

        //$bahan = DB::table('bahans')->select('Nama_Bahan','id','Harga_Satuan','Jumlah','Satuan','id_kategori')->where('id', '=', $id)->first();
        DB::table('bahans')->where('id', '=', $id)->delete();
        return back();
    }
}
