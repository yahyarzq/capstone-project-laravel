@extends('dashboard/layouts/main')
@section('container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>History Usulan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">History Usulan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title">Usulan</h3>
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body ">
                            {{-- add table-responsive to maka table responsive horizontal --}}
                            <table id="table-history" class="table table-bordered table-hover table-striped text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Usul</th>
                                        <th>Pengusul</th>
                                        <th>Profil</th>
                                        <th>Urusan</th>
                                        <th>Usulan</th>
                                        <th>Tipe Usulan</th>
                                        <th>Permasalahan</th>
                                        <th>Alamat</th>
                                        <th>Desa</th>
                                        <th>Kecamatan</th>
                                        <th>Usul_Ke</th>
                                        <th>SKPD_Tujuan_Awal</th>
                                        <th>SKPD_Tujuan_Akhir</th>
                                        <th>Rekomendasi_Bappeda_Mitra_OPD</th>
                                        <th>Koefisien</th>
                                        <th>Anggaran</th>
                                        <th>Kategori_Usulan</th>
                                        <th>Rekomendasi_Kelurahan_Desa</th>
                                        <th>Koefisien</th>
                                        <th>Anggaran</th>
                                        <th>Rekomendasi_Kecamatan</th>
                                        <th>Koefisien</th>
                                        <th>Anggaran</th>
                                        <th>Rekomendasi_SKPD</th>
                                        <th>Koefisien</th>
                                        <th>Anggaran</th>
                                        <th>Rekomendasi_Bappeda</th>
                                        <th>Koefisien</th>
                                        <th>Anggaran</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        @include('dashboard/components/modals/modal_view')
    </section>
    <!-- /.content -->
@endsection
