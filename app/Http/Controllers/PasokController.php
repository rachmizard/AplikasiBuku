<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Distributor;
use App\Pasok;
use App\Buku;

class PasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //retriving data
        $distributor = Distributor::all();
        $bukuaing = Buku::all();
        if(null !== 'searchdata') {
            $cari = $request->get('searchdata');
            $pasok = Pasok::orderBy('id', 'DESC')->where('id_distributor','LIKE','%'. $cari .'%')->orWhere('id_buku','LIKE','%'. $cari .'%')->paginate(10);
              
        }else{
            $pasok = Pasok::orderBy('id')->paginate(10);
        
        }
        return view('pasok.index', ['pasok' => $pasok]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retrieving
        $distributor = Distributor::all();
        $buku = Buku::all();
        return view('pasok.addPasok', compact('buku', 'distributor'));
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
            'id_distributor' => 'required',
            'id_buku' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
        ]);

         $tambah = new Pasok();
         $tambah->id_distributor = $request['id_distributor'];
         $tambah->id_buku = $request['id_buku'];
         $tambah->jumlah = $request['jumlah'];
         $tambah->tanggal = $request['tanggal'];
         $tambah->save();

         return redirect()->to('/home/pasok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //detail pada tabel pasok
        $showdetail = Pasok::findOrfail($id);
        return view('pasok.detailPasok')->with('showdetail', $showdetail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Pasok::find($id);
        $distributor = Distributor::all();
        $buku = Buku::all();
        return view('pasok.editPasok', compact(['edit', $edit],['buku', $buku], ['distributor', $distributor]));
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

         //create data
        $this->validate($request, [
            'distributor' => 'required',
            'buku' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
        ]);
        //progress edit
        $update = Pasok::where('id', $id)->first();
        $update->id_distributor = $request->distributor;
        $update->id_buku = $request->buku;
        $update->jumlah = $request->jumlah;
        $update->tanggal = $request->tanggal;
        $update->update();

        return redirect()->to('home/pasok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Pasok::find($id);
        $delete->delete();

        return redirect()->to('home/pasok');
    }
}
