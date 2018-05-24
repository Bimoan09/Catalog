<?php

namespace App\Http\Controllers;

use App\Product;
use App\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $product = Product::when($request->keyword, function ($query) use ($request) {
        $query->where('namaproduct', 'like', "%{$request->keyword}%")
            ->orWhere('id', 'like', "%{$request->keyword}%")
            ->orWhere('tanggaldibuat', 'like', "%{$request->keyword}%");
    })->paginate(10);
    $product->appends($request->only('keyword'));

    return view('kontak',compact('product'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontak_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        
            // menggunakan elequent untuk menyimpan ke database
     
        $product = new Product;
      
        $product -> namaproduct = $request->namaproduct;
        $product -> descriptionproduct = $request->descriptionproduct;
        $product -> currency = $request->currency;
        $product -> ukuran = $request->ukuran;
        $product -> warna = $request->warna;
        $product -> type = $request->type;
        $product -> stock = $request->stock;
        $product -> harganormal = $request->harganormal;
        $product -> hargadiskon = $request->hargadiskon;
        $product -> tanggaldibuat = $request->tanggaldibuat;

        $product->save();
       
        
        return redirect()->route('kontak')->with('alert-success','Data berhasil diTAMBAH!');
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
        $product = Product::where('id',$id)->get();

        return view('kontak_edit',compact('product'));
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
       
    
            // menggunakan elequent untuk menyimpan ke database
        $product = Product::where('id',$id)->first();
        $product -> namaproduct = $request->input('namaproduct');
        $product -> descriptionproduct = $request->input('descriptionproduct');
        $product -> currency = $request->input('currency');
        $product -> ukuran = $request->input('ukuran');
        $product -> warna = $request->input('warna');
        $product -> type = $request->input('type');
        $product -> stock = $request->input('stock');
        $product -> harganormal = $request->input('harganormal');
        $product -> hargadiskon = $request->input('hargadiskon');
        $product -> tanggaldibuat = $request->input('tanggaldibuat');

        $product->save();
       

        return redirect()->route('kontak')->with('alert-success','Data berhasil diubah!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id',$id);
        $product->delete();
        return redirect()->route('kontak')->with('alert-success','Data berhasi dihapus!');
    }
}
