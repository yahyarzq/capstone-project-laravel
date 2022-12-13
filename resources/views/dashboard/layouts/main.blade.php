<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

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
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
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
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                initComplete: function() {
                    var filter_row = $('<div class="row" id="filter_row"> </div>').appendTo('#example1_head');
                    this.api()
                        .columns([1,2,8,9])
                        .every(function() {
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
                            var select = $('<select class="form-control col-sm-2"><option value="Filter">Filter</option></select>')
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
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');



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
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
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
</body>

</html>
