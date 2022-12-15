@extends('dashboard/layouts/main')
@section('container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
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
                    <!-- general form elements -->
                    <div class="card card-primary mx-auto w-50">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/dashboard/import-usulan" method="post" enctype="multipart/form-data">
                          @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_head" class="mb-3"></div>
                            <table id="table_import" class="table table-bordered table-striped table-hover text-nowrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Usul</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Pengusul</th>
                                        <th>Profil</th>
                                        <th>Permasalahan</th>
                                        <th>Usulan</th>
                                        <th>Urusan</th>
                                        <th>Alamat</th>
                                        <th>SKPD_Tujuan_Awal</th>
                                        <th>SKPD_Tujuan_Akhir</th>
                                        <th>Rekomendasi_Bappeda_Mitra_OPD</th>
                                        <th>Kategori_Usulan</th>
                                        <th>Koefisien</th>
                                        <th>Rekomendasi_Kelurahan_Desa</th>
                                        <th>Rekomendasi_Kecamatan</th>
                                        <th>Rekomendasi_SKPD</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($collections->isNotEmpty())
                                        @foreach ($collections as $item)
                                            <tr>
                                                <td>{{ $item->No }}</td>
                                                <td>{{ $item->Tgl_Usul }}</td>
                                                <td>{{ $item->Tgl_Pengajuan }}</td>
                                                <td>{{ $item->Pengusul }}</td>
                                                <td>{{ $item->Profil }}</td>
                                                <td>{{ $item->Permasalahan }}</td>
                                                <td>{{ $item->Usulan }}</td>
                                                <td>{{ $item->Urusan }}</td>
                                                <td>{{ $item->Alamat }}</td>
                                                <td>{{ $item->SKPD_Tujuan_Awal }}</td>
                                                <td>{{ $item->SKPD_Tujuan_Akhir }}</td>
                                                <td>{{ $item->Rekomendasi_Bappeda_Mitra_OPD }}</td>
                                                <td>{{ $item->Kategori_Usulan }}</td>
                                                <td>{{ $item->Koefisien }}</td>
                                                <td>{{ $item->Rekomendasi_Kelurahan_Desa }}</td>
                                                <td>{{ $item->Rekomendasi_Kecamatan }}</td>
                                                <td>{{ $item->Rekomendasi_SKPD }}</td>
                                                <td>Action</td>
                                            </tr>
                                        @endforeach
                                    @endif
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
    </section>
    <!-- /.content -->
@endsection






















{{-- @extends('dashboard/layouts/main')

@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div>
            <!-- left column -->
            <div >
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/import-usulan" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection --}}
