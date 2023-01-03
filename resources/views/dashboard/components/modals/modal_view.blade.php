<div class="modal fade" id="modal-view">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lihat Usulan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="inputName">No</label>
                                <input type="text" id="modal-form-view-No" name="No"
                                    class="form-control @error('No') is-invalid @enderror" value="{{ old('No') }}" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-No"></div>
                                @error('No')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Tanggal Usul</label>
                                <input type="text" id="modal-form-view-Tgl_Usul" name="Tgl_Usul"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Tgl_Usul">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Pengusul</label>
                                <input type="text" id="modal-form-view-Pengusul" name="Pengusul"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Pengusul">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Profil</label>
                                <input type="text" id="modal-form-view-Profil" name="Profil" class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Pengusul">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Urusan</label>
                                <input type="text" id="modal-form-view-Urusan" name="Urusan" class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Urusan"></div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Usulan</label>
                                <textarea id="modal-form-view-Usulan" name="Usulan" class="form-control" rows="4" disabled></textarea>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Usulan"></div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Tipe Usulan</label>
                                <input type="text" id="modal-form-view-TipeUsulan" name="TipeUsulan"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-TipeUsulan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Permasalahan</label>
                                <textarea id="modal-form-view-Permasalahan" name="Permasalahan" class="form-control" rows="4" disabled></textarea>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Permasalahan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Alamat</label>
                                <input type="text" id="modal-form-view-Alamat" name="Alamat" class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Alamat">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Desa</label>
                                <select id="modal-form-view-Desa" class="form-control custom-select"
                                    name="Desa" disabled>
                                    @foreach ($desas as $desa)
                                        @if (old('Desa') == $desa->nama)
                                            <option value="{{ $desa->nama }}" selected>{{ $desa->nama }}
                                            </option>
                                        @else
                                            <option value="{{ $desa->nama }}">{{ $desa->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Kecamatan</label>
                                <select id="modal-form-view-Kecamatan" class="form-control custom-select"
                                    name="Kecamatan" disabled>
                                    @foreach ($kecamatans as $kecamatan)
                                        @if (old('Kecamatan') == $kecamatan->nama)
                                            <option value="{{ $kecamatan->nama }}" selected>{{ $kecamatan->nama }}
                                            </option>
                                        @else
                                            <option value="{{ $kecamatan->nama }}">{{ $kecamatan->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                    <label for="inputName">Desa</label>
                                    <input type="text" id="Desa" name="Desa_id" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Desa"></div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Kecamatan</label>
                                    <input type="text" id="Kecamatan" name="Kecamatan_id" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Kecamatan">
                                    </div>
                                </div> --}}
                            <div class="form-group">
                                <label for="inputName">Usul Ke</label>
                                <input type="text" id="modal-form-view-Usul_Ke" name="Usul_Ke"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Usul_Ke">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">SKPD Tujuan Awal</label>
                                <input type="text" id="modal-form-view-SKPD_Tujuan_Awal" name="SKPD_Tujuan_Awal"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert"
                                    id="alert-SKPD_Tujuan_Awal"></div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">SKPD Tujuan Akhir</label>
                                <input type="text" id="modal-form-view-SKPD_Tujuan_Akhir" name="SKPD_Tujuan_Akhir"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert"
                                    id="alert-SKPD_Tujuan_Akhir">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="inputDescription">Rekomendasi Bappeda Mitra OPD</label>
                                <textarea id="modal-form-view-Rekomendasi_Bappeda_Mitra_OPD" name="Rekomendasi_Bappeda_Mitra_OPD"
                                    class="form-control" rows="4" disabled></textarea>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Koefisien</label>
                                <input type="text" id="modal-form-view-Koefisien" name="Koefisien"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Anggaran</label>
                                <input type="text" id="modal-form-view-Anggaran" name="Anggaran"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Kategori Usulan</label>
                                <input type="text" id="modal-form-view-Kategori_Usulan" name="Kategori_Usulan"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Rekomendasi Kelurahan/Desa</label>
                                <textarea id="modal-form-view-Rekomendasi_Kelurahan_Desa" name="Rekomendasi_Kelurahan_Desa" class="form-control"
                                    rows="4" disabled></textarea>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Koefisien</label>
                                <input type="text" id="modal-form-view-Koefisien_1" name="Koefisien_1"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Anggaran</label>
                                <input type="text" id="modal-form-view-Anggaran_1" name="Anggaran_1"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Rekomendasi Kecamatan</label>
                                <textarea id="modal-form-view-Rekomendasi_Kecamatan" name="Rekomendasi_Kecamatan" class="form-control"
                                    rows="4" disabled></textarea>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Koefisien</label>
                                <input type="text" id="modal-form-view-Koefisien_2" name="Koefisien_2"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Anggaran</label>
                                <input type="text" id="modal-form-view-Anggaran_2" name="Anggaran_2"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Rekomendasi SKPD</label>
                                <textarea id="modal-form-view-Rekomendasi_SKPD" name="Rekomendasi_SKPD" class="form-control" rows="4" disabled></textarea>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Koefisien</label>
                                <input type="text" id="modal-form-view-Koefisien_3" name="Koefisien_3"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Anggaran</label>
                                <input type="text" id="modal-form-view-Anggaran_3" name="Anggaran_3"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Rekomendasi Bappeda</label>
                                <textarea id="modal-form-view-Rekomendasi_Bappeda" name="Rekomendasi_Bappeda" class="form-control" rows="4" disabled></textarea>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Koefisien</label>
                                <input type="text" id="modal-form-view-Koefisien_4" name="Koefisien_4"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Anggaran</label>
                                <input type="text" id="modal-form-view-Anggaran_4" name="Anggaran_4"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Status</label>
                                <input type="text" id="modal-form-view-Status" name="Status"
                                    class="form-control" disabled>
                                <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-right">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    $('body').on('click', '#btn-item-view', function() {

        // Get item id from data-id atribute
        let item_id = $(this).data('id');
        // Get item url-id from data-attr atribute
        //let href = $(this).attr('data-attr');

        //fetch detail post with ajax
        $.ajax({
            url: `/usulan/${item_id}`,
            type: "GET",
            cache: false,
            success: function(response) {
                //fill data to form
                $('#modal-form-view-No').val(response.data.No);
                $('#modal-form-view-Tgl_Usul').val(response.data.Tgl_Usul);
                $('#modal-form-view-Pengusul').val(response.data.Pengusul);
                $('#modal-form-view-Profil').val(response.data.Profil);
                $('#modal-form-view-Urusan').val(response.data.Urusan);
                $('#modal-form-view-Usulan').val(response.data.Usulan);
                $('#modal-form-view-TipeUsulan').val(response.data.TipeUsulan);
                $('#modal-form-view-Permasalahan').val(response.data.Permasalahan);
                $('#modal-form-view-Alamat').val(response.data.Alamat);
                $('#modal-form-view-Desa').val(response.data.Desa);
                $('#modal-form-view-Kecamatan').val(response.data.Kecamatan);
                $('#modal-form-view-Usul_Ke').val(response.data.Usul_Ke);
                $('#modal-form-view-SKPD_Tujuan_Awal').val(response.data.SKPD_Tujuan_Awal);
                $('#modal-form-view-SKPD_Tujuan_Akhir').val(response.data.SKPD_Tujuan_Akhir);
                $('#modal-form-view-Rekomendasi_Bappeda_Mitra_OPD').val(response.data
                    .Rekomendasi_Bappeda_Mitra_OPD);
                $('#modal-form-view-Koefisien').val(response.data.Koefisien);
                $('#modal-form-view-Anggaran').val(response.data.Anggaran);
                $('#modal-form-view-Kategori_Usulan').val(response.data.Kategori_Usulan);
                $('#modal-form-view-Rekomendasi_Kelurahan_Desa').val(response.data
                    .Rekomendasi_Kelurahan_Desa);
                $('#modal-form-view-Koefisien_1').val(response.data.Koefisien_1);
                $('#modal-form-view-Anggaran_1').val(response.data.Anggaran_1);
                $('#modal-form-view-Rekomendasi_Kecamatan').val(response.data
                .Rekomendasi_Kecamatan);
                $('#modal-form-view-Koefisien_2').val(response.data.Koefisien_2);
                $('#modal-form-view-Anggaran_2').val(response.data.Anggaran_2);
                $('#modal-form-view-Rekomendasi_SKPD').val(response.data.Rekomendasi_SKPD);
                $('#modal-form-view-Koefisien_3').val(response.data.Koefisien_3);
                $('#modal-form-view-Anggaran_3').val(response.data.Anggaran_3);
                $('#modal-form-view-Rekomendasi_Bappeda').val(response.data.Rekomendasi_Bappeda);
                $('#modal-form-view-Koefisien_4').val(response.data.Koefisien_4);
                $('#modal-form-view-Anggaran_4').val(response.data.Anggaran_4);
                $('#modal-form-view-Status').val(response.data.Status);
                //open modal
                $('#modal-view').modal('show');
            }
        });
    });
</script>
