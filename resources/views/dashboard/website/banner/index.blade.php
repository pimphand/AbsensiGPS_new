@extends('layouts.admin.master')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Banner
                    </div>
                    <h2 class="page-title">
                        Data Banner
                    </h2>
                </div>

                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block add-modal" data-bs-toggle="modal"
                       data-bs-target="#modal-tambah">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 5l0 14"></path>
                            <path d="M5 12l14 0"></path>
                        </svg>
                        Tambah Banner
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            @if ($data->isEmpty())
                <div class="alert alert-warning">
                    <p>Data Tidak ditemukan</p>
                </div>
            @endif
            @push('myScript')
                @if (session('success'))
                    <script>
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'success',
                            title: '{{ session('success') }}'
                        })
                    </script>
                @endif

                @if (session('error'))
                    <script>
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                        Toast.fire({
                            icon: 'error',
                            title: '{{ session('error') }}'
                        })
                    </script>
                @endif
            @endpush
            <div class="row row-cards">
                @foreach ($data as $kr)
                    <div class="col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body p-4 text-center">
                                @php
                                    $path = \Illuminate\Support\Facades\Storage::url('uploads/banner/' . $kr->image);
                                @endphp
                                <img src="{{ url($path) }}" alt="avatar"
                                     class="mb-3 rounded">
                                <div class="mt-3">
                                    <span class="badge bg-purple-lt">{{ $kr->title }}</span>
                                </div>
                                <h3 class="m-0 mb-1"><a href="#">{{ $kr->description }}</a></h3>
                                <div class="text-muted">{{ $kr->link }}</div>
                            </div>
                            <div class="d-flex">
                                <a href="#" class="card-btn bg-warning edit-modal" data-bs-toggle="modal"
                                   data-title="{{ $kr->title }}"
                                   data-link="{{ $kr->link }}"
                                   data-description="{{ $kr->description }}"
                                   data-image="{{ $kr->image }}"
                                   data-url="{{ route('banner.update', $kr->id) }}"
                                >
                                    <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                        <path
                                            d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                        </path>
                                        <path d="M16 5l3 3"></path>
                                    </svg>
                                    Edit
                                </a>

                                <a href="#" class="card-btn bg-danger deleteConfirm">
                                    <form action="{{ route('banner.destroy', $kr->id) }}" method="post"
                                          class="delete">
                                        @csrf
                                        @method('delete')
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class=" icon icon-tabler icon-tabler-trash" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 7l16 0"></path>
                                            <path d="M10 11l0 6"></path>
                                            <path d="M14 11l0 6"></path>
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                        </svg>
                                        Delete
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{ $data->links('vendor.pagination.bootstrap-5') }}
    <div class="modal modal-blur fade" id="modal-tambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control" name="title" placeholder="Masukan Judul"
                                   required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link</label>
                            <input type="text" class="form-control" name="link" placeholder="Masukan Link">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi Singkat</label>
                            <input type="text" class="form-control" name="description"
                                   placeholder="Masukan Deskripsi Singkat">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" class="form-control" name="image"
                                   placeholder="Masukan Deskripsi Singkat">
                        </div>
                        <div class="mb-3">
                            <img src="" id="_image_show" alt="">
                        </div>

                        <button type="button" class="btn btn-primary btn-pill w-100 save">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 5l0 14"/>
                                <path d="M5 12l14 0"/>
                            </svg>
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('myScript')
    <script>
        // show image if image uploaded
        document.querySelector('input[name="image"]').addEventListener('change', function (e) {
            const reader = new FileReader();
            reader.onload = function () {
                const output = document.getElementById('_image_show');
                output.src = reader.result;
            }
            reader.readAsDataURL(e.target.files[0]);
        });

        $('.save').click(function () {
            //ajax request
            $.ajax({
                url: $('#form').attr('action'),
                type: 'POST',
                data: new FormData($('#form')[0]),
                processData: false,
                contentType: false,
                success: function (data) {
                    $('#modal-tambah').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: data.message,
                    }).then(() => {
                        window.location.reload();
                    });
                },
                error: function (data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Terjadi kesalahan',
                    });
                }
            });
        });

        $('.edit-modal').click(function (e) {
            e.preventDefault(); // Mencegah aksi default tombol atau link
            $('#form')[0].reset(); // Mengatur ulang form
            ($('#form').attr('action', $(this).data('url'))); // Engagement action form

            //add input hidden for method put
            $('#form').append('<input type="hidden" name="_method" value="PUT">');
            // Mengatur judul modal
            $('.modal-title').text('Edit Banner');

            // Mengatur nilai input dengan benar
            $('input[name=title]').val($(this).data('title'));
            $('input[name=link]').val($(this).data('link'));
            $('input[name=description]').val($(this).data('description'));
            $('#_image_show').attr('src', $(this).data('image'));
            // Menampilkan modal
            $('#modal-tambah').modal('show');
        });

        $('.add-modal').click(function (e) {
            e.preventDefault();
            $('#form')[0].reset();
            $('#form').attr('action', '{{ route('banner.store') }}');
            $('#form').find('input[name="_method"]').remove();
            $('.modal-title').text('Tambah Banner');
            $('#_image_show').attr('src', '');

            $('#modal-tambah').modal('show');
        });

        $('.deleteConfirm').click(function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).find('.delete').submit();
                }
            });
        });
    </script>
@endpush
