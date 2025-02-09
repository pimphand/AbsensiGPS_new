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
                                        <a href="#tabs-activity-5" class="nav-link" data-bs-toggle="tab"
                                           aria-selected="false" role="tab"
                                           tabindex="-1">Activity</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tabs-penduduk-5" role="tabpanel">
                                        @include('components.website-penduduk')
                                    </div>
                                    <div class="tab-pane" id="tabs-apbdes-5" role="tabpanel">
                                        <div class="d-flex justify-content-between">
                                            <h4>APBDes</h4>
                                            <button class="btn btn-info" id="add">Tambah Data</button>
                                        </div>
                                        <div class="card p-3 mt-3" id="card-form">
                                            <form action="{{route('apbds.index')}}" method="post"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">Tahun</label>
                                                            <select class="form-control" name="tahun"
                                                                    id="tahun">
                                                                <option value="" selected>Pilih Tahun</option>
                                                                @php
                                                                    $tahunSekarang = date('Y');
                                                                    $tahunMulai = $tahunSekarang - ($tahunSekarang % 5);
                                                                @endphp
                                                                @for ($i = $tahunMulai; $i >= $tahunMulai - 5; $i -= 1)
                                                                    <option value='{{$i}}'>{{$i}}</option>
                                                                @endfor
                                                            </select>

                                                        </div>
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">Pendapatan</label>
                                                            <input type="text" class="form-control" name="pendapatan"
                                                                   id="pendapatan"
                                                                   placeholder="Masukan Pendapatan APBDes">
                                                        </div>
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">Belanja</label>
                                                            <input type="text" class="form-control" name="belanja"
                                                                   id="belanja"
                                                                   placeholder="Masukan Belanja APBDes">
                                                        </div>
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">Penerimaan</label>
                                                            <input type="text" class="form-control" name="penerimaan"
                                                                   id="penerimaan"
                                                                   placeholder="Masukan Penerimaan APBDes">
                                                        </div>
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">Pengeluaran</label>
                                                            <input type="text" class="form-control" name="pengeluaran"
                                                                   id="pengeluaran"
                                                                   placeholder="Masukan Pengeluaran APBDes">
                                                        </div>
                                                        <div class="mb-3 col-4">
                                                            <label class="form-label">Surplus/Defisit</label>
                                                            <input type="text" class="form-control"
                                                                   name="surplus_defisit"
                                                                   id="surplus_defisit"
                                                                   placeholder="Masukan surplus_defisit APBDes">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-info" id="add">Simpan</button>
                                            </form>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="card mt-3">
                                                <div class="table-responsive">
                                                    <table class="table table-vcenter table-mobile-md card-table">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Tahun</th>
                                                            <th>Pendapatan</th>
                                                            <th>Belanja</th>
                                                            <th>Penerimaan</th>
                                                            <th>Pengeluaran</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($apbds as $apbd)
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{$apbd->tahun}}</td>
                                                                <td>{{$apbd->pendapatan}}</td>
                                                                <td>{{$apbd->belanja}}</td>
                                                                <td>{{$apbd->penerimaan}}</td>
                                                                <td>{{$apbd->pengeluaran}}</td>
                                                                <td>
                                                                    <a href="javascript:void(0)"
                                                                       data-tahun="{{$apbd->tahun}}"
                                                                       data-pendapatan="{{$apbd->pendapatan}}"
                                                                       data-belanja="{{$apbd->belanja}}"
                                                                       data-penerimaan="{{$apbd->penerimaan}}"
                                                                       data-pengeluaran="{{$apbd->pengeluaran}}"
                                                                       data-surplus_defisit="{{$apbd->surplus_defisit}}"
                                                                       data-url="{{route('apbds.update', $apbd->id)}}"
                                                                       class="btn btn-warning edit">Edit</a>
                                                                    <form
                                                                        action="{{route('apbds.destroy', $apbd->id)}}"
                                                                        method="post" class="d-inline">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button class="btn btn-danger">Hapus</button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabs-activity-5" role="tabpanel">
                                        <h4>Activity tab</h4>
                                        <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet,
                                            facilisi sit mauris
                                            accumsan nibh habitant senectus
                                        </div>
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
