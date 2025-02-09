@extends('frontend.layouts.app')
@section('content')
    <style>
        #deskripsi ul {
            padding-left: 50px;
            margin-bottom: 5px;
        }
    </style>
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap mt-5">
                        <br>
                        <h2 class="mt-5">Infografis <span class="nama_desa"></span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
            </div>
            <div class="col-md-7">
                <ul class="nav nav-tabs nav-fill text-dark" id="infografisTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="penduduk-tab" data-bs-toggle="tab" href="#penduduk" role="tab">Penduduk</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="apbdes-tab" data-bs-toggle="tab" href="#apbdes" role="tab">APBDes</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="stunting-tab" data-bs-toggle="tab" href="#stunting"
                           role="tab">Stunting</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="bansos-tab" data-bs-toggle="tab" href="#bansos" role="tab">Bansos</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="idm-tab" data-bs-toggle="tab" href="#idm" role="tab">IDM</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="sdgs-tab" data-bs-toggle="tab" href="#sdgs" role="tab">SDGs</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="penduduk" role="tabpanel">
                    <x-infografis.penduduk/>
                </div>
                <div class="tab-pane fade" id="apbdes" role="tabpanel">

                    <div class="container" id="data-apbdes">

                    </div>
                </div>
                <div class="tab-pane fade" id="stunting" role="tabpanel">
                    <h3>Segera Hadir</h3>
                </div>
                <div class="tab-pane fade" id="bansos" role="tabpanel">
                    <h3>Segera Hadir</h3>
                </div>
                <div class="tab-pane fade" id="idm" role="tabpanel">
                    <h3>Segera Hadir</h3>
                </div>
                <div class="tab-pane fade" id="sdgs" role="tabpanel">
                    <h3>Segera Hadir</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $.ajax({
                url: '{{ route('apbd.data') }}',
                type: 'GET',
                success: function (response) {
                    $('#data-apbdes').html(response);
                }
            });
        });
    </script>
@endpush
