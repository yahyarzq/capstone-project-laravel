<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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

    <link rel="stylesheet" href="../../plugins/datatables-fixedcolumns/css/fixedColumns.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-fixedheader/css/fixedHeader.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-select/css/select.bootstrap4.min.css">
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

<body class="hold-transition sidebar-mini accent-success">
    <div id="overlay">
        <div class="cv-spinner">
          <span class="spinner"></span>
        </div>
    </div>
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

    <script src="../../plugins/datatables-fixedcolumns/js/dataTables.fixedColumns.min.js"></script>
    <script src="../../plugins/datatables-fixedcolumns/js/fixedColumns.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../../plugins/datatables-fixedheader/js/fixedHeader.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-select/js/dataTables.select.min.js"></script>
    <script src="../../plugins/datatables-select/js/select.bootstrap4.min.js"></script>
    <script src="../../plugins/dataTables.altEditor.free.js"></script>
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
    
    @yield("scripts")

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
