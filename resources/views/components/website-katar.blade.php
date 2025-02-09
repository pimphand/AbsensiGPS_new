<div class="d-flex justify-content-between">
    <h4>APBDes</h4>
    <button class="btn btn-info" id="addPkk">Tambah Data</button>
</div>
<div class="card p-3 mt-3" id="pkk-form">
    <form action="{{route('pkk.index')}}" method="post" id="form_pkk"
          enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="row">
                <div class="mb-3 col-4">
                    @php
                        $romawi = [1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV', 5 => 'V', 6 => 'VI'];
                        $jabatan = ['Ketua TP PKK Desa', 'Wakil Ketua', 'Sekretaris', 'Bendahara', 'Ketua', 'Anggota'];
                    @endphp
                    <label class="form-label">Kelompok PKK</label>
                    <select class="form-control" name="kelompok"
                            id="kelompok">
                        <option value="" selected>Pilih Kelompok PKK</option>
                        @for ($k = 1; $k <= 6; $k++)
                            <option value="{{ $k }}">Kelompok Kerja {{ $romawi[$k] }}</option>
                        @endfor
                    </select>
                </div>
                <div class="mb-3 col-4">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama"
                           id="nama" required
                           placeholder="Masukan Nama Lengkap">
                </div>
                <div class="mb-3 col-4">
                    <label class="form-label">Jabatan</label>
                    <select class="form-control" name="jabatan" required
                            id="jabatan">
                        <option value="" selected>Pilih Jabatan</option>
                        @foreach($jabatan as $j)
                            <option value="{{ $j }}">{{ $j }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-12">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat"
                           id="alamat" required value="Ds. Kebonsari RT"
                           placeholder="Masukan Alamat Lengkap">
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
                    <th>Nama</th>
                    <th>Kelompok</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pkk as $key => $pk)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $pk->nama }}</td>
                        <td>
                            @if($pk->kelompok)
                                {{ 'Kelompok Kerja ' . $romawi[$pk->kelompok] }}
                            @endif
                        </td>
                        <td>{{ $pk->jabatan }}</td>
                        <td>{{ $pk->alamat }}</td>
                        <td>
                            <button class="btn btn-warning editPkk"
                                    data-id="{{ $pk->id }}"
                                    data-kelompok="{{ $pk->kelompok }}"
                                    data-nama="{{ $pk->nama }}"
                                    data-jabatan="{{ $pk->jabatan }}"
                                    data-action="{{ route('pkk.update', $pk->id) }}"
                                    data-alamat="{{ $pk->alamat }}">Edit
                            </button>
                            <button class="btn btn-danger" id="deletePkk"
                                    data-id="{{ $pk->id }}">Hapus
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('js')
    <script>
        $('.editPkk').click(function (e) {
            e.preventDefault()
            let kelompok = $(this).data('kelompok')
            let nama = $(this).data('nama')
            let jabatan = $(this).data('jabatan')
            let alamat = $(this).data('alamat')

            $("#form_pkk").find('#kelompok').val(kelompok)
            $("#form_pkk").find('#nama').val(nama)
            $("#form_pkk").find('#jabatan').val(jabatan)
            $("#form_pkk").find('#alamat').val(alamat)
            $("#form_pkk").attr('action', $(this).data('action'))
            $("#form_pkk").append('<input type="hidden" name="_method" value="PUT">')
            $('#pkk-form').show()
            //
        })

        $('#pkk-form').hide()
        $('#addPkk').click(function (e) {
            //reset form
            $("#form_pkk").find('#kelompok').val('')
            $("#form_pkk").find('#nama').val('')
            $("#form_pkk").find('#jabatan').val('')
            $("#form_pkk").find('#alamat').val('')
            $("#form_pkk").find('input[name="_method"]').remove()
            //action form
            $("#form_pkk").attr('action', '{{ route('pkk.index') }}')
            e.preventDefault()
            $('#pkk-form').toggle()
        })
    </script>
@endpush
