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
                            <div class="d-flex justify-content-end mb-3">
                                <div class="p-1">
                                    <a href="/dashboard/export-usulan" class="btn btn-success">
                                        <i class="fas fa-folder"></i>
                                        Export Usulan
                                    </a>
                                </div>
                            </div>
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
                                        <th>Koefisien</th>
                                        <th>Rekomendasi_Kelurahan_Desa</th>
                                        {{-- <th>Koefisien</th>
                                        <th>Anggaran</th> --}}
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


@section("scripts")
<script>
    $(function() {
        // $('#table_import').DataTable({
        //     "paging": true,
        //     "lengthChange": true,
        //     "searching": false,
        //     "ordering": true,
        //     "info": true,
        //     "autoWidth": false,
        //     "responsive": false,
        //     "scrollX": true,
        //     "fixedHeader": true,
        // }).columns.adjust();

        $("#table-history").DataTable({
            stateSave: true,
            processing: true,
            serverSide: true,
            ajax: '/usulan/query/data',
            columns: [{
                    data: 'No',
                    name: 'No'
                },
                {
                    data: 'Tgl_Usul',
                    name: 'Tgl_Usul',
                    // render: function (data) { 
                    //     return moment(data,'YYYY-MM-DD').format('DD-MM-YYYY'); 
                    // }
                },
                {
                    data: 'Pengusul',
                    name: 'Pengusul'
                },
                {
                    data: 'Profil',
                    name: 'Profil'
                },
                {
                    data: 'Urusan',
                    name: 'Urusan'
                },
                {
                    data: 'Usulan',
                    name: 'Usulan'
                },
                {
                    data: 'TipeUsulan',
                    name: 'TipeUsulan'
                },
                {
                    data: 'Permasalahan',
                    name: 'Permasalahan'
                },
                {
                    data: 'Alamat',
                    name: 'Alamat'
                },
                {
                    data: 'Desa',
                    name: 'Desa'
                },
                {
                    data: 'Kecamatan',
                    name: 'Kecamatan'
                },
                {
                    data: 'Usul_Ke',
                    name: 'Usul_Ke'
                },
                {
                    data: 'SKPD_Tujuan_Awal',
                    name: 'SKPD_Tujuan_Awal'
                },
                {
                    data: 'SKPD_Tujuan_Akhir',
                    name: 'SKPD_Tujuan_Akhir'
                },
                {
                    data: 'Rekomendasi_Bappeda_Mitra_OPD',
                    name: 'Rekomendasi_Bappeda_Mitra_OPD'
                },
                {
                    data: 'Koefisien',
                    name: 'Koefisien'
                },
                {
                    data: 'Anggaran',
                    name: 'Anggaran'
                },
                {
                    data: 'Kategori_Usulan',
                    name: 'Kategori_Usulan'
                },
                {
                    data: 'Koefisien_1',
                    name: 'Koefisien_1'
                },
                {
                    data: 'Rekomendasi_Kelurahan_Desa',
                    name: 'Rekomendasi_Kelurahan_Desa'
                },
                // {
                //     data: 'Koefisien_1',
                //     name: 'Koefisien_1'
                // },
                // {
                //     data: 'Anggaran_1',
                //     name: 'Anggaran_1'
                // },
                {
                    data: 'Rekomendasi_Kecamatan',
                    name: 'Rekomendasi_Kecamatan'
                },
                {
                    data: 'Koefisien_2',
                    name: 'Koefisien_2'
                },
                {
                    data: 'Anggaran_2',
                    name: 'Anggaran_2'
                },
                {
                    data: 'Rekomendasi_SKPD',
                    name: 'Rekomendasi_SKPD'
                },
                {
                    data: 'Koefisien_3',
                    name: 'Koefisien_3'
                },
                {
                    data: 'Anggaran_3',
                    name: 'Anggaran_3'
                },
                {
                    data: 'Rekomendasi_Bappeda',
                    name: 'Rekomendasi_Bappeda'
                },
                {
                    data: 'Koefisien_4',
                    name: 'Koefisien_4'
                },
                {
                    data: 'Anggaran_4',
                    name: 'Anggaran_4'
                },
                {
                    data: 'Status',
                    name: 'Status',
                    render: function(data,type,row){
                        if (data === 'Usulan disetujui') {
                            return `<span class="badge badge-success">${data}</span>`;
                        } 
                        else if (data === 'Usulan tidak disetujui') {
                            return `<span class="badge badge-danger">${data}</span>`;
                        } 
                        else {
                            return `<span class="badge badge-primary">${data}</span>`;
                        }
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    'render': function(data, type, row) {
                        return `<a class="btn btn-primary btn-sm" id="btn-item-view"
                                                data-id="${row.id}" data-toggle="modal"
                                                data-attr="/usulan/${row.id}" data-target="#modal-view">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>`
                    },
                    orderable: false, //Disable ordering on this column
                    searchable: false //Disable search on this column
                },

            ],
            initComplete: function() {},
            "responsive": false,
            "lengthChange": true,
            "searching": true,
            "autoWidth": false,
            "scrollX": true,
            "fixedHeader": false,


        });
        // $('#table-history').DataTable({
        //     "paging": true,
        //     "lengthChange": true,
        //     "searching": true,
        //     "ordering": true,
        //     "info": false,
        //     "autoWidth": false,
        //     "responsive": false,
        //     "scrollX": true,
        // });
    });


    //     $(document).ready(function () {
    //      var scrolledOnce;
    //      $(window).on("scroll", function () {
    //          let scrollTop = $(this).scrollTop();
    //          if (scrollTop != 0) scrolledOnce = true;
    //          if (scrollTop <= 0 && scrolledOnce) {
    //              //top reached
    //              table.columns.adjust();
    //              //it seems fixedHead adjust not necessary
    //              //table.fixedHeader.adjust();
    //              scrolledOnce = false;
    //          }
    //      });
    //  });
</script>
@endsection
