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
