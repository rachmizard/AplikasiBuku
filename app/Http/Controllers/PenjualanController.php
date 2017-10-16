<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Penjualan;
use App\Buku;
use App\Kasir;
use Carbon\Carbon;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualans = Penjualan::all();
        return view('penjualan.index', compact('penjualans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buku = Buku::all();
        $kasir = Kasir::all();
        return view('penjualan.create')->with('buku', $buku)->with('kasir', $kasir);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'id_buku' => 'required',
        'id_kasir' => 'required',
        'jumlah' => 'required',
        'tanggal' => 'required',
    ]);

        $jumlah = $request['jumlah'];
        $harga = $request['harga'];
        $ppn = $request['ppn'];
        $diskon = $request['diskon'];

        $total = $harga * $jumlah;
        $total_ppn = $total * $ppn / 100;
        $total_diskon = $total * $diskon / 100;
        $total_semua = $total + $total_ppn + $total_diskon;

        $jumlah = $request['jumlah'];
        $tambah_buku = Buku::where('id', '=', $request['id_buku'])->first();

        if ($tambah_buku->stok == 0 || $tambah_buku->stok < 0) {

            $tambah_buku->stok = $jumlah;
            return redirect('home/penjualan/addPenjualan')->with('message', 'Stok pada buku tersebut habis, mohon tunggu stok datang lagi!');
        }else{

        $penjualan = new Penjualan;
        $penjualan->id_buku = $request->id_buku;
        $penjualan->id_kasir = $request->id_kasir;
        $penjualan->jumlah = $request->jumlah;
        $penjualan->total = $total_semua;
        $penjualan->tanggal = $request->tanggal;
        $penjualan->save();

        $tambah_buku->stok -= $jumlah;
        $tambah_buku->update();

            return redirect('home/penjualan')->with('message', 'Berhasil di tambahkan, sisa stok buku')->with('stokbuku', $tambah_buku->stok)->with('namabuku', $tambah_buku->judul);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penjualan = Penjualan::find($id);
        return view('penjualan.single')->with('penjualan', $penjualan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penjualan = Penjualan::find($id);
        $buku = Buku::all();
        $kasir = Kasir::all();
        return view('penjualan.edit')->with('penjualan', $penjualan)->with('buku', $buku)->with('kasir', $kasir);
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
        $this->validate($request, [
        'id_buku' => 'required',
        'id_kasir' => 'required',
        'jumlah' => 'required',
        'total' => 'required',
        'tanggal' => 'required',
    ]);

        $penjualan = Penjualan::find($id);
        $penjualan->id_buku = $request->id_buku;
        $penjualan->id_kasir = $request->id_kasir;
        $penjualan->jumlah = $request->jumlah;
        $penjualan->total = $request->total;
        $penjualan->tanggal = Carbon::now();
        $penjualan->save();
        return redirect('home/penjualan');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect('home/penjualan')->with('hapussatu','Data tersebut berhasil di hapus');
    }

    public function destroyAll(){
        $delete_kabeh = Penjualan::truncate();
        $delete_kabeh->delete();
        return redirect('home/penjualan')->with('messagedelete','Semua report kasir telah dihapus!');
    }


}
