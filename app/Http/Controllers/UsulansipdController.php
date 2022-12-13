<?php

namespace App\Http\Controllers;

use App\Imports\UsulansipdImport;
use App\Models\Desa;
use App\Models\Usulan;
use App\Models\Usulansipd;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class UsulansipdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/import_usulan',[
            'collections' => Usulansipd::all()
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
     * @param  \App\Models\Usulansipd  $usulansipd
     * @return \Illuminate\Http\Response
     */
    public function show(Usulansipd $usulansipd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usulansipd  $usulansipd
     * @return \Illuminate\Http\Response
     */
    public function edit(Usulansipd $usulansipd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usulansipd  $usulansipd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usulansipd $usulansipd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usulansipd  $usulansipd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usulansipd $usulansipd)
    {
        //
    }


    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file'
        ]);

        Excel::import(new UsulansipdImport, $request->file('file'));

        return redirect('/import-usulan')->with('success', 'Data Usulan Behasil Di Upload');
    }

    public function processUsulanSipd()
    {
        function ifFoundGetDesaInAlamat($alamat, $desas)
        {
            foreach ($desas as $desa) {
                $contains = Str::contains($alamat, $desa, true);
                if ($contains) {
                    return $desa;
                }
            }
        }

        function getValueUsingRegex($pattern, $text, $location)
        {
            preg_match($pattern, $text, $match);
            return $match[$location] ?? '';
        }

        function createNewUsulan($usulan, $desa)
        {
            // regex for prioritas ((P|p)rioritas\s?+:\s?)+(((f|F)|(NF|nf))([0-9])+\s?)
            Usulan::create([
                'No' => $usulan->No,
                'Tgl_Usul' => date('Y-m-d', strtotime($usulan->Tgl_Usul)),
                'Pengusul' => $usulan->Pengusul,
                'Profil' => $usulan->Profil,
                'Urusan' => $usulan->Urusan,
                'Usulan' => $usulan->Usulan,
                'Permasalahan' => $usulan->Permasalahan,
                'Alamat' => $usulan->Alamat,
                'Desa_id' => $desa->id ?? null,
                'Kecamatan_id' => $desa->kecamatan->id ?? null,
                'Usul_Ke' => '',
                'SKPD_Tujuan_Awal' => $usulan->SKPD_Tujuan_Awal,
                'SKPD_Tujuan_Akhir' => $usulan->SKPD_Tujuan_Akhir,
                'Rekomendasi_Bappeda_Mitra_OPD' => $usulan->Rekomendasi_Bappeda_Mitra_OPD,
                'Koefisien' => getValueUsingRegex('/((K|k)oefisien\s?+:\s?)+([0-9]+\s?+(L|l)okasi)/', $usulan->Rekomendasi_Bappeda_Mitra_OPD, 3),
                'Anggaran' => getValueUsingRegex('/((A|a)nggaran\s?+:\s?)+(([0-9])+\s?)/', $usulan->Rekomendasi_Bappeda_Mitra_OPD, 3),
                'Kategori_Usulan' => $usulan->Kategori_Usulan,
                'Rekomendasi_Kelurahan_Desa' => $usulan->Rekomendasi_Kelurahan_Desa,
                'Koefisien_1' => getValueUsingRegex('/((K|k)oefisien\s?+:\s?)+([0-9]+\s?+(L|l)okasi)/', $usulan->Rekomendasi_Kelurahan_Desa, 3),
                'Anggaran_1' => getValueUsingRegex('/((A|a)nggaran\s?+:\s?)+(([0-9])+\s?)/', $usulan->Rekomendasi_Kelurahan_Desa, 3),
                'Rekomendasi_Kecamatan' => $usulan->Rekomendasi_Kecamatan,
                'Koefisien_2' => getValueUsingRegex('/((K|k)oefisien\s?+:\s?)+([0-9]+\s?+(L|l)okasi)/', $usulan->Rekomendasi_Kecamatan, 3),
                'Anggaran_2' => getValueUsingRegex('/((A|a)nggaran\s?+:\s?)+(([0-9])+\s?)/', $usulan->Rekomendasi_Kecamatan, 3),
                'Rekomendasi_SKPD' => $usulan->Rekomendasi_SKPD,
                'Koefisien_3' => getValueUsingRegex('/((K|k)oefisien\s?+:\s?)+([0-9]+\s?+(L|l)okasi)/', $usulan->Rekomendasi_SKPD, 3),
                'Anggaran_3' => getValueUsingRegex('/((A|a)nggaran\s?+:\s?)+(([0-9])+\s?)/', $usulan->Rekomendasi_SKPD, 3),
                'Rekomendasi_Bappeda' => '',
                'Koefisien_4' => '',
                'Anggaran_4' => '',
                'Status' => '',
            ]);
        }
        function getArrayNameDesa(){
            $arr_desa = [];
            foreach (Desa::all('nama') as $desa) {
                array_push($arr_desa, $desa->nama);
            }
            return $arr_desa;
        }
        // Array Name Of Desa
        $desas = getArrayNameDesa();

        /**
         * Loop all the data in "usulsipd" and match the data in the 'village' table, 
         * if it matches then take the village name and look for the id of the "village" name in the "village" table
         */
        foreach (Usulansipd::all() as $usulan) {
            $contains = Str::contains($usulan->Alamat, $desas, true);
            if ($contains) {
                $desa_name = ifFoundGetDesaInAlamat($usulan->Alamat, $desas);
                $desa_id = Desa::firstWhere('nama', 'like', "%$desa_name%")->get();
                createNewUsulan($usulan, $desa_id[0]);
                //Usulansipd::destroy($usulan->id);
            } else {
                createNewUsulan($usulan, '');
                //Usulansipd::destroy($usulan->id);
            } 
        }
        return view('welcome');
    }
}
