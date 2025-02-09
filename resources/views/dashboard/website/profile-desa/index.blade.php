@extends('layouts.admin.master')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Konfigurasi
                    </div>
                    <h2 class="page-title">
                        Data Lokasi Kantor
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg-12">
                    <div class="card p-4">
                        <form action="{{route('profile-desa.index')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Nama Desa</label>
                                        <input type="text" class="form-control" name="nama"
                                               value="{{ optional($data)->data['nama'] }}"
                                               placeholder="Masukan Nama Cabang">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat"
                                               value="{{ optional($data)->data['alamat'] }}"
                                               placeholder="Masukan Lokasi Kantor">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Logo</label>
                                        <input type="file" class="form-control" name="logo" id="logo"
                                               placeholder="Masukan Lokasi Kantor">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Foto Struktur Organisasi Desa</label>
                                        <input type="file" class="form-control" name="struktur_organisasi"
                                               id="struktur_organisasi"
                                               placeholder="Masukan Lokasi Kantor">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <label class="form-label">Foto Struktur Organisasi Permusyawaratan</label>
                                        <input type="file" class="form-control" name="struktur_permusyawaratan"
                                               id="struktur_permusyawaratan"
                                               value="" placeholder="Masukan Lokasi Kantor">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <img
                                            src="{{optional($data)->data['logo'] ? asset('storage/'.optional($data)->data['logo']) : ''}}"
                                            id="show_logo"
                                            style="max-width: 200px; max-height: 200px; height: auto; width: auto;"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <img style="max-width: 200px; max-height: 200px; height: auto; width: auto;"
                                             src="{{optional($data)->data['struktur_organisasi'] ? asset('storage/'.optional($data)->data['struktur_organisasi']) : ''}}"
                                             id="show_struktur_organisasi" class="img-fluid" alt="">
                                    </div>
                                    <div class="mb-3 col-4">
                                        <img style="max-width: 200px; max-height: 200px; height: auto; width: auto;"
                                             src="{{optional($data)->data['struktur_permusyawaratan'] ? asset('storage/'.optional($data)->data['struktur_permusyawaratan']) : ''}}"
                                             id="show_struktur_permusyawaratan" class="img-fluid" alt="">
                                    </div>

                                    <div class="mb-3 col-12">
                                        <label class="form-label">Profile Desa</label>
                                        <textarea name="deskripsi" id="deskripsi" cols="30"
                                                  rows="10"></textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-pill w-100" id="addData">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('myScript')
    <script src="https://cdn.tiny.cloud/1/d7s5stojg34whjnjs39wyk1ka9qlym045koj4i7z4o3ch842/tinymce/7/tinymce.min.js"
            referrerpolicy="origin"></script>
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

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap emoticons link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            browser_spellcheck: true,
            relative_urls: false,
            remove_script_host: false,
            setup: function (editor) {
                editor.on('init', function () {
                    editor.setContent(`{!! optional($data)->data['deskripsi'] !!}`);
                });
            }
        });

        document.getElementById('logo').addEventListener('change', function (event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('show_logo').src = e.target.result;
            };
            reader.readAsDataURL(file);
        });

        document.getElementById('struktur_organisasi').addEventListener('change', function (event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('show_struktur_organisasi').src = e.target.result;
            };
            reader.readAsDataURL(file);
        });

        document.getElementById('struktur_permusyawaratan').addEventListener('change', function (event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('show_struktur_permusyawaratan').src = e.target.result;
            };
            reader.readAsDataURL(file);
        });

    </script>
@endpush
