<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(null !== 'search') {
            $cari = $request->get('search');
            $buku = buku::orderBy('id', 'DESC')->where('judul','LIKE','%'. $cari .'%')->orWhere('noisbn','LIKE','%'. $cari .'%')->paginate(10);
              
        }else{
            $buku = buku::orderBy('id', 'DESC')->paginate(10);
        
        }
        return view('buku.index')->with('buku', $buku);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create data
        $this->validate($request, [
            'judul' => 'required',
            'noisbn' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' =>'required',
            'ppn' => 'required',
            'diskon' => 'required',
        ]);

         $tambah = new buku();
         $tambah->judul = $request['judul'];
         $tambah->noisbn = $request['noisbn'];
         $tambah->penulis = $request['penulis'];
         $tambah->penerbit = $request['penerbit'];
         $tambah->tahun = $request['tahun'];
         $tambah->stok = $request['stok'];
         $tambah->harga_pokok = $request['harga_pokok'];
         $tambah->harga_jual = $request['harga_jual'];
         $tambah->ppn = $request['ppn'];
         $tambah->diskon = $request['diskon'];

         $tambah->save();

         return redirect()->to('home/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //detail
        $showdetail = buku::findOrfail($id);
        return view('buku.detail')->with('showdetail', $showdetail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit 
        $edit = buku::where('id', $id)->first();
        return view('buku.edit')->with('edit', $edit);
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
        //progress edit
        $update = buku::where('id', $id)->first();
        $update->judul = $request['judul'];
        $update->noisbn = $request['noisbn'];
        $update->penulis = $request['penulis'];
        $update->penerbit = $request['penerbit'];
        $update->tahun = $request['tahun'];
        $update->stok = $request['stok'];
        $update->harga_pokok = $request['harga_pokok'];
        $update->harga_jual = $request['harga_jual'];
        $update->ppn = $request['ppn'];
        $update->diskon = $request['diskon'];
        $update->update();

        $showdetail = buku::findOrfail($id);
        return view('buku.detail')->with('showdetail', $showdetail);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //hapus
        $delete = buku::find($id);
        $delete->delete();

        return redirect()->to('home/buku');
    }
}
