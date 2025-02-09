<div class="d-flex justify-content-between">
    <h4>APBDes</h4>
    <button class="btn btn-info" id="addKt">Tambah Data</button>
</div>
<div class="card p-3 mt-3" id="kt-form">
    <form action="{{route('katar.index')}}" method="post" id="form_kt"
          enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="row">

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
                        @foreach($jabatan_organisasi as $jo)
                            <option value="{{ $jo }}">{{ $jo }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-4">
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
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="table-responsive mt-3">
            <table class="table table-vcenter table-mobile-md card-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($katar as $ky => $kt)
                    <tr>
                        <td>{{ $ky + 1 }}</td>
                        <td>{{ $kt->nama }}</td>
                        <td>{{ $kt->jabatan }}</td>
                        <td>{{ $kt->alamat }}</td>
                        <td>
                            <button class="btn btn-warning editKT"
                                    data-id="{{ $kt->id }}"
                                    data-jabatan="{{ $kt->jabatan }}"
                                    data-nama="{{ $kt->nama }}"
                                    data-action="{{ route('katar.update', $kt->id) }}"
                                    data-alamat="{{ $kt->alamat }}">Edit
                            </button>
                            <form action="{{ route('katar.destroy', $kt->id) }}"
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

@push('js')
    <script>
        $('.editKT').click(function (e) {
            e.preventDefault()
            let jabatan = $(this).data('jabatan')
            let nama = $(this).data('nama')
            let alamat = $(this).data('alamat')

            $("#form_kt").find('#nama').val(nama)
            $("#form_kt").find('#jabatan').val(jabatan)
            $("#form_kt").find('#alamat').val(alamat)
            $("#form_kt").attr('action', $(this).data('action'))
            $("#form_kt").append('<input type="hidden" name="_method" value="PUT">')
            $('#kt-form').show()
            //
        })

        $('#kt-form').hide()
        $('#addKt').click(function (e) {
            //reset form
            $("#form_kt").find('#jabatan').val('')
            $("#form_kt").find('#nama').val('')
            $("#form_kt").find('#alamat').val('')
            $("#form_kt").find('input[name="_method"]').remove()
            //action form
            $("#form_kt").attr('action', '{{ route('katar.index') }}')
            e.preventDefault()
            $('#kt-form').toggle()
        })

        $(document).ready(function () {
            setTimeout(function () {
                $("#success-alert").fadeOut();
            }, 3000);
        });
    </script>
@endpush
