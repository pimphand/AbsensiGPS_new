<div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg-12">
                    <div class="card p-4">
                        <form action="{{route('idm.index')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <h3>Jumlah Penduduk dan Kepala Keluarga</h3>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Total Penduduk</label>
                                        <input type="text" class="form-control" name="total_penduduk"
                                               value="{{$data->data['total_penduduk']}}"
                                               placeholder="Masukan total penduduk">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Total Kepala Keluarga</label>
                                        <input type="text" class="form-control" name="kepala_keluarga"
                                               value="{{$data->data['kepala_keluarga']}}"
                                               placeholder="Masukan kepala keluarga">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Total Perempuan</label>
                                        <input type="text" class="form-control" name="total_perempuan"
                                               value="{{$data->data['total_perempuan']}}"
                                               placeholder="Masukan total perempuan">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Total Laki-laki</label>
                                        <input type="text" class="form-control" name="total_laki"
                                               value="{{$data->data['total_laki']}}"
                                               placeholder="Masukan total laki-laki">
                                    </div>
                                </div>
                                <hr>
                                <h3>Berdasarkan Perkawinan</h3>
                                <div class="row">
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Kawin</label>
                                        <input type="text" class="form-control" name="kawin"
                                               value="{{$data->data['kawin']}}"
                                               placeholder="Masukan total Kawin">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Belum Kawin</label>
                                        <input type="text" class="form-control" name="belum_kawin"
                                               value="{{$data->data['belum_kawin']}}"
                                               placeholder="Masukan total Belum Kawin">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Cerai Mati</label>
                                        <input type="text" class="form-control" name="cerai_mati"
                                               value="{{$data->data['cerai_mati']}}"
                                               placeholder="Masukan total Cerai Mati">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Cerai Hidup</label>
                                        <input type="text" class="form-control" name="cerai_hidup"
                                               value="{{$data->data['cerai_hidup']}}"
                                               placeholder="Masukan total Cerai Hidup">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Kawin Tercatat</label>
                                        <input type="text" class="form-control" name="kawin_tercatat"
                                               value="{{$data->data['kawin_tercatat']}}"
                                               placeholder="Masukan total Kawin Tercatat">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Kawin Tidak Tercatat</label>
                                        <input type="text" class="form-control" name="kawin_tidak_tercatat"
                                               value="{{$data->data['kawin_tidak_tercatat']}}"
                                               placeholder="Masukan total Kawin Tidak Tercatat">
                                    </div>
                                </div>
                                <hr>
                                <h3>Berdasarkan Pekerjaan</h3>
                                <div class="row">
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Belum/Tidak Bekerja</label>
                                        <input type="text" class="form-control" name="belum_bekerja"
                                               value="{{$data->data['belum_bekerja']}}"
                                               placeholder="Masukan total Belum/Tidak Bekerja">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Karyawan Swasta</label>
                                        <input type="text" class="form-control" name="karayawan_swasta"
                                               value="{{$data->data['karayawan_swasta']}}"
                                               placeholder="Masukan total Karyawan Swasta">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Buruh Harian Lepas</label>
                                        <input type="text" class="form-control" name="buruh_harian_lepas"
                                               value="{{$data->data['buruh_harian_lepas']}}"
                                               placeholder="Masukan total Buruh Harian Lepas">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Mengurus Rumah Tangga</label>
                                        <input type="text" class="form-control" name="mengurus_rumah_tangga"
                                               value="{{$data->data['mengurus_rumah_tangga']}}"
                                               placeholder="Masukan total Mengurus Rumah Tangga">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Pelajar/Mahasiswa</label>
                                        <input type="text" class="form-control" name="pelajar_mahasiswa"
                                               value="{{$data->data['pelajar_mahasiswa']}}"
                                               placeholder="Masukan total Pelajar/Mahasiswa">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Petani/Pekebun</label>
                                        <input type="text" class="form-control" name="petani_pekebun"
                                               value="{{$data->data['petani_pekebun']}}"
                                               placeholder="Masukan total Petani/Pekebun">
                                    </div>
                                </div>
                                <hr>
                                <h3>Berdasarkan Agama</h3>
                                <div class="row">
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Islam</label>
                                        <input type="text" class="form-control" name="islam"
                                               value="{{$data->data['islam']}}"
                                               placeholder="Masukan total Islam">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Kristen</label>
                                        <input type="text" class="form-control" name="kristen"
                                               value="{{$data->data['kristen']}}"
                                               placeholder="Masukan total Kristen">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Katolik</label>
                                        <input type="text" class="form-control" name="katolik"
                                               value="{{$data->data['katolik']}}"
                                               placeholder="Masukan total Katolik">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Hindu</label>
                                        <input type="text" class="form-control" name="hindu"
                                               value="{{$data->data['hindu']}}"
                                               placeholder="Masukan total Hindu">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Buddha</label>
                                        <input type="text" class="form-control" name="buddha"
                                               value="{{$data->data['buddha']}}"
                                               placeholder="Masukan total Buddha">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Konghucu</label>
                                        <input type="text" class="form-control" name="konghucu"
                                               value="{{$data->data['konghucu']}}"
                                               placeholder="Masukan total Konghucu">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Kepercayaan lainnya</label>
                                        <input type="text" class="form-control" name="kepercayaan_lainnya"
                                               value="{{$data->data['kepercayaan_lainnya']}}"
                                               placeholder="Masukan total Kepercayaan lainnya">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-pill w-100" id="addData">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
