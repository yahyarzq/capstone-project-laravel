<?php

namespace App\Http\Controllers;

use App\Imports\UsulanImport;
use App\Models\Usulan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('history_usulan',[
            'collection' => Usulan::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        return view('history_usulan',[
            'collection' => Usulan::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function groupByFisik(){
        return view('usulan_fisik',[
            'collection' => Usulan::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function groupByNonFisik(){
        return view('usulan_non_fisik',[
            'collection' => Usulan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usulan  $usulan
     * @return \Illuminate\Http\Response
     */
    public function show(Usulan $usulan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usulan  $usulan
     * @return \Illuminate\Http\Response
     */
    public function edit(Usulan $usulan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usulan  $usulan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usulan $usulan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usulan  $usulan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usulan $usulan)
    {
        //
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file'
        ]);
        
        Excel::import(new UsulanImport , $request->file('file'));

        return redirect('/import-usulan')->with('success','Data Usulan Behasil Di Upload');
    }
}
