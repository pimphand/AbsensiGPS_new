@extends('frontend.layouts.app')

@section('content')
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap mt-5">
                        <br>
                        <h2 class="mt-5">PPID</h2>
                        <p style="color: white">Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat yang
                            bertanggung jawab di
                            bidang penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan informasi di badan
                            publik.</p>
                        <button class="btn btn-success" id="modalBtn" style="color: white" data-bs-toggle="modal"
                                data-bs-target="#ppidModal">Dasar Hukum PPID
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start of featured-->
    <section class="featured-section s2 section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="wpo-section-title s2">
                        <h2>Informasi Publik Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($data as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 custom-grid all new_york zoomIn"
                         data-wow-duration="2000ms">
                        <div class="featured-card">

                            <div class="content">
                                <h2><a>{{$item->title}}</a></h2>
                                <span>{{$item->description}}</span> <br>
                                <span>{{$item->created_at}}</span> <br>

                                <a class="btn btn-success mb-3 download" data-id="{{$item->id}}">Download
                                    (<span style="color: white" id="{{$item->id}}">{{$item->total_view}}</span>)</a>
                                <a class="btn btn-info mb-3 detail"
                                   data-file="{{asset('storage/uploads/ppid/'.$item->file)}}">Lihat Berkas</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{$data->links()}}
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="ppidModal" tabindex="-1" aria-labelledby="ppidModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ppidModalLabel">Dasar Hukum PPID</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h6>Undang-Undang Republik Indonesia</h6>
                    <ul>
                        <li>Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik</li>
                        <li>Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik</li>
                        <li>Undang-Undang Nomor 6 Tahun 2014 tentang Desa</li>
                    </ul>
                    <h6>Peraturan Pemerintah</h6>
                    <ul>
                        <li>Peraturan Pemerintah Nomor 61 Tahun 2010 Tentang Pelaksanaan Undang-Undang Nomor 14 Tahun
                            2008 tentang Keterbukaan Informasi Publik
                        </li>
                    </ul>
                    <h6>Peraturan Komisi Informasi</h6>
                    <ul>
                        <li>Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2010 tentang Standar
                            Layanan Informasi Publik
                        </li>
                        <li>Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2013 tentang Prosedur
                            Penyelesaian Sengketa Informasi Publik
                        </li>
                        <li>Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2017 tentang
                            Pengklasifikasian Informasi Publik
                        </li>
                        <li>Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2018 tentang Standar
                            Layanan Informasi Publik Desa
                        </li>
                        <li>Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1 Tahun 2021 tentang Standar
                            Layanan Informasi Publik
                        </li>
                    </ul>
                    <h6>Peraturan Menteri Dalam Negeri</h6>
                    <ul>
                        <li>Peraturan Pemerintah Nomor 61 Tahun 2010 Tentang Pelaksanaan Undang-Undang Nomor 14 Tahun
                            2008 tentang Keterbukaan Informasi Publik
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="ppidModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ppidModalLabel">Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <!-- Iframe untuk file -->
                    <iframe
                        id="fileViewer"
                        src="{{ asset('storage/uploads/ppid/sample-file.pdf') }}"
                        width="100%"
                        height="500"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        $('.download').click(function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: '/ppid/downloadPpid/' + id,
                type: 'GET',
                success: function (data) {
                    $('#' + id).text(data.total_view);
                    window.location.href = data.file;
                }
            });
        });

        $('.detail').click(function (e) {
            e.preventDefault();
            var file = $(this).data('file');
            $('#detail').modal('show');
            $('#fileViewer').attr('src', file);
        })
    </script>
@endpush
