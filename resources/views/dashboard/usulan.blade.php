@extends('dashboard/layouts/main')
@section('container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Usulan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Usulan</li>
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
                            <div class="d-flex justify-content-end mb-3">
                                <div class="p-1">
                                    <a class="btn btn-primary" id="btn-item-create" data-toggle="modal"
                                        data-target="#modal-import">
                                        <i class="fas fa-folder">
                                        </i>
                                        Import Usulan
                                    </a>
                                </div>
                                <div id="example1_head" class="p-1"></div>
                            </div>
                            {{-- add table-responsive to maka table responsive horizontal --}}
                            <table id="example1" class="table table-bordered table-hover table-striped text-nowrap">
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
                                        <th>Usul Ke</th>
                                        <th>SKPD Tujuan Awal</th>
                                        <th>SKPD Tujuan Akhir</th>
                                        <th>Rekomendasi Bappeda Mitra OPD</th>
                                        <th>Koefisien</th>
                                        <th>Anggaran</th>
                                        <th>Kategori Usulan</th>
                                        <th>Koefisien</th>
                                        <th>Rekomendasi Kelurahan Desa</th>
                                        {{-- <th>Koefisien</th>
                                        <th>Anggaran</th> --}}
                                        <th>Rekomendasi Kecamatan</th>
                                        <th>Koefisien</th>
                                        <th>Anggaran</th>
                                        <th>Rekomendasi SKPD</th>
                                        <th>Koefisien</th>
                                        <th>Anggaran</th>
                                        <th>Rekomendasi Bappeda</th>
                                        <th>Koefisien</th>
                                        <th>Anggaran</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($collection as $item)
                                        <tr>
                                            <td>{{ $item->No }}</td>
                                            <td>{{  date('d-m-Y', strtotime($item->Tgl_Usul)) }}</td>
                                            <td>{{ $item->Profil }}</td>
                                            <td>{{ $item->Pengusul }}</td>
                                            <td>{{ $item->Urusan }}</td>
                                            <td>{{ $item->Usulan }}</td>
                                            <td>{{ $item->TipeUsulan }}</td>
                                            <td>{{ $item->Permasalahan }}</td>
                                            <td>{{ $item->Alamat }}</td>
                                            <td>{{ $item->Desa }}</td>
                                            <td>{{ $item->Kecamatan }}</td>
                                            <td>{{ $item->Usul_Ke }}</td>
                                            <td>{{ $item->SKPD_Tujuan_Awal }}</td>
                                            <td>{{ $item->SKPD_Tujuan_Akhir }}</td>
                                            <td>{{ $item->Rekomendasi_Bappeda_Mitra_OPD }}</td>
                                            <td>{{ $item->Koefisien }}</td>
                                            <td>{{ $item->Anggaran }}</td>
                                            <td>{{ $item->Kategori_Usulan }}</td>
                                            <td>{{ $item->Koefisien_1 }}</td>
                                            <td>{{ $item->Rekomendasi_Kelurahan_Desa }}</td>
                                            {{-- <td>{{ $item->Koefisien_1 }}</td>
                                            <td>{{ $item->Anggaran_1 }}</td> --}}
                                            <td>{{ $item->Rekomendasi_Kecamatan }}</td>
                                            <td>{{ $item->Koefisien_2 }}</td>
                                            <td>{{ $item->Anggaran_2 }}</td>
                                            <td>{{ $item->Rekomendasi_SKPD }}</td>
                                            <td>{{ $item->Koefisien_3 }}</td>
                                            <td>{{ $item->Anggaran_3 }}</td>
                                            <td>{{ $item->Rekomendasi_Bappeda }}</td>
                                            <td>{{ $item->Koefisien_4 }}</td>
                                            <td>{{ $item->Anggaran_4 }}</td>
                                            {{-- <td>{{ $item->Status }}</td> --}}
                                            <td class="d-flex justify-content-center">
                                                @if ($item->Status == 'Usulan disetujui')
                                                    <span class="badge badge-success">{{ $item->Status }}</span>
                                                @elseif ($item->Status == 'Usulan tidak disetujui')
                                                    <span class="badge badge-danger">{{ $item->Status }}</span>
                                                @else
                                                    <span class="badge badge-primary">{{ $item->Status }}</span>
                                                @endif
                                            </td>
                                            <td class="project-actions text-right">
                                                {{-- <div class="d-flex justify-content-between"> --}}
                                                <a class="btn btn-primary btn-sm" id="btn-item-view"
                                                    data-id="{{ $item->id }}" data-toggle="modal"
                                                    data-attr="/usulan/{{ $item->id }}" data-target="#modal-viewS">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View
                                                </a>
                                                <a class="btn btn-info btn-sm" id="btn-item-edit"
                                                    data-id="{{ $item->id }}" data-toggle="modal"
                                                    data-attr="/usulan/{{ $item->id }}" data-target="#modal-editS">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                {{-- </div> --}}
                                                <a class="btn btn-danger btn-sm" id="btn-item-delete"
                                                    data-id="{{ $item->id }}" data-toggle="modal"
                                                    data-attr="/usulan/{{ $item->id }}" data-target="#modal-delete">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Usul</th>
                                            <th>Pengusul</th>
                                            <th>Profil</th>
                                            <th>Urusan</th>
                                            <th>Usulan</th>
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
                                    </tfoot> --}}
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

        @include('dashboard/components/modals/modal_import')
        @include('dashboard/components/modals/modal_view')
        @include('dashboard/components/modals/modal_edit')
        @include('dashboard/components/modals/modal_delete')

    </section>
    <!-- /.content -->
@endsection
