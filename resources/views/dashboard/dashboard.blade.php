@extends('dashboard/layouts/main')

@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Rekapan Report</h5>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row d-flex justify-content-around">
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        {{-- <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>
                                            17%</span> --}}
                                        <h5 class="description-header">{{ $collection->count() }}</h5>
                                        <span class="description-text">USULAN TOTAL</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        {{-- <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i>
                                            0%</span> --}}
                                        <h5 class="description-header">{{ $usulan_weekly }}</h5>
                                        <span class="description-text">USULAN MINGGU INI</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block">
                                        {{-- <span class="description-percentage text-success"><i class="fas fa-caret-up"></i>
                                            20%</span> --}}
                                        <h5 class="description-header">{{ $usulan_monthly }}</h5>
                                        <span class="description-text">USULAN BUlAN INI</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                {{-- <div class="col-sm-3 col-6">
                                    <div class="description-block">
                                        <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i>
                                            18%</span> 
                                        <h5 class="description-header">1200</h5>
                                        <span class="description-text">GOAL COMPLETIONS</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div> --}}
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Usulan PerDesa/Kelurahan</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0 table-responsive" style="height: 300px">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Nama</th>
                          <th style="width: 40px">Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($desas as $desa)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $desa->_id }}</td>
                            <td><span class="badge bg-danger">{{ $desa->count }}</span></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Tujuan Perdinas</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0 table-responsive" style="height: 300px">
                    <table class="table table-striped" >
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Nama</th>
                          <th style="width: 40px">Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dinas as $item)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->_id }}</td>
                            <td><span class="badge bg-danger">{{ $item->count }}</span></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Usulan PerKecamatan</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0 table-responsive" style="height: 300px">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Nama</th>
                          <th style="width: 40px">Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($kecamatans as $kecamatan)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kecamatan->_id }}</td>
                            <td><span class="badge bg-danger">{{ $kecamatan->count }}</span></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
    
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Tipe Usulan</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0 table-responsive" style="height: 300px">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Tipe Usulan</th>
                          <th style="width: 40px">Jumlah</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          @foreach ($tipe_usulan as $tu)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tu->_id }}</td>
                            <td><span class="badge bg-danger">{{ $tu->count }}</span></td>
                          </tr>
                        @endforeach
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

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
