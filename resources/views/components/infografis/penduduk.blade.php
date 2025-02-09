<div>
    <div class="service-wraper">
        <h4>DEMOGRAFI PENDUDUK</h4>
        <p class="mb-4">
            Memberikan informasi lengkap mengenai karakteristik demografi penduduk suatu wilayah. Mulai
            dari jumlah penduduk, usia, jenis kelamin, tingkat pendidikan, pekerjaan, agama, dan aspek
            penting lainnya yang menggambarkan komposisi populasi secara rinci.
        </p>

        <div class="row mt-4">
            @php
                $data = \App\Models\Data::where('code', 'data-penduduk')->first();
                $penduduks = [
                    'total_penduduk' => "Penduduk",
                    'kepala_keluarga' => 'Kepala Keluarga',
                    'total_perempuan' => 'Perempuan',
                    'total_laki' => 'Laki-laki'
                ];

                $pekerjas = ['belum_bekerja' =>"Belum Bekerja",'karayawan_swasta'=> "Karyawan Swasta",'buruh_harian_lepas'=> 'Buruh Harian Lepas','mengurus_rumah_tangga' => 'Mengurus Rumah Tangga','pelajar_mahasiswa'=>'Pelajar/Mahasiswa','petani_pekebun'=>'Petani/Pekebun'];
                $perkawainans = [
                    'kawin' => 'Kawin',
                    'belum_kawin' => 'Belum Kawin',
                    'cerai_mati' => 'Cerai Mati',
                    'cerai_hidup' => 'Ceria Hidup',
                    'kawin_tercatat' => 'Kawin Tercatat',
                    'kawin_tidak_tercatat' => 'Kawin Tidak Tercatat',
                ];
                $agamas = [
                    'islam' => 'Islam',
                    'kristen' => 'Kristen',
                    'katolik' => 'Katholik',
                    'hindu' => 'Hindu',
                    'buddha' => 'Budha',
                    'konghucu' => 'Konghucu',
                    'kepercayaan_lainnya' => 'Kepercayaan Lainnya'
                ];
            @endphp
            <h4 class="mt-5">Jumlah Penduduk dan Kepala Keluarga</h4>
            @foreach($penduduks as $key => $label)
                <div class="col-lg-3 col-md-3 col-6">
                    <div class="service-card wow fadeInUp" data-wow-duration="1100ms"
                         style="visibility: visible; animation-duration: 1100ms; animation-name: fadeInUp;">
                        <div class="left">
                            <div class="image">
                                <img src="{{asset('img/icon/'.$key)}}.png" alt="" class="active">
                                <img src="{{asset('img/icon/'.$key)}}.png" alt="" class="hover">
                            </div>
                        </div>
                        <div class="right">
                            <span>Total</span>
                            <h2>{{ $data ? $data->data[$key] : 'Data tidak tersedia' }}</h2>
                            <span>{{ $label }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-4">
        <div class="row g-3">
            <h4>Berdasarkan Pekerjaan</h4>
            @foreach($pekerjas as $p => $pekerja)
                <div class="col-md-4">
                    <div class="card shadow-sm p-3 bg-light rounded d-flex align-items-center">
                        <div class="d-flex align-items-center w-100">
                            <div class="image me-3"
                                 style="width: 82px; height: 82px; line-height: 82px; text-align: center; background: #F1F6FF; border-radius: 100px; transition: all 0.3s ease-in-out; position: relative;">
                                <img src="{{asset('img/icon/'.$p)}}.png" alt=""
                                     class="img-fluid">
                            </div>
                            <div>
                                <p class="fw-semibold text-secondary mb-1">{{$pekerja}}</p>
                                <p class="fw-bold fs-2">{{$data->data[$p]}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="container mt-4">
        <div class="row g-3">
            <h4>Berdasarkan Perkawinan</h4>
            @foreach($perkawainans as $p => $kawin)
                <div class="col-md-4">
                    <div class="card shadow-sm p-3 bg-light rounded d-flex align-items-center">
                        <div class="d-flex align-items-center w-100">
                            <div class="image me-3"
                                 style="width: 82px; height: 82px; line-height: 82px; text-align: center; background: #F1F6FF; border-radius: 100px; transition: all 0.3s ease-in-out; position: relative;">
                                <img src="{{asset('img/icon/'.$p)}}.png" alt=""
                                     class="img-fluid">
                            </div>
                            <div>
                                <p class="fw-semibold text-secondary mb-1">{{$kawin}}</p>
                                <p class="fw-bold fs-2">{{$data->data[$p]}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="container mt-4">
        <div class="row g-3 text-center">
            <h4>Berdasarkan Agama</h4>
            @foreach($agamas as $a => $agama)
                <div class="col-md-4">
                    <div class="card shadow-sm p-3 bg-light rounded d-flex align-items-center">
                        <div class="d-flex align-items-center w-100">
                            <div class="image me-3"
                                 style="width: 82px; height: 82px; line-height: 82px; text-align: center; background: #F1F6FF; border-radius: 100px; transition: all 0.3s ease-in-out; position: relative;">
                                <img src="{{asset('img/icon/'.$a)}}.png" alt=""
                                     class="img-fluid">
                            </div>
                            <div>
                                <p class="fw-semibold text-secondary mb-1">{{$agama}}</p>
                                <p class="fw-bold fs-2">{{$data->data[$a]}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
