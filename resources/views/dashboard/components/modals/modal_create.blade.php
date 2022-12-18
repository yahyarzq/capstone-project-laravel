<div class="modal fade" id="modal-create">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Input Usulan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="modal-form-create" action="/usulan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="inputName">No</label>
                                    <input type="text" id="No" name="No"
                                        class="form-control @error('No') is-invalid @enderror"
                                        value="{{ old('No') }}">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-No"></div>
                                    @error('No')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Tanggal Usul</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text" id="Tgl_Usul" name="Tgl_Usul" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="inputName">Tanggal Usul</label>
                                    <input type="text" id="Tgl_Usul" name="Tgl_Usul" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Tgl_Usul">
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="inputName">Pengusul</label>
                                    <input type="text" id="Pengusul" name="Pengusul" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Pengusul">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Profil</label>
                                    <input type="text" id="Profil" name="Profil" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Pengusul">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Urusan</label>
                                    <input type="text" id="Urusan" name="Urusan" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Urusan"></div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Usulan</label>
                                    <textarea id="Usulan" name="Usulan" class="form-control" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Usulan"></div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Tipe Usulan</label>
                                    <input type="text" id="TipeUsulan" name="TipeUsulan" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-TipeUsulan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Permasalahan</label>
                                    <textarea id="Permasalahan" name="Permasalahan" class="form-control" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Permasalahan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Alamat</label>
                                    <input type="text" id="Alamat" name="Alamat" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Alamat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Desa</label>
                                    <select id="Desa_id" class="form-control select2bs4 custom-select" name="Desa_id">
                                        @foreach ($desas as $desa)
                                            @if (old('Desa_id') == $desa->id)
                                                <option value="{{ $desa->id }}" selected>{{ $desa->nama }}
                                                </option>
                                            @else
                                                <option value="{{ $desa->id }}">{{ $desa->nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Kecamatan</label>
                                    <select id="Kecamatan_id" class="form-control select2bs4 custom-select" name="Kecamatan_id">
                                        @foreach ($kecamatans as $kecamatan)
                                            @if (old('Desa_id') == $kecamatan->id)
                                                <option value="{{ $kecamatan->id }}" selected>{{ $kecamatan->nama }}
                                                </option>
                                            @else
                                                <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama }}</option>
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
                                    <input type="text" id="Usul_Ke" name="Usul_Ke" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-Usul_Ke">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">SKPD Tujuan Awal</label>
                                    <input type="text" id="SKPD_Tujuan_Awal" name="SKPD_Tujuan_Awal"
                                        class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert"
                                        id="alert-SKPD_Tujuan_Awal"></div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">SKPD Tujuan Akhir</label>
                                    <input type="text" id="SKPD_Tujuan_Akhir" name="SKPD_Tujuan_Akhir"
                                        class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert"
                                        id="alert-SKPD_Tujuan_Akhir">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="inputDescription">Rekomendasi Bappeda Mitra OPD</label>
                                    <textarea id="Rekomendasi_Bappeda_Mitra_OPD" name="Rekomendasi_Bappeda_Mitra_OPD" class="form-control"
                                        rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Koefisien</label>
                                    <input type="text" id="Koefisien" name="Koefisien" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Anggaran</label>
                                    <input type="text" id="Anggaran" name="Anggaran" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Kategori Usulan</label>
                                    <input type="text" id="Kategori_Usulan" name="Kategori_Usulan"
                                        class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Rekomendasi Kelurahan/Desa</label>
                                    <textarea id="Rekomendasi_Kelurahan_Desa" name="Rekomendasi_Kelurahan_Desa" class="form-control" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Koefisien</label>
                                    <input type="text" id="Koefisien_1" name="Koefisien_1" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Anggaran</label>
                                    <input type="text" id="Anggaran_1" name="Anggaran_1" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Rekomendasi Kecamatan</label>
                                    <textarea id="Rekomendasi_Kecamatan" name="Rekomendasi_Kecamatan" class="form-control" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Koefisien</label>
                                    <input type="text" id="Koefisien_2" name="Koefisien_2" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Anggaran</label>
                                    <input type="text" id="Anggaran_2" name="Anggaran_2" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Rekomendasi SKPD</label>
                                    <textarea id="Rekomendasi_SKPD" name="Rekomendasi_SKPD" class="form-control" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Koefisien</label>
                                    <input type="text" id="Koefisien_3" name="Koefisien_3" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Anggaran</label>
                                    <input type="text" id="Anggaran_3" name="Anggaran_3" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Rekomendasi Bappeda</label>
                                    <textarea id="Rekomendasi_Bappeda" name="Rekomendasi_Bappeda" class="form-control" rows="4"></textarea>
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Koefisien</label>
                                    <input type="text" id="Koefisien_4" name="Koefisien_4" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Anggaran</label>
                                    <input type="text" id="Anggaran_4" name="Anggaran_4" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Status</label>
                                    <input type="text" id="Status" name="Status" class="form-control">
                                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-content">
                                    </div>
                                </div>

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

{{-- <script type="text/javascript">
    function form_submit() {
      document.getElementById("modal-form-create").submit();
     }    
</script> --}}

