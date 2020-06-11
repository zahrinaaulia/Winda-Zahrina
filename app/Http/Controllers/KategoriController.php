<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kategori;
class KategoriController extends Controller
{
    
    public function index()
    {
        //
        $kategori = DB::table('kategoris')
        ->get();
    return view('kategori')->with('kategori',$kategori);

    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
        $kategori = new kategori;
        $kategori->Nama_Kategori=$request->namakategori;
        $kategori->save();

        return back();
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit(request $request)
    {
        //

        DB::table('kategoris')
        ->where('id', $request->id_kategori)
        ->update(['Nama_Kategori' => $request->namakategori]);

        return back();
  
    }

  
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
        DB::table('kategoris')->where('id', '=', $id)->delete();
        return back();
    }
}
