<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Kasir;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(null !== 'searchkasir') {
            $cari = $request->get('searchkasir');
            $kasir = Kasir::orderBy('id', 'DESC')->where('nama','LIKE','%'. $cari .'%')->orWhere('alamat','LIKE','%'. $cari .'%')->paginate(10);
              
        }else{
            $kasir = Kasir::orderBy('id', 'DESC')->paginate(10);
        
        }
        return view('kasir.index', compact('kasir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('kasir.addKasir');
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
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'status' => 'required',
            'username' => 'required',
            'password' => 'required',
            'akses' => 'required',
        ]);

         $tambah = new Kasir();
         $tambah->nama = $request['nama'];
         $tambah->alamat = $request['alamat'];
         $tambah->telepon = $request['telepon'];
         $tambah->status = $request['status'];
         $tambah->username = $request['username'];
         $tambah->password = $request['password'];
         $tambah->akses = $request['akses'];
         $tambah->save();

         return redirect()->to('/home/kasir');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
