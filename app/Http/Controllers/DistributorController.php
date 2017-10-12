<?php

namespace App\Http\Controllers;

use App\Distributor;
use App\Pasok;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(null !== 'querysearchofdistributor') {
            $cari = $request->get('querysearchofdistributor');
            $distributor = Distributor::orderBy('id', 'DESC')->where('nama_distributor','LIKE','%'. $cari .'%')->orWhere('alamat','LIKE','%'. $cari .'%')->paginate(10);
              
        }else{
            $distributor = Distributor::orderBy('id')->paginate(10);
        
        }
        return view('distributor.index', ['distributor' => $distributor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distributor.addDistributor');
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
           'nama_distributor' => 'required', 
           'alamat' => 'required', 
           'telepon' => 'required',
        ]);
        
        $distributor = new Distributor;
        $distributor->nama_distributor = $request->nama_distributor;
        $distributor->alamat = $request->alamat;
        $distributor->telepon = $request->telepon;
        $distributor->save();
        return redirect('home/distributor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
   {
         $distributor = Distributor::find($id);
         return view('distributor.detailDistributor')->with('distributor' ,$distributor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distributor = Distributor::find($id);
        return view('distributor.editDistributor')->with('distributor', $distributor);
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
        'nama_distributor' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
    ]);

        $distributor = Distributor::find($id);
        $distributor->nama_distributor = $request->nama_distributor;
        $distributor->alamat = $request->alamat;
        $distributor->telepon = $request->telepon;
        $distributor ->save();
        return redirect('home/distributor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distributor = Distributor::find($id);
        $distributor ->delete();
        return redirect('home/distributor');
    }
}
