<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Usulan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="modal-form-edit" action="" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="inputName">No</label>
                                    <input type="text" id="modal-form-edit-No" name="No"
                                        class="form-control @error('No') is-invalid @enderror"
                                        value="{{ old('No') }}" readonly>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-No"></div>
                                    @error('No')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Tanggal Usul</label>
                                    <input type="text" id="modal-form-edit-Tgl_Usul" name="Tgl_Usul" class="form-control @error('Tgl_Usul') is-invalid @enderror" readonly>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Tgl_Usul">
                                    </div>
                                    @error('Tgl_Usul')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label for="inputName">Tanggal Usul</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" id="modal-form-edit-Tgl_Usul" name="Tgl_Usul" class="form-control datetimepicker-input  @error('Tgl_Usul') is-invalid @enderror" data-target="#reservationdate" readonly/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    @error('Tgl_Usul')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                <div class="form-group">
                                    <label for="inputName">Pengusul</label>
                                    <input type="text" id="modal-form-edit-Pengusul" name="Pengusul" class="form-control  @error('Pengusul') is-invalid @enderror">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Pengusul">
                                    </div>
                                    @error('Pengusul')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Profil</label>
                                    <input type="text" id="modal-form-edit-Profil" name="Profil" class="form-control  @error('Profil') is-invalid @enderror">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Pengusul">
                                    </div>
                                    @error('Profil')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Urusan</label>
                                    <input type="text" id="modal-form-edit-Urusan" name="Urusan" class="form-control  @error('Urusan') is-invalid @enderror">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Urusan"></div>
                                    @error('Urusan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Usulan</label>
                                    <textarea id="modal-form-edit-Usulan" name="Usulan" class="form-control @error('Usulan') is-invalid @enderror" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Usulan"></div>
                                    @error('Usulan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Tipe Usulan</label>
                                    <input type="text" id="modal-form-edit-TipeUsulan" name="TipeUsulan" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-TipeUsulan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Permasalahan</label>
                                    <textarea id="modal-form-edit-Permasalahan" name="Permasalahan" class="form-control  @error('Permasalahan') is-invalid @enderror" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Permasalahan">
                                    </div>
                                    @error('Permasalahan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label for="inputName">Alamat</label>
                                    <input type="text" id="modal-form-edit-Alamat" name="Alamat" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Alamat">
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="inputDescription">Alamat</label>
                                    <textarea id="modal-form-edit-Alamat" name="Alamat" class="form-control" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Alamat">
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="inputStatus">Desa</label>
                                    <select id="modal-form-edit-Desa" class="form-control custom-select @error('Desa') is-invalid @enderror" name="Desa">
                                        @foreach ($desas as $desa)
                                            @if (old('Desa') == $desa->nama)
                                                <option value="{{ $desa->nama }}" selected>{{ $desa->nama }}
                                                </option>
                                            @else
                                                <option value="{{ $desa->nama }}">{{ $desa->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('Desa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Kecamatan</label>
                                    <select id="modal-form-edit-Kecamatan" class="form-control custom-select @error('Kecamatan') is-invalid @enderror" name="Kecamatan">
                                        @foreach ($kecamatans as $kecamatan)
                                            @if (old('Kecamatan') == $kecamatan->nama)
                                                <option value="{{ $kecamatan->nama }}" selected>{{ $kecamatan->nama }}
                                                </option>
                                            @else
                                                <option value="{{ $kecamatan->nama }}">{{ $kecamatan->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('Kecamatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="inputName">Desa</label>
                                    <input type="text" id="modal-form-edit-Desa" name="Desa" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Desa"></div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="modal-form-edit-Desa" class="form-label">Desa</label>
                                    <input type="text" class="form-control" list="datalistOptions-Desa" id="modal-form-edit-Desa" name="Desa" placeholder="Ketik atau pilih dari opsi...">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Desa">
                                    </div>
                                    <datalist id="datalistOptions-Desa">
                                        @foreach ($desa as $item)
                                            <option value="{{ $item->Desa }}"></option>
                                        @endforeach
                                    </datalist>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="inputName">Kecamatan</label>
                                    <input type="text" id="modal-form-edit-Kecamatan" name="Kecamatan" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Kecamatan">
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="modal-form-edit-Kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" list="datalistOptions-Kecamatan" id="modal-form-edit-Kecamatan" name="Kecamatan" placeholder="Ketik atau pilih dari opsi...">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Kecamatan">
                                    </div>
                                    <datalist id="datalistOptions-Kecamatan">
                                        @foreach ($kecamatan as $item)
                                            <option value="{{ $item->Kecamatan }}"></option>
                                        @endforeach
                                    </datalist>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Usul Ke</label>
                                    <input type="text" id="modal-form-edit-Usul_Ke" name="Usul_Ke" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Usul_Ke">
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="inputName">SKPD Tujuan Awal</label>
                                    <input type="text" id="modal-form-edit-SKPD_Tujuan_Awal" name="SKPD_Tujuan_Awal"
                                        class="form-control @error('SKPD_Tujuan_Awal') is-invalid @enderror">
                                    <div class="alert alert-danger mt-2 d-none" role="alert"
                                        id="alert-SKPD_Tujuan_Awal"></div>
                                    @error('SKPD_Tujuan_Awal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                <div class="form-group">
                                    <label for="inputName">SKPD Tujuan Awal</label>
                                    <input type="text" id="modal-form-edit-SKPD_Tujuan_Awal" list="datalistOptions-SKPD_Tujuan_Awal" name="SKPD_Tujuan_Awal"
                                        class="form-control @error('SKPD_Tujuan_Awal') is-invalid @enderror" placeholder="Ketik atau pilih dari opsi...">
                                    <div class="alert alert-danger mt-2 d-none" role="alert"
                                        id="alert-SKPD_Tujuan_Awal"></div>
                                    <datalist id="datalistOptions-SKPD_Tujuan_Awal">
                                        @foreach ($skpd_tujuan_awal as $item)
                                            <option value="{{ $item->SKPD_Tujuan_Awal }}"></option>
                                        @endforeach
                                    </datalist>
                                    @error('SKPD_Tujuan_Awal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label for="inputName">SKPD Tujuan Akhir</label>
                                    <input type="text" id="modal-form-edit-SKPD_Tujuan_Akhir" name="SKPD_Tujuan_Akhir"
                                        class="form-control @error('SKPD_Tujuan_Akhir') is-invalid @enderror">
                                    <div class="alert alert-danger mt-2 d-none" role="alert"
                                        id="alert-SKPD_Tujuan_Akhir">
                                    </div>
                                    @error('SKPD_Tujuan_Akhir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                <div class="form-group">
                                    <label for="inputName">SKPD Tujuan Akhir</label>
                                    <input type="text" id="modal-form-edit-SKPD_Tujuan_Akhir" list="datalistOptions-SKPD_Tujuan_Akhir" name="SKPD_Tujuan_Akhir"
                                        class="form-control @error('SKPD_Tujuan_Akhir') is-invalid @enderror" placeholder="Ketik atau pilih dari opsi...">
                                    <div class="alert alert-danger mt-2 d-none" role="alert"
                                        id="alert-SKPD_Tujuan_Akhir"></div>
                                    <datalist id="datalistOptions-SKPD_Tujuan_Akhir">
                                        @foreach ($skpd_tujuan_akhir as $item)
                                            <option value="{{ $item->SKPD_Tujuan_Akhir }}"></option>
                                        @endforeach
                                    </datalist>
                                    @error('SKPD_Tujuan_Akhir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="inputDescription">Rekomendasi Bappeda Mitra OPD</label>
                                    <textarea id="modal-form-edit-Rekomendasi_Bappeda_Mitra_OPD" name="Rekomendasi_Bappeda_Mitra_OPD" class="form-control"
                                        rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Koefisien</label>
                                    <input type="text" id="modal-form-edit-Koefisien" name="Koefisien" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Anggaran</label>
                                    <input type="text" id="modal-form-edit-Anggaran" name="Anggaran" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Kategori Usulan</label>
                                    <input type="text" id="modal-form-edit-Kategori_Usulan" name="Kategori_Usulan"
                                        class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Koefisien</label>
                                    <input type="text" id="modal-form-edit-Koefisien_1" name="Koefisien_1" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Rekomendasi Kelurahan/Desa</label>
                                    <textarea id="modal-form-edit-Rekomendasi_Kelurahan_Desa" name="Rekomendasi_Kelurahan_Desa" class="form-control" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="inputName">Koefisien</label>
                                    <input type="text" id="modal-form-edit-Koefisien_1" name="Koefisien_1" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Anggaran</label>
                                    <input type="text" id="modal-form-edit-Anggaran_1" name="Anggaran_1" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="inputDescription">Rekomendasi Kecamatan</label>
                                    <textarea id="modal-form-edit-Rekomendasi_Kecamatan" name="Rekomendasi_Kecamatan" class="form-control" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Koefisien</label>
                                    <input type="text" id="modal-form-edit-Koefisien_2" name="Koefisien_2" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Anggaran</label>
                                    <input type="text" id="modal-form-edit-Anggaran_2" name="Anggaran_2" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Rekomendasi SKPD</label>
                                    <textarea id="modal-form-edit-Rekomendasi_SKPD" name="Rekomendasi_SKPD" class="form-control" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Koefisien</label>
                                    <input type="text" id="modal-form-edit-Koefisien_3" name="Koefisien_3" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Anggaran</label>
                                    <input type="text" id="modal-form-edit-Anggaran_3" name="Anggaran_3" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Rekomendasi Bappeda</label>
                                    <textarea id="modal-form-edit-Rekomendasi_Bappeda" name="Rekomendasi_Bappeda" class="form-control" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Koefisien</label>
                                    <input type="text" id="modal-form-edit-Koefisien_4" name="Koefisien_4" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Anggaran</label>
                                    <input type="text" id="modal-form-edit-Anggaran_4" name="Anggaran_4" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="inputName">Status</label>
                                    <input type="text" id="modal-form-edit-Status" name="Status" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="modal-form-edit-Status" class="form-label">Status</label>
                                    <input class="form-control" list="datalistOptions-Status" id="modal-form-edit-Status" name="Status" placeholder="Ketik atau pilih dari opsi...">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                    <datalist id="datalistOptions-Status">
                                        @foreach ($status as $item)
                                            <option value="{{ $item->Status }}"></option>
                                        @endforeach
                                    </datalist>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="inputStatus">Status</label>
                                    <select id="modal-form-edit-Status" class="form-control custom-select @error('Status') is-invalid @enderror" name="Status">
                                            <option value="TIDAK SETUJU" selected>TIDAK SETUJU
                                            </option>
                                            <option value="SETUJU">SETUJU</option>
                                    </select>
                                    @error('Status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" id="btn-store">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    $('body').on('click', '#btn-item-edit', function() {

        $("#overlay").fadeIn(300);

        // Get item id from data-id atribute
        let item_id = $(this).data('id');
        // Get item url-id from data-attr atribute
        let href = $(this).attr('data-attr');
        // Set form action attributr using data from var href (above function) 
        $('#modal-form-edit').attr("action", `${href}`);

        //fetch detail post with ajax
        $.ajax({
            url: `/usulan/${item_id}`,
            type: "GET",
            cache: false,
            error: function(xhr, status, error) {
                $("#overlay").fadeOut();
                alert("Gagal menghubungkan ke Peladen(Server), Silahkan cek koneksi internet anda!");
            },
            success: function(response) {
                //fill data to form
                $('#modal-form-edit-No').val(response.data.No);
                $('#modal-form-edit-Tgl_Usul').val(response.data.Tgl_Usul);
                $('#modal-form-edit-Pengusul').val(response.data.Pengusul);
                $('#modal-form-edit-Profil').val(response.data.Profil);
                $('#modal-form-edit-Urusan').val(response.data.Urusan);
                $('#modal-form-edit-Usulan').val(response.data.Usulan);
                $('#modal-form-edit-TipeUsulan').val(response.data.TipeUsulan);
                $('#modal-form-edit-Permasalahan').val(response.data.Permasalahan);
                $('#modal-form-edit-Alamat').val(response.data.Alamat);
                $('#modal-form-edit-Desa').val(response.data.Desa);
                $('#modal-form-edit-Kecamatan').val(response.data.Kecamatan);
                $('#modal-form-edit-Usul_Ke').val(response.data.Usul_Ke);
                $('#modal-form-edit-SKPD_Tujuan_Awal').val(response.data.SKPD_Tujuan_Awal);
                $('#modal-form-edit-SKPD_Tujuan_Akhir').val(response.data.SKPD_Tujuan_Akhir);
                $('#modal-form-edit-Rekomendasi_Bappeda_Mitra_OPD').val(response.data.Rekomendasi_Bappeda_Mitra_OPD);
                $('#modal-form-edit-Koefisien').val(response.data.Koefisien);
                $('#modal-form-edit-Anggaran').val(response.data.Anggaran);
                $('#modal-form-edit-Kategori_Usulan').val(response.data.Kategori_Usulan);
                $('#modal-form-edit-Koefisien_1').val(response.data.Koefisien_1);
                $('#modal-form-edit-Rekomendasi_Kelurahan_Desa').val(response.data.Rekomendasi_Kelurahan_Desa);
                $('#modal-form-edit-Rekomendasi_Kecamatan').val(response.data.Rekomendasi_Kecamatan);
                $('#modal-form-edit-Koefisien_2').val(response.data.Koefisien_2);
                $('#modal-form-edit-Anggaran_2').val(response.data.Anggaran_2);
                $('#modal-form-edit-Rekomendasi_SKPD').val(response.data.Rekomendasi_SKPD);
                $('#modal-form-edit-Koefisien_3').val(response.data.Koefisien_3);
                $('#modal-form-edit-Anggaran_3').val(response.data.Anggaran_3);
                $('#modal-form-edit-Rekomendasi_Bappeda').val(response.data.Rekomendasi_Bappeda);
                $('#modal-form-edit-Koefisien_4').val(response.data.Koefisien_4);
                $('#modal-form-edit-Anggaran_4').val(response.data.Anggaran_4);
                $('#modal-form-edit-Status').val(response.data.Status);
                //open modal
                $("#overlay").fadeOut();
                $('#modal-edit').modal('show');
            }
        });
    });
</script>
