@extends('layouts.admin.master')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->

                    <h2 class="page-title">
                        PPID
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div style="display: flex; justify-content: space-between">
                        <button class="btn btn-dark" style="margin-right: 10px" type="button" id="_add">
                            Tambah PPID
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="table-striped">
                            <table class="table table-vcenter table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>File</th>
                                    <th>Jumlah Download</th>
                                    <th>Tanggal Upload</th>
                                    <th class="w-1"></th>
                                </tr>
                                </thead>
                                <tbody id="loadAbsensi">
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->description}}</td>
                                        <td><a href="{{asset('storage/uploads/ppid/'.$item->file)}}" target="_blank">Download</a>
                                        </td>
                                        <td>{{$item->total_view}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                        data-bs-boundary="viewport" data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item edit"
                                                       data-title="{{$item->title}}"
                                                       data-description="{{$item->description}}"
                                                       data-url="{{route('ppid.update', $item->id)}}">Edit</a>
                                                    <a class="dropdown-item delete"
                                                       data-url="{{route('ppid.destroy', $item->id)}}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
<!-- Modal Foto Masuk -->
<div class="modal modal-blur fade" id="_modal_form" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_">Tambah</h5>
                <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body" id="loadMap">
                <form id="form" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                        <span class="text-danger" id="error-title"></span>
                    </div>
                    <div class="form-group">
                        <label for="title">Deskripsi</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                        <span class="text-danger" id="error-description"></span>
                    </div>
                    <div class="form-group">
                        <label for="title">File</label>
                        <input type="file" class="form-control" id="file" name="file" required>
                        <span class="text-danger" id="error-file"></span>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button class="btn btn-success" id="save">Simpan</button>
            </div>
        </div>
    </div>
</div>
@push('myScript')
    <script>
        $(function () {
            $('#save').click(function (e) {
                e.preventDefault();
                var form = $('#form')[0];
                var formData = new FormData(form);
                $.ajax({
                    type: 'POST',
                    url: $('#form').attr('action'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    cache: false,
                    success: function (respond) {
                        $('#_modal_form').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: respond.success,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        })

                    },
                    error: function (response) {
                        if (response.status == 422) {
                            var errors = response.responseJSON.errors;
                            if (errors.title) {
                                $('#error-title').html(errors.title[0]);
                            }
                            if (errors.description) {
                                $('#error-description').html(errors.description[0]);
                            }
                            if (errors.file) {
                                $('#error-file').html(errors.file[0]);
                            }
                        }
                    }
                })
            })

            $("#_add").click(function (e) {
                e.preventDefault();
                $('#form')[0].reset();
                $('#error-title').html('');
                $('#error-description').html('');
                $('#error-file').html('');
                //remove put

                $("#title").html('Tambah PPID');
                $("#form").attr('action', "{{route('ppid.store')}}");
                $("#_modal_form").modal('show');
            })

            $('.btn-danger').click(function (e) {
                e.preventDefault();
                $("#_modal_form").modal('hide');
            })

            $('.delete').click(function (e) {
                e.preventDefault();
                var url = $(this).data('url');
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang dihapus tidak bisa dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'DELETE',
                            url: url,
                            data: {
                                _token: "{{ csrf_token() }}"
                            },
                            success: function (respond) {
                                Swal.fire(
                                    'Terhapus!',
                                    respond.success,
                                    'success'
                                ).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.reload();
                                    }
                                })
                            }
                        })
                    }
                })
            })

            $('.edit').click(function (e) {
                e.preventDefault();
                var title = $(this).data('title');
                var description = $(this).data('description');
                var url = $(this).data('url');
                $('#form')[0].reset();
                $("#title_").html('Edit PPID ' + title);
                $("#form").attr('action', url);
                $("#title").val(title);
                //add method put
                $("#form").append('<input type="hidden" name="_method" value="PUT">');
                $("#description").val(description);
                $("#_modal_form").modal('show');
            })
        })
    </script>
@endpush
