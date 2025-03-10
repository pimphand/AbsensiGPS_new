@php
$profile = \App\Models\Data::where('code', 'profile-desa')->first();
@endphp
<style>
    .wpo-site-header.wpo-site-header-s2 {
    font-size: 10px !important;
}

</style>
<header id="header">
    <div class="wpo-site-header wpo-site-header-s2" style="font-size: 10px important!;">
        <nav class="navigation navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                        <div class="mobail-menu">
                            <button type="button" class="navbar-toggler open-btn">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar first-angle"></span>
                                <span class="icon-bar middle-angle"></span>
                                <span class="icon-bar last-angle"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-4">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/">
                                <img
                                    src="{{$profile['data']['logo'] ?  asset('storage/'.$profile['data']['logo']): asset('img/logomadiun.webp')}}"
                                    width="80" alt="logo">
                                <span id="nama_desa">{{$profile['data']['nama']}}</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-1 col-1">
                        <div id="navbar" class="collapse navbar-collapse navigation-holder">
                            <button class="menu-close"><i class="ti-close"></i></button>
                            <ul class="nav navbar-nav mb-2 mb-lg-0">
                                <li class="menu-item-has-children">
                                    <a class="{{ request()->is(['/']) ? 'active' : '' }}" href="/">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" class="{{ request()->is(['/profile-desa']) ? 'active' : '' }}">Profil
                                        desa</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('profile.index')}}">{{__('Pemerintah desa')}}</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">LKD</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{route('lpmd')}}">LPMD</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('karangtaruna')}}">
                                                        KARANG TARUNA WAHANA
                                                        MERDEKA
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('pkk')}}">
                                                        PKK
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" class="{{ request()->is(['/profile-desa']) ? 'active' : '' }}">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('_ppid.index')}}">{{__('PPID')}}</a></li>
                                        <li><a href="{{route('idm')}}">{{__('IDM')}}</a></li>
                                        <li><a href="{{route('profile.index')}}">{{__('Info')}}</a></li>
                                    </ul>
                                </li>
                                <li><a href="/">Layanan Mandiri</a></li>
                                <li><a href="/umkm">UMKM</a></li>
                                <li><a href="/">Perpustakaan Digital</a></li>
                                <li class="absen-mobile hidden md:block" style="display: none">
                                    <a class="theme-btn"
                                       href="{{route('login')}}">Absen
                                    </a>
                                </li>
                            </ul>

                        </div><!-- end of nav-collapse -->
                    </div>
                    <div class="col-lg-1 col-md-4 col-4">
                        <div class="header-right">
                            <div class="close-form block md:hidden" id="absen">
                                <a class="theme-btn" href="{{route('login')}}">Absen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </div>
</header>
