@extends('frontend.layouts.app')

@section('content')
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap mt-5">
                        <br>
                        <h2 class="mt-5">
                            KARANG TARUNA WAHANA
                            MERDEKA
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
                @foreach($katar as $key => $pk)
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
