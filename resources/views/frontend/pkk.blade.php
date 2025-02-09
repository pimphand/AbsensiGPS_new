@extends('frontend.layouts.app')

@section('content')
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap mt-5">
                        <br>
                        <h2 class="mt-5">
                            PKK
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center py-5">
        <div class="row justify-content-center align-items-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">JABATAN DALAM TIM</th>
                    <th scope="col">ALAMAT</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $romawi = [1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV', 5 => 'V', 6 => 'VI'];
                @endphp

                @foreach($pkk as $key => $pk)
                    @if($key == 0 || $pkk[$key - 1]->kelompok != $pk->kelompok)
                        @if($pk->kelompok)
                            <tr>
                                <td colspan="3"><strong>Kelompok Kerja {{ $romawi[$pk->kelompok] }}</strong></td>
                                <td></td>
                            </tr>
                        @endif
                    @endif

                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pk->nama }}</td>
                        <td>{{ $pk->jabatan }}</td>
                        <td>{{ $pk->alamat }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
