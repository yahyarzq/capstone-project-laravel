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
                                <div id="example1_head" class="p-1"></div>
                            </div>
                            {{-- add table-responsive to maka table responsive horizontal --}}
                            <table id="table-history" class="table table-bordered table-hover table-striped text-nowrap">
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
                    serverSide: true,
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
                            // a tipycal url would be /{id} with type='DELETE'
                            url: url_ws_mock_ok,
                            type: 'DELETE',
                            data: rowdata,
                            success: success,
                            error: error
                        });

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
                    url: '/usulan/query/data',
                    method: "get"
                });
            }

            getTableData().done(function(records) {
                let headerName = Object.keys(records.data[0]);
                let headerHtml = makeColumnHeader(headerName);
                let footerHtml = makeColumnFooter(headerName);

                var columns = [];

                $("#table-history").append(headerHtml);
                $("#table-history").append(footerHtml);

                for (let i = 0; i < headerName.length; i++) {
                    columns.push({
                        "data": headerName[i]
                    });


                }

                var datatable = $("#table-history").DataTable(dataTableDef(columns));

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
