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
                                        <th>Desa/Kelurahan</th>
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
                                    {{-- @foreach ($collection as $item)
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
                                            <td>{{ $item->Rekomendasi_Kecamatan }}</td>
                                            <td>{{ $item->Koefisien_2 }}</td>
                                            <td>{{ $item->Anggaran_2 }}</td>
                                            <td>{{ $item->Rekomendasi_SKPD }}</td>
                                            <td>{{ $item->Koefisien_3 }}</td>
                                            <td>{{ $item->Anggaran_3 }}</td>
                                            <td>{{ $item->Rekomendasi_Bappeda }}</td>
                                            <td>{{ $item->Koefisien_4 }}</td>
                                            <td>{{ $item->Anggaran_4 }}</td>
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
                                                <a class="btn btn-danger btn-sm" id="btn-item-delete"
                                                    data-id="{{ $item->id }}" data-toggle="modal"
                                                    data-attr="/usulan/{{ $item->id }}" data-target="#modal-delete">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach --}}
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


@section("scripts")
<script>
    $(function() {
        var datatable = $("#example1").DataTable({
            stateSave: true,
            processing: true,
            serverSide: false,
            ajax: '/usulan/data',
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
                        if (data.toUpperCase() === 'USULAN DISETUJUI') {
                            return `<span class="badge badge-success">${data}</span>`;
                        } 
                        else if (data.toUpperCase() === 'USULAN TIDAK DISETUJUI') {
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
                    render: function(data, type, row) {
                        return `<a class="btn btn-primary btn-sm" id="btn-item-view"
                                                data-id="${row.id}" data-toggle="modal"
                                                data-attr="/usulan/${row.id}" data-target="#modal-view">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>
                                <a class="btn btn-info btn-sm" id="btn-item-edit"
                                                data-id="${row.id}" data-toggle="modal"
                                                data-attr="/usulan/${row.id}" data-target="#modal-editS">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                <a class="btn btn-danger btn-sm" id="btn-item-delete"
                                                data-id="${row.id}" data-toggle="modal"
                                                data-attr="/usulan/${row.id}" data-target="#modal-delete">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>`;
                    },
                    orderable: false, //Disable ordering on this column
                    searchable: false //Disable search on this column
                }
            ],
            initComplete: function() {
                $("#example1_wrapper > div:nth-child(1").after(
                    '<div class="d-flex row ml-0 mb-1" id="filter_row"> </div>');
                // var filter_row = $('<div class=" d-flex row ml-2" id="filter_row"> </div>')
                //     .appendTo(
                //         ' #example1_wrapper > div:nth-child(2)');
                this.api()
                    .columns([6, 1, 10, 9, 13])
                    .every(function(d) {
                        // var s1=$(`<div class="col-sm-2">
                    //                 <div class="form-group" id="example1_wr_form_control">
                    //                     <label>Select</label>
                    //                     <div id="indse">
                    //                         <select class="form-control" >
                    //                             <option>option 1</option> 
                    //                         </select>
                    //                     </div>
                    //                 </div>
                    //             </div>`).appendTo('#fil_row');
                        // var s1=`<div class="col-sm-2">
                    //                 <div class="form-group" id="example1_wr_form_control">
                    //                     <label>Select</label>
                    //                         <select id="indse" class="form-control" >
                    //                             <option>option 1</option> 
                    //                         </select>
                    //                 </div>
                    //             </div>`;
                        var column = this;
                        var theadname = $('#example1 th').eq([d]).text();
                        var select = $(
                                '<select class="form-control "style="max-width: 140px; height: 38px;" ><option value="">' +
                                theadname + '</option></select>'
                            )
                            .appendTo('#filter_row')
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function(d, j) {
                                select.append('<option value="' + d + '">' + d +
                                    '</option>');
                            });
                    });
                // columns.adjust();
            },
            // fixedColumns: {
            //     left: 0, // Only for client side rendering
            //     right: 0
            //     // leftColumns: 1
            // },
            "responsive": false,
            "lengthChange": true,
            "searching": true,
            "autoWidth": false,
            "scrollX": true,
            "fixedHeader": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });

        new $.fn.dataTable.Buttons( datatable, {
            buttons: [
                // {
                //     text: 'Button 1',
                //     action: function ( e, dt, node, conf ) {
                //     console.log( 'Button 1 clicked on' );
                //     }
                // },
                // {
                //     text: 'Button 2',
                //     action: function ( e, dt, node, conf ) {
                //     console.log( 'Button 2 clicked on' );
                //         }
                // }
                {
                extend: 'excel',
                title:'SIFULAN',
                // messageTop: 'Data yang di export hanya data yang tampil',
                exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29]
                    }
                }, "print", "colvis"
            ]
        });

        datatable.buttons( 0, null ).container().prependTo('#example1_head');

    });
</script>
@endsection
