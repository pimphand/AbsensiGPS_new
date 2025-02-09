@extends('frontend.layouts.app')
@section('content')
    <style>
        #deskripsi ul {
            padding-left: 50px;
            margin-bottom: 5px;
        }
    </style>
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap mt-5">
                        <br>
                        <h2 class="mt-5">Profile Desa</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="wpo-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 offset-lg-1 col-12">
                    <div class="wpo-blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media text-center">
                                @if($data)
                                    <img style="max-width: 300px; max-height: 300px; height: auto; width: auto;"
                                         src="{{asset('storage/'.$data['data']['logo'])}}" alt="">
                                @else
                                    <img src="{{asset('img/logomadiun.webp')}}" alt="">
                                @endif
                            </div>

                            @if($data)
                                <div class="text-justify" id="deskripsi">
                                    {!! $data['data']['deskripsi'] !!}
                                </div>
                            @endif

                            <div class="entry-media text-center mt-5">
                                @if($data)
                                    <h3>Struktur Organisasi Pemerintahan Desa</h3>
                                    <img style="max-width: 800px; max-height: 800px; height: auto; width: auto;"
                                         src="{{asset('storage/'.$data['data']['struktur_organisasi'])}}" alt="">
                                @else
                                    <img src="{{asset('img/logomadiun.webp')}}" alt="">
                                @endif
                            </div>
                            <div class="entry-media text-center mt-5">
                                @if($data)
                                    <h3>Struktur Organisasi Badan Permusyawaratan Desa</h3>
                                    <img style="max-width: 800px; max-height: 800px; height: auto; width: auto;"
                                         src="{{asset('storage/'.$data['data']['struktur_permusyawaratan'])}}" alt="">
                                @else
                                    <img src="{{asset('img/logomadiun.webp')}}" alt="">
                                @endif
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
@endsection
