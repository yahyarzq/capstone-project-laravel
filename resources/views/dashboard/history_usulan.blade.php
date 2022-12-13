@extends('dashboard/layouts/main')
@section('container')
    <!-- Main content -->
<section class="content">
  <div class="container-fluid">
      <div >
          <div >
              <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">DataTable with default features</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pengusul</th>
                                <th>Profil</th>
                                <th>Urusan</th>
                                <th>Usulan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                            <tr>
                                <td>{{ $item->No }}</td>
                                <td>{{ $item->Pengusul }}</td>
                                <td>{{ $item->Profil }}</td>
                                <td>{{ $item->Urusan }}</td>
                                <td>{{ $item->Usulan }}</td>
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
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
