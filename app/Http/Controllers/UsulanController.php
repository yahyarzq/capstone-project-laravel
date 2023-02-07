<?php

namespace App\Http\Controllers;

use App\Exports\UsulanExport;
use App\Imports\UsulanImport;
use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\Usulan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Maatwebsite\Excel\HeadingRowImport;

class UsulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt =  Carbon::now()->setTimezone('Asia/Jakarta');
        return view('dashboard/dashboard', [
            'collection' => Usulan::all(),
            'usulan_total' => Usulan::count(),
            'usulan_weekly' => Usulan::whereBetween("Tgl_Usul", [
                $dt->startOfWeek()->format('Y-m-d'),
                $dt->endOfWeek()->format('Y-m-d')
            ])->count(),
            'usulan_monthly' => Usulan::whereBetween("Tgl_Usul", [
                $dt->startOfMonth()->format('Y-m-d'),
                $dt->endOfMonth()->format('Y-m-d')
            ])->count(),
            'desas' => DB::collection('usulans')
                ->raw(function ($collection) {
                    return $collection->aggregate([
                        [
                            '$group' => [
                                '_id' => '$kelurahan',
                                'count' => [
                                    '$sum' => 1
                                ]
                            ]
                        ]
                    ]);
                }),
            'kecamatans' => DB::collection('usulans')
                ->raw(function ($collection) {
                    return $collection->aggregate([
                        [
                            '$group' => [
                                '_id' => '$kecamatan',
                                'count' => [
                                    '$sum' => 1
                                ]
                            ]
                        ]
                    ]);
                }),
            'dinas' => DB::collection('usulans')
                ->raw(function ($collection) {
                    return $collection->aggregate([
                        [
                            '$group' => [
                                '_id' => '$usulan_ke',
                                'count' => [
                                    '$sum' => 1
                                ]
                            ]
                        ]
                    ]);
                }),
            'tipe_usulan' => DB::collection('usulans')
            ->raw(function ($collection) {
                return $collection->aggregate([
                    [
                        '$group' => [
                            '_id' => '$TipeUsulan',
                            'count' => [
                                '$sum' => 1
                            ]
                        ]
                    ]
                ]);
            }),
        ]);
    }


    public function getUsulan(Request $request)
    {
        if (true) {

            $data = Usulan::all();
            $dats = collect($data);
            $datas = DataTables::of($dats)->toJson();
                // ->addIndexColumn()
                // ->addColumn('action', function($row){
                //     $actionBtn = '<a class="btn btn-primary btn-sm" id="btn-item-view" data-toggle="modal" data-target="#modal-viewS"><i class="fas fa-folder"></i> View</a>';
                //     return $actionBtn;
                // })
                // ->rawColumns(['action'])
                // ->make(true);
            return $datas;
        }
        // if($request->ajax()){
        //     $model = Usulan::with(['Desa','Kecamatan']);
        //     return DataTables::eloquent();

        // }

        return redirect(404);
    }

    public function getDataUsulan(Request $request)
    {
        if (true) {
            $dt =  Carbon::now()->setTimezone('Asia/Jakarta');
            $data =  Usulan::whereBetween("Tgl_Usul", [
                $dt->startOfWeek()->format('Y-m-d'),
                $dt->endOfWeek()->format('Y-m-d')
            ])
                ->orWhere('Status', 'NOT LIKE', "%Usulan Disetujui%")
                ->get();
            $dats = collect($data);
            return DataTables::of($dats)->toJson();
            // return $data->toJson();
        }
        return redirect(404);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        return view('dashboard/history_usulan', []);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usulan()
    {

        $dt =  Carbon::now()->setTimezone('Asia/Jakarta');
        return view('dashboard/usulan', [
            // 'collection' => Usulan::whereBetween("Tgl_Usul", [
            //     $dt->startOfWeek()->format('Y-m-d'),
            //     $dt->endOfWeek()->format('Y-m-d')
            // ])
            // ->orWhere('Status', 'NOT LIKE',"%Usulan disetujui%")
            // ->get(),
            // 'status' => Usulan::all()->sortBy('Status')->pluck('Status')->unique(),
            // 'desa' => Usulan::all()->sortBy('Desa')->pluck('Desa')->unique(),
            // 'kecamatan' => Usulan::all()->sortBy('Kecamatan')->pluck('Kecamatan')->unique(),
            'status' => DB::collection('usulans')->distinct('Status')->orderBy('Status')->get(),
            'desa' => DB::collection('usulans')->distinct('Desa')->orderBy('Desa')->get(),
            'kecamatan' => DB::collection('usulans')->distinct('Kecamatan')->orderBy('Kecamatan')->get(),
            'skpd_tujuan_awal' => DB::collection('usulans')->distinct('SKPD_Tujuan_Awal')->orderBy('SKPD_Tujuan_Awal')->get(),
            'skpd_tujuan_akhir' => DB::collection('usulans')->distinct('SKPD_Tujuan_Akhir')->orderBy('SKPD_Tujuan_Akhir')->get(),
        ]);
    }
    // public function usulan()
    // {
    //     return view('dashboard/usulan', [
    //         'collection' => Usulan::all(),
    //         'desas' => Desa::all(),
    //         'kecamatans' => Kecamatan::all()
    //     ]);
    // }

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
            'No' => 'required',
            'Tgl_Usul' => 'required',
            'Pengusul' => 'required',
            'Profil' => 'required',
            'Urusan' => 'required',
            'Usulan' => 'required',
            'TipeUsulan' => 'required',
            'Permasalahan' => 'required',
            'Alamat' => 'required',
            'Desa' => 'required',
            'Kecamatan' => 'required',
            'Usul_Ke' => 'required',
            'SKPD_Tujuan_Awal' => 'required',
            'SKPD_Tujuan_Akhir' => 'required',
            'Rekomendasi_Bappeda_Mitra_OPD' => 'nullable|sometimes',
            'Koefisien' => 'nullable|sometimes',
            'Anggaran' => 'nullable|sometimes',
            'Kategori_Usulan' => 'nullable|sometimes',
            'Rekomendasi_Kelurahan_Desa' => 'nullable|sometimes',
            'Koefisien_1' => 'nullable|sometimes',
            'Anggaran_1' => 'nullable|sometimes',
            'Rekomendasi_Kecamatan' => 'nullable|sometimes',
            'Koefisien_2' => 'nullable|sometimes',
            'Anggaran_2' => 'nullable|sometimes',
            'Rekomendasi_SKPD' => 'nullable|sometimes',
            'Koefisien_3' => 'nullable|sometimes',
            'Anggaran_3' => 'nullable|sometimes',
            'Rekomendasi_Bappeda' => 'nullable|sometimes',
            'Koefisien_4' => 'nullable|sometimes',
            'Anggaran_4' => 'nullable|sometimes',
            'Status' => 'nullable|sometimes'
        ]);
        Usulan::create($validated);
        return redirect()->back()->with('succes', 'Data berhasil di simpan');
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
        // DB::collection('usulans')
        // ->where('_id', $usulan->_id)
        // ->update($request->query('data'),['upsert'=> true]);
        $usulan = Usulan::where('_id', $usulan->_id)->update($request->except('_id'),['upsert'=> true]);
        // $usulan->update($request->data,['upsert'=> true]);
        return response()->json($usulan);
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
        return redirect()->back()->with('success', 'Data berhasil di hapus');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx'
        ]);
        // $headings = (new HeadingRowImport)->toArray($request->file('file'));
        // $needles = ['no', 'tgl_usul', 'pengusul', 'profil', 'urusan', 'usulan', 'permasalahan', 'alamat', 'kecamatan', 'kelurahan', 'usul_ke', 'skpd_tujuan_awal', 'skpd_tujuan_akhir', 'rekomendasi_bappeda_mitra_opd', 'koefisien', 'anggaran', 'kategori_usulan', 'koefisien', 'rekomendasi_kelurahandesa', 'rekomendasi_kecamatan', 'koefisien', 'anggaran', 'rekomendasi_skpd', 'koefisien', 'anggaran', 'rekomendasi_bappeda', 'koefisien', 'anggaran', 'status'];
        // foreach ($headings[0][0] as $key => $head) {
        //     if ((!Str::contains($head, $needles, true)) and ($key < 29)) {
        //         return redirect()->back()->with('importError', 'Pastikan Header Kolom Sudah Benar');
        //     }
        // }
        Excel::import(new UsulanImport, $request->file('file'));
        return redirect()->back()->with('importSuccess', 'Data Usulan Behasil Di Upload');
    }

    public function export()
    {
        return (new UsulanExport)->download('Usulan ' . date('d-m-y h:i:s') . '.xlsx');
    }
}
