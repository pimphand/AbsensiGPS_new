@extends('frontend.layouts.app')

@section('content')
    <section class="hero-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                @foreach($banners as $banner)
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="{{asset('storage/uploads/banner/'.$banner->image)}}">
                            <!-- <div class="gradient-overlay"></div> -->
                            <div class="container-fluid">
                                <div class="slide-content">
                                    <div data-swiper-parallax="300" class="slide-title">
                                        <h2>{{$banner->title}}</h2>
                                    </div>
                                    <div data-swiper-parallax="400" class="slide-title-sub">
                                        <p>{{$banner->description}}</p>
                                    </div>
                                    <div class="clearfix"></div>
                                   @if($banner->url)
                                        <div data-swiper-parallax="500" class="slide-btns">
                                            <a href="{{$banner->url}}" class="theme-btn">Lebih Detail</a>
                                        </div>
                                   @endif
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                @endforeach


            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- start of features-->
    <section class="service-section-s2 section-padding mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="wpo-section-title s2  wow fadeInUp" data-wow-duration="1200ms">
                        <span></span>
                        <h2>Layanan kami Tersedia Secara Online</h2>
                        <p> Untuk memudahkan pelayanan desa kami memiliki beberapa layanan online yang bisa diakses melalui halaman berikut </p>
                    </div>
                </div>
            </div>
            <div class="service-wraper">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="service-card wow fadeInUp" data-wow-duration="1100ms">
                            <div class="left">
                                <div class="image">
                                    <img src="{{asset('frontend/assets')}}/images/features/img-1.svg" alt="" class="active">
                                    <img src="{{asset('frontend/assets')}}/images/features/1.svg" alt="" class="hover">
                                </div>
                            </div>
                            <div class="right">
                                <h2>Pembuatan kartu keluarga</h2>
                                <span> Pembuatan kartu keluarga adalah proses administratif yang penting untuk mencatat dan mengidentifikasi anggota keluarga dalam suatu rumah tangga. </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="service-card wow fadeInUp" data-wow-duration="1200ms">
                            <div class="left">
                                <div class="image">
                                    <img src="{{asset('frontend/assets')}}/images/features/img-2.svg" alt="" class="active">
                                    <img src="{{asset('frontend/assets')}}/images/features/2.svg" alt="" class="hover">
                                </div>
                            </div>
                            <div class="right">
                                <h2><a>Pembuatan KTP</a></h2>
                                <span>Pembuatan KTP adalah proses penting dalam administrasi pemerintahan yang membantu mengidentifikasi individu sebagai warga negara dan memberikan akses kepada berbagai layanan publik. </span>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="service-card wow fadeInUp" data-wow-duration="1500ms">
                            <div class="left">
                                <div class="image">
                                    <img src="{{asset('frontend/assets')}}/images/features/img-5.svg" alt="" class="active">
                                    <img src="{{asset('frontend/assets')}}/images/features/5.svg" alt="" class="hover">
                                </div>
                            </div>
                            <div class="right">
                                <h2><a>Permohonan Surat Keterangan</a></h2>
                                <span> Permohonan surat keterangan adalah langkah formal untuk mendapatkan dokumen tertulis yang memverifikasi informasi atau status tertentu. </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="service-card wow fadeInUp" data-wow-duration="1600ms">
                            <div class="left">
                                <div class="image">
                                    <img src="{{asset('frontend/assets')}}/images/features/img-6.svg" alt="" class="active">
                                    <img src="{{asset('frontend/assets')}}/images/features/6.svg" alt="" class="hover">
                                </div>
                            </div>
                            <div class="right">
                                <h2><a>Kritik dan Saran</a></h2>
                                <span>Berikan kritik dan saran anda supaya kami bisa melayani lebih baik.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of features-->

    <!-- start of authorlist-->
    <section class="authorlist-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-12">
                    <div class="wpo-section-title s2 wow fadeInLeftSlow" data-wow-duration="1700ms">
                        <span></span>
                        <h2>PROJEK DESA KAMI</h2>
                        <p>Kami mewujudkan desa Mandiri dengan memberdayakan masyarakat</p>
                    </div>
                </div>
                <div class="col-xl-8 col-12">
                    <div class="authorlist-wrap wow fadeInRightSlow" data-wow-duration="1700ms">
                        <div class="row">
                            <div class="col-lg-6 col-md-4 col-sm-6 col-12">
                                <div class="auth-card">
                                    <div class="shape">
                                        <svg viewBox="0 0 250 246" fill="none">
                                            <path
                                                d="M0 90.5622C0 85.4392 3.25219 80.8812 8.09651 79.2148L234.097 1.47079C241.887 -1.2093 250 4.57911 250 12.8182V234C250 240.627 244.627 246 238 246H12C5.37258 246 0 240.627 0 234V90.5622Z" />
                                        </svg>
                                    </div>
                                    <div class="image">
                                        <img src="{{asset('img/gerabah.jpg')}}" alt="">
                                    </div>
                                    <div class="content">

                                        <h2>Badan Usaha Milik Desa</h2>
                                        <h4>Badan usaha yang dikelola oleh masyarakat desa kebonsari Madiun untuk pemberdayaan masyarakat</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6 col-12">
                                <div class="auth-card">
                                    <div class="shape">
                                        <svg viewBox="0 0 250 246" fill="none">
                                            <path
                                                d="M0 90.5622C0 85.4392 3.25219 80.8812 8.09651 79.2148L234.097 1.47079C241.887 -1.2093 250 4.57911 250 12.8182V234C250 240.627 244.627 246 238 246H12C5.37258 246 0 240.627 0 234V90.5622Z" />
                                        </svg>
                                    </div>
                                    <div class="image">
                                        <img src="{{asset('img/batik.jpg')}}" alt="">
                                    </div>
                                    <div class="content">

                                        <h2>Membatik</h2>
                                        <h4>Memberdayakan ibu-ibu PKK dalam pembuatan batik</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-6 col-12">
                                <div class="auth-card">
                                    <div class="shape">
                                        <svg viewBox="0 0 250 246" fill="none">
                                            <path
                                                d="M0 90.5622C0 85.4392 3.25219 80.8812 8.09651 79.2148L234.097 1.47079C241.887 -1.2093 250 4.57911 250 12.8182V234C250 240.627 244.627 246 238 246H12C5.37258 246 0 240.627 0 234V90.5622Z" />
                                        </svg>
                                    </div>
                                    <div class="image">
                                        <img src="{{asset('img/kuliner.png')}}" alt="">
                                    </div>
                                    <div class="content">

                                        <h2>Sunday Market: Kuliner ndeso</h2>
                                        <h4>Jajanan ndeso dari masyarakat kami yang diadakan setiap Minggu pagi pukul 5 - 8 pagi.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of authorlist-->

    <!-- start of blog-->
    <section class="blog-section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="wpo-section-title s2 wow fadeInUp" data-wow-duration="1200ms">
                        <span>BERITA</span>
                        <h2>Tujuan kami adalah membangun desa mandiri</h2>
                        <p> Desa mandiri merupakan konsep pembangunan yang mengedepankan kemandirian dalam berbagai aspek kehidupan, seperti ekonomi, sosial, budaya, dan lingkungan. Hal ini bertujuan untuk menciptakan desa yang tidak hanya bertahan, tetapi juga berkembang menuju kemakmuran. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-card wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="assets/images/blog/img-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <ul>
                                    <li>
                                        <span>24 SEP 2023</span>
                                        <span class="date">DATE</span>
                                    </li>
                                    <li>
                                        <span>02K</span>
                                        <span class="date">Comment</span>
                                    </li>
                                    <li>
                                        <span>02K</span>
                                        <span class="date">Comment</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="blog-single.html">Hotels Amidst Nature's Bounty for Nature
                                        Enthusiasts.</a>
                                </h2>
                                <a href="blog-single.html" class="blog-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-card wow fadeInUp" data-wow-duration="1700ms">
                        <div class="image">
                            <img src="assets/images/blog/img-2.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <ul>
                                    <li>
                                        <span>24 SEP 2023</span>
                                        <span class="date">DATE</span>
                                    </li>
                                    <li>
                                        <span>02K</span>
                                        <span class="date">Comment</span>
                                    </li>
                                    <li>
                                        <span>02K</span>
                                        <span class="date">Comment</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="blog-single.html">Chic Boutique Hotels to Elevate Your Stay.</a>
                                </h2>
                                <a href="blog-single.html" class="blog-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-card wow fadeInUp" data-wow-duration="1900ms">
                        <div class="image">
                            <img src="assets/images/blog/img-3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <ul>
                                    <li>
                                        <span>24 SEP 2023</span>
                                        <span class="date">DATE</span>
                                    </li>
                                    <li>
                                        <span>02K</span>
                                        <span class="date">Comment</span>
                                    </li>
                                    <li>
                                        <span>02K</span>
                                        <span class="date">Comment</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="text">
                                <h2>
                                    <a href="blog-single.html">Experience 5-Star Stays Without Breaking the
                                        Bank.</a>
                                </h2>
                                <a href="blog-single.html" class="blog-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
