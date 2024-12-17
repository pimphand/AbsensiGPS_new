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
                    <form action="/admin/cabang" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Name Cabang</label>
                                <input type="text" class="form-control" name="nama_cabang"
                                    value="{{ $cabang->nama_cabang }}" placeholder="Masukan Nama Cabang">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lokasi Kantor</label>
                                <input type="text" class="form-control" name="lokasi_kantor"
                                    value="{{ $cabang->lokasi_kantor }}" placeholder="Masukan Lokasi Kantor">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Radius (Meter)</label>
                                <input type="number" class="form-control" name="radius" placeholder="Masukan Radius"
                                    value="{{ $cabang->radius }}">
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
{{-- {{ $cabang->links('vendor.pagination.bootstrap-5') }} --}}
@endsection

@push('myScript')
<script>
    $(function() {
            $(".deleteConfirm").click(function(e) {
                var form = $(this).closest('form');
                e.preventDefault();
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons.fire({
                    title: 'Apa Kamu Yakin ?',
                    text: "Kamu tidak bisa membatalkan nya!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus !  ',
                    cancelButtonText: 'Tidak, Batalkan!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        swalWithBootstrapButtons.fire(
                            'Terhapus!',
                            'Data Kamu berhasil dihapus.',
                            'Berhasil'
                        )
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Dibatalkan',
                            'Datamu aman :)',
                            'error'
                        )
                    }
                })
            })
        })
</script>
@endpush

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