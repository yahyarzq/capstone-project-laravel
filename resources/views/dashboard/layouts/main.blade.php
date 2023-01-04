<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIFULAN</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="../../plugins/datatables-fixedheader/css/fixedHeader.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('dashboard/components/navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('dashboard/components/sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('container')
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">

            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; <a>SIFULAN</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->


    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="../../plugins/datatables-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../../plugins/datatables-fixedheader/js/fixedHeader.bootstrap4.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    {{-- MomentJs --}}
    <script src="../../plugins/moment/moment.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });
        })
        bsCustomFileInput.init();
    </script>
    <script>
        $(function() {
            var datatable = $("#example1").DataTable({
                initComplete: function() {
                    $("#example1_wrapper > div:nth-child(1").after(
                        '<div class="d-flex row ml-0 mb-1" id="filter_row"> </div>');
                    // var filter_row = $('<div class=" d-flex row ml-2" id="filter_row"> </div>')
                    //     .appendTo(
                    //         ' #example1_wrapper > div:nth-child(2)');
                    this.api()
                        .columns([6, 1, 9, 10, 13])
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
                                    '<select class="form-control "style="max-width: 140px; height: 38px;" ><option value="">By ' +
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
                "responsive": false,
                "lengthChange": true,
                "autoWidth": false,
                "scrollX": true,
                "fixedHeader": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                "buttons": ["excel", "print", "colvis"]
            }).buttons().container().appendTo('#example1_head');

        });
    </script>
    <script>
        $(function() {
            $('#table_import').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": false,
                "scrollX": true,
                "fixedHeader": true,
            }).columns.adjust();

            $("#table-history").DataTable({
                processing: true,
                serverSide: true,
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
                        data: 'Rekomendasi_Kelurahan_Desa',
                        name: 'Rekomendasi_Kelurahan_Desa'
                    },
                    {
                        data: 'Koefisien_1',
                        name: 'Koefisien_1'
                    },
                    {
                        data: 'Anggaran_1',
                        name: 'Anggaran_1'
                    },
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
                            let status = (data === 'SETUJU') ? `<span class="badge badge-success">${data}</span>` : `<span class="badge badge-danger">${data}</span>`;
                            return status;
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
    <script>
        // if ({{ $errors->count() }} > 0) {
        //     $(document).Toasts('create', {
        //         class: 'bg-danger',
        //         title: 'Import Gagal',
        //         subtitle: '',
        //         body: 'Import Usulan Gagal.'
        //     })
        // }
        // if ({{ session()->has('importSuccess') }}) {
        //     $(document).Toasts('create', {
        //         class: 'bg-success',
        //         title: 'Import Sukses',
        //         subtitle: '',
        //         body: 'Import Usulan Berhasil.'
        //     })
        // }
        @if (Session::has('importSuccess'))
            $(document).Toasts('create', {
                class: 'bg-success',
                title: 'Import Sukses',
                subtitle: '',
                body: "{{ session('importSuccess') }}"
            })
        @endif
        @if (Session::has('importError'))
            $(document).Toasts('create', {
                class: 'bg-danger',
                title: 'Import Gagal',
                subtitle: '',
                body: "{{ session('importError') }}"
            })
        @endif
        @if (Session::has('success'))
            $(document).Toasts('create', {
                class: 'bg-success',
                title: 'Aksi Sukses',
                subtitle: '',
                body: "{{ session('success') }}"
            })
        @endif
        
        // @if ($errors->any())
        //     $(document).Toasts('create', {
        //         class: 'bg-danger',
        //         title: 'Aksi Gagal',
        //         subtitle: '',
        //         body: () => {
        //             const data = {!! $errors !!};
        //             //var data = {{json_encode($errors)}};
        //             //const data = document.querySelector('div[id=err-list-details]').textContent;
        //             let list = document.createElement("ul");
        //             data.forEach((item) => {
        //                 let li = document.createElement("li");
        //                 li.innerText = item;
        //                 list.appendChild(li);
        //             });
        //             return list;
        //         }
        //     })
        // @endif

        @if ($errors->any())
            $(document).Toasts('create', {
                class: 'bg-danger',
                title: 'Aksi Gagal',
                subtitle: '',
                body: () => {
                    const data = "{!! implode('', $errors->all('<li>:message</li>')) !!}";
                    return data;
                }
            })
        @endif
    </script>
</body>

</html>
