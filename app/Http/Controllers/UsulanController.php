<?php

namespace App\Http\Controllers;

use App\Imports\UsulanImport;
use App\Models\Desa;
use App\Models\Kecamatan;
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
        return view('dashboard/dashboard',[
            'collection' => Usulan::all(),
            
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        return view('dashboard/history_usulan',[
            'collection' => Usulan::all(),
            'desas' => Desa::all(),
            'kecamatans' => Kecamatan::all()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usulan(){
        return view('dashboard/usulan',[
            'collection' => Usulan::all(),
            'desas' => Desa::all(),
            'kecamatans' => Kecamatan::all()
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
        $validated = $request->validate([
            'No'=> 'required',
            'Tgl_Usul'=> 'required',
            'Pengusul'=> 'required',
            'Profil'=> 'required',
            'Urusan'=> 'required',
            'Usulan'=> 'required',
            'TipeUsulan'=> 'required',
            'Permasalahan'=> 'required',
            'Alamat'=> 'required',
            'Desa_id'=>'required',
            'Kecamatan_id'=>'required',
            'Usul_Ke'=> 'required',
            'SKPD_Tujuan_Awal'=> 'required',
            'SKPD_Tujuan_Akhir'=> 'required',
            'Rekomendasi_Bappeda_Mitra_OPD'=> 'nullable|sometimes',
            'Koefisien'=> 'nullable|sometimes',
            'Anggaran'=> 'nullable|sometimes',
            'Kategori_Usulan'=> 'nullable|sometimes',
            'Rekomendasi_Kelurahan_Desa'=> 'nullable|sometimes',
            'Koefisien_1'=> 'nullable|sometimes',
            'Anggaran_1'=> 'nullable|sometimes',
            'Rekomendasi_Kecamatan'=> 'nullable|sometimes',
            'Koefisien_2'=> 'nullable|sometimes',
            'Anggaran_2'=> 'nullable|sometimes',
            'Rekomendasi_SKPD'=> 'nullable|sometimes',
            'Koefisien_3'=> 'nullable|sometimes',
            'Anggaran_3'=> 'nullable|sometimes',
            'Rekomendasi_Bappeda'=> 'nullable|sometimes',
            'Koefisien_4'=> 'nullable|sometimes',
            'Anggaran_4'=> 'nullable|sometimes',
            'Status'=> 'nullable|sometimes'
        ]);
        Usulan::create($validated);
        return redirect()->back()->with('succes','Data berhasil di simpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usulan  $usulan
     * @return \Illuminate\Http\Response
     */
    public function show(Usulan $usulan)
    {
        return response()->json([
            'success' => true,
             'message' => 'Detail data usulan',
             'data' => $usulan
        ]);
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
        $validated = $request->validate([
            'No'=> 'required',
            'Tgl_Usul'=> 'required',
            'Pengusul'=> 'required',
            'Profil'=> 'required',
            'Urusan'=> 'required',
            'Usulan'=> 'required',
            'TipeUsulan'=> 'required',
            'Permasalahan'=> 'required',
            'Alamat'=> 'required',
            'Desa_id'=>'required',
            'Kecamatan_id'=>'required',
            'Usul_Ke'=> 'required',
            'SKPD_Tujuan_Awal'=> 'required',
            'SKPD_Tujuan_Akhir'=> 'required',
            'Rekomendasi_Bappeda_Mitra_OPD'=> 'nullable|sometimes',
            'Koefisien'=> 'nullable|sometimes',
            'Anggaran'=> 'nullable|sometimes',
            'Kategori_Usulan'=> 'nullable|sometimes',
            'Rekomendasi_Kelurahan_Desa'=> 'nullable|sometimes',
            'Koefisien_1'=> 'nullable|sometimes',
            'Anggaran_1'=> 'nullable|sometimes',
            'Rekomendasi_Kecamatan'=> 'nullable|sometimes',
            'Koefisien_2'=> 'nullable|sometimes',
            'Anggaran_2'=> 'nullable|sometimes',
            'Rekomendasi_SKPD'=> 'nullable|sometimes',
            'Koefisien_3'=> 'nullable|sometimes',
            'Anggaran_3'=> 'nullable|sometimes',
            'Rekomendasi_Bappeda'=> 'nullable|sometimes',
            'Koefisien_4'=> 'nullable|sometimes',
            'Anggaran_4'=> 'nullable|sometimes',
            'Status'=> 'nullable|sometimes'
        ]);
        Usulan::where('id',$usulan->id)->update($validated);
        return redirect()->back()->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usulan  $usulan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usulan $usulan)
    {
        Usulan::destroy($usulan->id);
        return redirect()->back()->with('success','Data berhasil di hapus');
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
