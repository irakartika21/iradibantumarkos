<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $outlets = outlet::all();
        return view('outlet.index', compact('outlets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $outlets = outlet::all();
        return view('outlet.create', compact('outlets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama'   => 'required',
            'alamat' => 'required',
            'telp'   => 'required'
        ]);

        outlet::create([
            'nama'   => $request->nama,
            'alamat' => $request->alamat,
            'telp'   => $request->telp
        ]);
        return redirect('/outlet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet)
    {
        //
        $outlets = outlet::all();
        return view('outlet.show', compact('outlet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Outlet $outlet)
    {
        //
        $outlets = Outlet::find($outlet->id);
        return view('outlet.edit', compact('outlet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outlet $outlet)
    {
        //
        $request->validate([
            'nama'   => 'required',
            'alamat' => 'required',
            'telp'   => 'required',
        ]);

       $outlets = Outlet::find($outlet->id);
       $outlets-> nama   = $request-> nama;
       $outlets-> alamat = $request-> alamat;
       $outlets-> telp   = $request-> telp;
     $outlets->update();
       return redirect('/outlet');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outlet $outlet)
    {
        //
        $outlets = Outlet::find($outlet->id);
        $outlets->delete();
        return redirect('outlet');
    }
}
