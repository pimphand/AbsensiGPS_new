@extends('layouts.admin.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg-12">
                    <div class="card p-4">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-penduduk-5" class="nav-link active" data-bs-toggle="tab"
                                           aria-selected="true" role="tab">Penduduk</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-apbdes-5" class="nav-link" data-bs-toggle="tab"
                                           aria-selected="false" role="tab"
                                           tabindex="-1">APBDesa</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-pkk-5" class="nav-link" data-bs-toggle="tab"
                                           aria-selected="false" role="tab"
                                           tabindex="-1">PKK</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#tabs-katar-5" class="nav-link" data-bs-toggle="tab"
                                           aria-selected="false" role="tab"
                                           tabindex="-1">KATAR</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tabs-penduduk-5" role="tabpanel">
                                        @include('components.website-penduduk')
                                    </div>
                                    <div class="tab-pane" id="tabs-apbdes-5" role="tabpanel">
                                        @include('components.website-abpd')
                                    </div>
                                    <div class="tab-pane" id="tabs-pkk-5" role="tabpanel">
                                        @include('components.website-pkk')
                                    </div>
                                    <div class="tab-pane" id="tabs-katar-5" role="tabpanel">
                                        @include('components.website-katar')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('#card-form').hide();

        // Ketika tombol dengan id 'add' diklik
        $('#add').click(function () {
            // Mengosongkan form
            $('#tahun').val('');
            $('#pendapatan').val('');
            $('#belanja').val('');
            $('#penerimaan').val('');
            $('#pengeluaran').val('');
            $('#surplus_defisit').val('');
            // Menghapus method put
            $('#card-form form').find('input[name="_method"]').remove();
            $('#card-form form').attr('action', '{{route('apbds.index')}}'); // Mengubah action form
            $('#card-form').toggle(); // Menampilkan atau menyembunyikan card-form
        });

        $('.edit').click(function () {
            // Mengisi form dengan data yang diambil dari tombol edit
            $('#tahun').val($(this).data('tahun'));
            $('#pendapatan').val($(this).data('pendapatan'));
            $('#belanja').val($(this).data('belanja'));
            $('#penerimaan').val($(this).data('penerimaan'));
            $('#pengeluaran').val($(this).data('pengeluaran'));
            $('#surplus_defisit').val($(this).data('surplus_defisit'));
            $('#card-form').show(); // Menampilkan card-form
            //add method put
            $('#card-form form').append('<input type="hidden" name="_method" value="put">');
            $('#card-form form').attr('action', $(this).data('url')); // Mengubah action form
        });

        $('form.d-inline').submit(function (e) {
            if (!confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                e.preventDefault();
            }
        });
    </script>
@endpush