{{-- <script>
    //button create post event
    $('body').on('click', '#btn-item-create', function() {

        //open modal
        $('#modal-create').modal('show');
    });

    //action create post
    $('#btn-store').click(function(e) {
        e.preventDefault();

        //define variable
        let No = $('#No_Usulan').val();
        let Tgl_Usul = $('#Tgl_Usul').val();
        let Pengusul = $('#Pengusul').val();
        let Profil = $('#Profil').val();
        let Urusan = $('#Urusan').val();
        let Usulan = $('#Usulan').val();
        let TipeUsulan = $('#TipeUsulan').val();
        let Permasalahan = $('#Permasalahan').val();
        let Alamat = $('#Alamat').val();
        let Desa = $('#Desa').val();
        let Kecamatan = $('#Kecamatan').val();
        let Usul_Ke = $('#Usul_Ke').val();
        let SKPD_Tujuan_Awal = $('#SKPD_Tujuan_Awal').val();
        let SKPD_Tujuan_Akhir = $('#SKPD_Tujuan_Akhir').val();
        let Rekomendasi_Bappeda_Mitra_OPD = $('#Rekomendasi_Bappeda_Mitra_OPD').val();
        let Koefisien = $('#Koefisien').val();
        let Anggaran = $('#Anggaran').val();
        let Kategori_Usulan = $('#Kategori_Usulan').val();
        let Rekomendasi_Kelurahan_Desa = $('#Rekomendasi_Kelurahan_Desa').val();
        let Koefisien1 = $('#Koefisien1').val();
        let Anggaran1 = $('#Anggaran1').val();
        let Rekomendasi_Kecamatan = $('#Rekomendasi_Kecamatan').val();
        let Koefisien2 = $('#Koefisien2').val();
        let Anggaran2 = $('#Anggaran2').val();
        let Rekomendasi_SKPD = $('#Rekomendasi_SKPD').val();
        let Koefisien3 = $('#Koefisien3').val();
        let Anggaran3 = $('#Anggaran3').val();
        let Rekomendasi_Bappeda = $('#Rekomendasi_Bappeda').val();
        let Koefisien4 = $('#Koefisien4').val();
        let Anggaran4 = $('#Anggaran4').val();
        let Status = $('#Status').val();
        let token = $("meta[name='csrf-token']").attr("content");

        //ajax
        $.ajax({
            url: "/usulan",
            type: "POST",
            cache: false,
            data: {
                "No" = "No",
                "Tgl_Usul" = Tgl_Usul,
                "Pengusul" = Pengusul,
                "Profil" = Profil,
                "Urusan" = Urusan,
                "Usulan" = Usulan,
                "TipeUsulan" = TipeUsulan,
                "Permasalahan" = Permasalahan,
                "Alamat" = Alamat,
                "Desa" = Desa,
                "Kecamatan" = Kecamatan,
                "Usul_Ke" = Usul_Ke,
                "SKPD_Tujuan_Awal" = SKPD_Tujuan_Awal,
                "SKPD_Tujuan_Akhir" = SKPD_Tujuan_Akhir,
                "Rekomendasi_Bappeda_Mitra_OPD" = Rekomendasi_Bappeda_Mitra_OPD,
                "Koefisien" = Koefisien,
                "Anggaran" = Anggaran,
                "Kategori_Usulan" = Kategori_Usulan,
                "Rekomendasi_Kelurahan_Desa" = Rekomendasi_Kelurahan_Desa,
                "Koefisien1" = Koefisien1,
                "Anggaran1" = Anggaran1,
                "Rekomendasi_Kecamatan" = Rekomendasi_Kecamatan,
                "Koefisien2" = Koefisien2,
                "Anggaran2" = Anggaran2,
                "Rekomendasi_SKPD" = Rekomendasi_SKPD,
                "Koefisien3" = Koefisien3,
                "Anggaran3" = Anggaran3,
                "Rekomendasi_SKPD" = Rekomendasi_Bappeda,
                "Koefisien4" = Koefisien4,
                "Anggaran4" = Anggaran4,
                "Status" = Status,
                "_token": token
            },
            success: function(response) {

                //show success message
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });

                //data post
                let post = `
                            <tr id="index_${response.data.id}">
                                <td>${response.data.title}</td>
                                <td>${response.data.content}</td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" id="btn-edit-post" data-id="${response.data.id}" class="btn btn-primary btn-sm">EDIT</a>
                                    <a href="javascript:void(0)" id="btn-delete-post" data-id="${response.data.id}" class="btn btn-danger btn-sm">DELETE</a>
                                </td>
                            </tr>
                        `;

                //append to table
                //$('#table-posts').prepend(post);

                //clear form
                $('#title').val('');
                $('#content').val('');

                //close modal
                $('#modal-create').modal('hide');


            },
            error: function(error) {

                if (error.responseJSON.title[0]) {

                    //show alert
                    $('#alert-title').removeClass('d-none');
                    $('#alert-title').addClass('d-block');

                    //add message to alert
                    $('#alert-title').html(error.responseJSON.title[0]);
                }

                if (error.responseJSON.content[0]) {

                    //show alert
                    $('#alert-content').removeClass('d-none');
                    $('#alert-content').addClass('d-block');

                    //add message to alert
                    $('#alert-content').html(error.responseJSON.content[0]);
                }

            }

        });

    });
</script> --}}
