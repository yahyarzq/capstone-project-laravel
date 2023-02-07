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


@section('scripts')
    <script>
        $(function() {
            function makeColumnHeader(colHeaderName) {
                let table_header = '<thead class="table-header"><tr>';
                $.each(colHeaderName, function(data, value) {
                    table_header += '<th>' + value + '</th>';
                });
                table_header += '</thead></tr>';
                return table_header;
            }

            function makeColumnFooter(colHeaderName) {
                let table_footer = '<tfoot class="table-footer"><tr>';
                $.each(colHeaderName, function(data, value) {
                    table_footer += '<th>' + value + '</th>';
                });
                table_footer += '</tfoot></tr>';
                return table_footer;
            }

            function dataTableDef(columnDef) {
                var tableDef = {
                    stateSave: true,
                    processing: true,
                    serverSide: false,
                    ajax: '/usulan/data',
                    columns: columnDef,
                    dom: 'Blfrtip',
                    select: 'single',
                    altEditor: true,
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
                        // {
                        //     text: 'Add',
                        //     name: 'add' // do not change name
                        // },
                        {
                            extend: 'selected', // Bind to Selected row
                            text: 'Edit',
                            name: 'edit' // do not change name
                        },
                        // {
                        //     extend: 'selected', // Bind to Selected row
                        //     text: 'Delete',
                        //     name: 'delete' // do not change name
                        // },
                        {
                            text: 'Refresh',
                            name: 'refresh' // do not change name
                        },
                        {
                            extend: 'excel',
                            title: 'SIFULAN',
                            messageTop: 'Data yang di export hanya data yang tampil',
                            exportOptions: {
                                columns: []
                            }
                        }, "print", "colvis"
                    ],
                    onAddRow: function(datatable, rowdata, success, error) {
                        $.ajax({
                            // a tipycal url would be / with type='PUT'
                            url: url_ws_mock_ok,
                            type: 'POST',
                            data: rowdata,
                            success: success,
                            error: error
                        });
                    },
                    onDeleteRow: function(datatable, rowdata, success, error) {
                        $.ajax({
                            // a tipycal url would be /{id} with type='DELETE'
                            url: url_ws_mock_ok,
                            type: 'DELETE',
                            data: rowdata,
                            success: success,
                            error: error
                        });
                    },
                    onEditRow: function(datatable, rowdata, success, error) {
                        // console.log(rowdata);
                        $.ajax({
                            // a tipycal url would be /{id} with type='POST'
                            url: `/usulan/${rowdata._id}`,
                            type: 'PUT',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data: rowdata,
                            success: function(params) {
                                $(document).Toasts('create', {
                                    class: 'bg-success',
                                    title: 'Aksi Berhasil',
                                    subtitle: '',
                                    body: () => {
                                        const data = "Data Berhasil Diupdate"
                                        return data;
                                    }
                                });
                                $('#modal').modal('hide');
                                return params;
                            },
                            error: function(params) {
                                alert(
                                    "Gagal menghubungkan ke Peladen(Server), Silahkan cek koneksi internet anda!");
                            }
                        });

                    },
                    initComplete: function() {
                        $("#example1_wrapper > div:nth-child(1").after(
                            '<div class="d-flex row ml-0 mb-1" id="filter_row"> </div>');
                        // var filter_row = $('<div class=" d-flex row ml-2" id="filter_row"> </div>')
                        //     .appendTo(
                        //         ' #example1_wrapper > div:nth-child(2)');
                        this.api()
                            // .columns([6, 1, 10, 9, 13])
                            .columns()
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
                                // var select = $(
                                //         '<select class="form-control "style="max-width: 140px; height: 38px;" ><option value="">' +
                                //         theadname + '</option></select>'
                                //     )
                                var select = $('<select><option value="">' + theadname +
                                        '</option></select>')
                                    // .appendTo('#filter_row')
                                    .appendTo($(column.footer()).empty())
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
                };
                return tableDef;
            }

            function getTableData() {
                return $.ajax({
                    url: '/usulan/data',
                    method: "get"
                });
            }

            getTableData().done(function(records) {
                let headerName = Object.keys(records.data[0]);
                let headerHtml = makeColumnHeader(headerName);
                let footerHtml = makeColumnFooter(headerName);

                var columns = [];

                $("#example1").append(headerHtml);
                $("#example1").append(footerHtml);

                for (let i = 0; i < headerName.length; i++) {
                    columns.push({
                        "data": headerName[i]
                    });


                }

                var datatable = $("#example1").DataTable(dataTableDef(columns));

                datatable.draw();

                new $.fn.dataTable.Buttons(datatable, {
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
                            text: 'Add',
                            name: 'add' // do not change name
                        },
                        {
                            extend: 'selected', // Bind to Selected row
                            text: 'Edit',
                            name: 'edit' // do not change name
                        },
                        {
                            extend: 'selected', // Bind to Selected row
                            text: 'Delete',
                            name: 'delete' // do not change name
                        },
                        {
                            text: 'Refresh',
                            name: 'refresh' // do not change name
                        },
                        {
                            extend: 'excel',
                            title: 'SIFULAN',
                            messageTop: 'Data yang di export hanya data yang tampil',
                            exportOptions: {
                                columns: []
                            }
                        }, "print", "colvis"
                    ]
                });

                datatable.buttons(0, null).container().prependTo('#example1_head');
            });


        });
    </script>
@endsection
