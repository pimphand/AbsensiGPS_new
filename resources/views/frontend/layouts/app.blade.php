<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="DmptDev">
    <link rel="shortcut icon" type="image/png" href="{{asset('img/logomadiun.webp')}}">
    <title>Desa Kebonsari| {{$title ?? ""}}</title>
    <link href="{{asset('frontend/assets')}}/css/themify-icons.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/flaticon.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/jquery-ui.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/nice-select.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/owl.carousel.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/owl.theme.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/slick.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/slick-theme.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/swiper.min.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/owl.transitions.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/jquery.fancybox.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{asset('frontend/assets')}}/sass/style.css?t={{ now() }}" rel="stylesheet">
    <style>
        li > a.active::before {
            opacity: 0 !important;
        }

        .navbar-nav li a {
            text-decoration: none; /* Menghilangkan underline default */
            color: inherit; /* Menggunakan warna default dari tema */
            transition: color 0.3s ease-in-out, text-decoration 0.3s ease-in-out;
        }

        .navbar-nav li a:hover {
            color: #2979fe !important; /* Mengubah warna teks menjadi biru saat hover */
            text-decoration: underline !important; /* Menambahkan underline saat hover */
        }

        .navbar-nav li a.active {
            color: #2979fe !important;
            font-weight: bold;
            text-decoration: underline !important;
        }

    </style>
</head>

<body>

<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="{{asset('img/logomadiun.webp')}}" alt="">
            </div>
        </div>
    </div>
    <!-- end preloader -->

    @include('frontend.layouts.header')

    @yield('content')

    <!-- start of wpo-site-footer-section -->
    <footer class="wpo-site-footer">
        <div class="wpo-upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="widget about-widget">
                            <div class="logo widget-title" style="width: 210px !important;">
                                <img src="{{asset('img/logomadiun.webp')}}" width="80" alt="blog"> Desa Kebonsari
                            </div>

                        </div>
                    </div>
                    <div class="col col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="widget address-widget">
                            <div class="widget-title">
                                {{--                                <h3>Layanan</h3>--}}
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none">
                                            <path
                                                d="M19.9768 3.09698C17.9797 1.09986 15.3244 0 12.5001 0C9.67575 0 7.02037 1.09986 5.02329 3.09698C3.02617 5.09415 1.92632 7.74943 1.92632 10.5737C1.92632 16.2872 7.32857 21.0394 10.2309 23.5924C10.6342 23.9472 10.9825 24.2536 11.26 24.5128C11.6076 24.8375 12.0539 25 12.5 25C12.9463 25 13.3924 24.8375 13.7401 24.5128C14.0176 24.2536 14.3659 23.9472 14.7692 23.5924C17.6715 21.0393 23.0738 16.2872 23.0738 10.5737C23.0737 7.74943 21.9739 5.09415 19.9768 3.09698ZM13.8019 22.4929C13.3898 22.8555 13.0339 23.1686 12.7404 23.4427C12.6056 23.5685 12.3945 23.5686 12.2596 23.4427C11.9662 23.1685 11.6102 22.8554 11.1981 22.4929C8.46954 20.0927 3.39067 15.625 3.39067 10.5738C3.39067 5.55089 7.47706 1.4645 12.5 1.4645C17.5228 1.4645 21.6092 5.55089 21.6092 10.5738C21.6093 15.625 16.5304 20.0927 13.8019 22.4929Z"
                                                fill="#2979FE"/>
                                            <path
                                                d="M12.5001 5.51465C9.93068 5.51465 7.84035 7.60494 7.84035 10.1743C7.84035 12.7437 9.93068 14.834 12.5001 14.834C15.0695 14.834 17.1597 12.7437 17.1597 10.1743C17.1597 7.60494 15.0695 5.51465 12.5001 5.51465ZM12.5001 13.3695C10.7382 13.3695 9.3048 11.9361 9.3048 10.1743C9.3048 8.41246 10.7382 6.97906 12.5001 6.97906C14.2619 6.97906 15.6953 8.41246 15.6953 10.1743C15.6953 11.9361 14.2619 13.3695 12.5001 13.3695Z"
                                                fill="#2979FE"/>
                                        </svg>
                                    </div>
                                    Jl. Waringin Tunggal, Jumog, Kebonsari, Kec. Kb. Sari, Kabupaten Madiun, Jawa Timur
                                    63173
                                </li>
                                <li>
                                    <div class="icon">
                                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none">
                                            <g clip-path="url(#clip0_304_324)">
                                                <path
                                                    d="M18.1772 14.2479C17.7064 13.7576 17.1384 13.4955 16.5365 13.4955C15.9394 13.4955 15.3666 13.7527 14.8763 14.243L13.3424 15.7721C13.2161 15.7042 13.0899 15.6411 12.9686 15.578C12.7938 15.4906 12.6288 15.4081 12.488 15.3207C11.0511 14.4081 9.74531 13.2188 8.4929 11.6799C7.88611 10.913 7.47835 10.2673 7.18224 9.61201C7.58029 9.24794 7.94922 8.86931 8.30844 8.50523C8.44436 8.36931 8.58028 8.22854 8.7162 8.09262C9.7356 7.07321 9.7356 5.75284 8.7162 4.73344L7.39097 3.40821C7.24049 3.25773 7.08515 3.10239 6.93952 2.94705C6.64826 2.64608 6.34244 2.33541 6.02691 2.04415C5.55605 1.57814 4.99295 1.33057 4.40072 1.33057C3.8085 1.33057 3.23569 1.57814 2.75026 2.04415C2.7454 2.049 2.7454 2.049 2.74055 2.05386L1.09008 3.71889C0.468732 4.34024 0.114367 5.09751 0.0366984 5.97614C-0.079805 7.3936 0.337665 8.71397 0.65805 9.57803C1.44445 11.6994 2.61919 13.6654 4.37159 15.7721C6.49778 18.3109 9.056 20.3158 11.9783 21.7284C13.0948 22.2575 14.5851 22.8837 16.2501 22.9905C16.352 22.9953 16.4588 23.0002 16.5559 23.0002C17.6773 23.0002 18.619 22.5973 19.3568 21.7963C19.3617 21.7866 19.3714 21.7818 19.3763 21.7721C19.6287 21.4662 19.9199 21.1895 20.2258 20.8934C20.4345 20.6944 20.6481 20.4857 20.8568 20.2672C21.3374 19.7672 21.5898 19.1847 21.5898 18.5876C21.5898 17.9857 21.3325 17.408 20.8423 16.9226L18.1772 14.2479ZM19.9151 19.3595C19.9102 19.3595 19.9102 19.3643 19.9151 19.3595C19.7258 19.5633 19.5316 19.7478 19.3229 19.9517C19.0073 20.2527 18.6869 20.5682 18.386 20.9226C17.8957 21.4468 17.318 21.6944 16.5608 21.6944C16.4879 21.6944 16.4103 21.6944 16.3375 21.6895C14.8957 21.5973 13.5559 21.0342 12.5511 20.5536C9.80357 19.2235 7.39097 17.3352 5.38615 14.942C3.73083 12.9469 2.62404 11.1023 1.89104 9.12173C1.43959 7.91301 1.27455 6.97127 1.34736 6.08293C1.3959 5.51498 1.61435 5.04411 2.01726 4.6412L3.67257 2.98589C3.91044 2.76259 4.16286 2.64123 4.41043 2.64123C4.71625 2.64123 4.96382 2.82569 5.11916 2.98103C5.12401 2.98589 5.12887 2.99074 5.13372 2.99559C5.42983 3.27229 5.71138 3.55869 6.0075 3.86452C6.15798 4.01985 6.31332 4.17519 6.46866 4.33538L7.79388 5.66061C8.30844 6.17517 8.30844 6.65089 7.79388 7.16544C7.65311 7.30622 7.51719 7.44699 7.37641 7.58291C6.96865 8.00038 6.58031 8.38873 6.15798 8.76736C6.14827 8.77707 6.13856 8.78193 6.13371 8.79164C5.71624 9.20911 5.79391 9.61687 5.88128 9.89356C5.88614 9.90813 5.89099 9.92269 5.89585 9.93725C6.2405 10.7722 6.72593 11.5586 7.46379 12.4955L7.46864 12.5003C8.80843 14.1508 10.221 15.4372 11.7793 16.4226C11.9783 16.5488 12.1822 16.6508 12.3763 16.7478C12.5511 16.8352 12.7161 16.9177 12.8569 17.0051C12.8763 17.0148 12.8958 17.0294 12.9152 17.0391C13.0802 17.1216 13.2356 17.1605 13.3958 17.1605C13.7987 17.1605 14.0511 16.908 14.1336 16.8255L15.7938 15.1653C15.9588 15.0003 16.221 14.8013 16.5268 14.8013C16.8277 14.8013 17.0753 14.9906 17.2258 15.1556C17.2307 15.1605 17.2307 15.1605 17.2355 15.1653L19.9102 17.8401C20.4102 18.3352 20.4102 18.8449 19.9151 19.3595Z"
                                                    fill="#2979FE"/>
                                                <path
                                                    d="M12.4297 5.47092C13.7016 5.68451 14.8569 6.28644 15.7792 7.20876C16.7015 8.13108 17.2986 9.2864 17.5171 10.5582C17.5705 10.8786 17.8471 11.1019 18.1627 11.1019C18.2015 11.1019 18.2355 11.0971 18.2743 11.0922C18.6335 11.034 18.8714 10.6942 18.8132 10.3349C18.551 8.79612 17.8229 7.39322 16.7112 6.28159C15.5996 5.16995 14.1967 4.4418 12.6579 4.17967C12.2987 4.12142 11.9637 4.35928 11.9006 4.71365C11.8375 5.06801 12.0705 5.41267 12.4297 5.47092Z"
                                                    fill="#2979FE"/>
                                                <path
                                                    d="M22.9733 10.1458C22.5413 7.61184 21.3471 5.30604 19.5122 3.47111C17.6773 1.63618 15.3715 0.442024 12.8375 0.00999088C12.4831 -0.0531151 12.1482 0.1896 12.0851 0.543965C12.0268 0.903183 12.2647 1.23813 12.6239 1.30124C14.886 1.68473 16.9491 2.75753 18.5899 4.39343C20.2306 6.03419 21.2986 8.09727 21.6821 10.3594C21.7355 10.6798 22.0122 10.9031 22.3277 10.9031C22.3665 10.9031 22.4005 10.8982 22.4393 10.8933C22.7937 10.84 23.0364 10.5001 22.9733 10.1458Z"
                                                    fill="#2979FE"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_304_324">
                                                    <rect width="23" height="23" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    (570) 731-4462
                                </li>
                                <li>
                                    <div class="icon">
                                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none">
                                            <g clip-path="url(#clip0_304_370)">
                                                <path
                                                    d="M22.0228 9.58594C21.8024 9.36391 21.4439 9.36244 21.2218 9.58271C20.9997 9.80304 20.9983 10.1617 21.2186 10.3838L21.222 10.3873C21.3323 10.4985 21.4768 10.5539 21.6215 10.5539C21.7659 10.5539 21.9104 10.4987 22.0213 10.3887C22.2434 10.1684 22.2431 9.80803 22.0228 9.58594Z"
                                                    fill="#2979FE"/>
                                                <path
                                                    d="M28.8341 16.3973L23.5734 11.1366C23.3523 10.9155 22.9936 10.9155 22.7724 11.1366C22.5512 11.3578 22.5512 11.7165 22.7724 11.9377L26.9486 16.1139H16.9898C16.1636 16.1139 15.4916 15.4418 15.4916 14.6157V4.65688L19.5234 8.68867C19.7446 8.9098 20.1032 8.9098 20.3245 8.68867C20.5457 8.46749 20.5457 8.10884 20.3245 7.8876L15.2081 2.77131C14.9869 2.55019 14.6283 2.55019 14.4071 2.77131L5.37746 11.8011C5.15628 12.0223 5.15628 12.381 5.37746 12.6022L19.0034 26.2281C19.1096 26.3343 19.2537 26.394 19.4039 26.394C19.5542 26.394 19.6983 26.3343 19.8045 26.2281L28.8342 17.1984C28.9404 17.0921 29.0001 16.9481 29.0001 16.7979C29 16.6476 28.9403 16.5036 28.8341 16.3973ZM14.3589 4.42176V11.6353H7.14533L14.3589 4.42176ZM18.8375 24.4601L7.14533 12.768H14.3589V14.6157C14.3589 16.0664 15.5391 17.2467 16.9899 17.2467H18.8375V24.4601ZM19.9703 24.4602V17.2467H27.1838L19.9703 24.4602Z"
                                                    fill="#2979FE"/>
                                                <path
                                                    d="M3.8873 14.3867H0.566406C0.25358 14.3867 0 14.6404 0 14.9531C0 15.2659 0.25358 15.5195 0.566406 15.5195H3.8873C4.20013 15.5195 4.45371 15.266 4.45371 14.9531C4.45371 14.6404 4.20013 14.3867 3.8873 14.3867Z"
                                                    fill="#2979FE"/>
                                                <path
                                                    d="M5.57605 14.3867H5.56755C5.25472 14.3867 5.00114 14.6404 5.00114 14.9531C5.00114 15.2659 5.25472 15.5195 5.56755 15.5195H5.57605C5.88887 15.5195 6.14245 15.2659 6.14245 14.9531C6.14245 14.6404 5.88887 14.3867 5.57605 14.3867Z"
                                                    fill="#2979FE"/>
                                                <path
                                                    d="M2.37981 8.43945H0.567139C0.254313 8.43945 0.000732422 8.69309 0.000732422 9.00586C0.000732422 9.31863 0.254313 9.57227 0.567139 9.57227H2.37981C2.69264 9.57227 2.94622 9.31863 2.94622 9.00586C2.94622 8.69309 2.69264 8.43945 2.37981 8.43945Z"
                                                    fill="#2979FE"/>
                                                <path
                                                    d="M6.37264 8.43945H4.23004C3.91722 8.43945 3.66364 8.69309 3.66364 9.00586C3.66364 9.31863 3.91722 9.57227 4.23004 9.57227H6.37264C6.68547 9.57227 6.93905 9.31863 6.93905 9.00586C6.93905 8.69309 6.68547 8.43945 6.37264 8.43945Z"
                                                    fill="#2979FE"/>
                                                <path
                                                    d="M7.60581 17.502H4.43399C4.12116 17.502 3.86758 17.7556 3.86758 18.0684C3.86758 18.3811 4.12116 18.6348 4.43399 18.6348H7.60581C7.91863 18.6348 8.17221 18.3811 8.17221 18.0684C8.17221 17.7556 7.91858 17.502 7.60581 17.502Z"
                                                    fill="#2979FE"/>
                                                <path
                                                    d="M10.0825 21.127H2.09621C1.78338 21.127 1.5298 21.3806 1.5298 21.6934C1.5298 22.0061 1.78338 22.2598 2.09621 22.2598H10.0825C10.3953 22.2598 10.6489 22.0061 10.6489 21.6934C10.6489 21.3806 10.3953 21.127 10.0825 21.127Z"
                                                    fill="#2979FE"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_304_370">
                                                    <rect width="29" height="29" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>

                                </li>
                            </ul>
                            <div class="social-widget">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-skype"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="widget link-widget">
                            <div class="widget-title">
                                {{--                                <h3>Berita Populer:</h3>--}}
                            </div>
                            <ul>

                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
        <div class="wpo-lower-footer">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-6 col-lg-6 col-md-12 col-12">
                        <p class="copyright"> Copyright &copy; {{date('Y')}} by <a
                                href="https://www.instagram.com/_tanahkubur/?hl=en" class="link-secondary">DMPTDev</a>.
                            All
                            Rights Reserved.</p>
                    </div>
                    <div class="col col-xs-6 col-lg-6 col-md-12 col-12">
                        <p class="right"> Privacy & Policy || Terms & Conditions</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of wpo-site-footer-section -->

</div>
<!-- end of page-wrapper -->

<!-- All JavaScript files
================================================== -->
<script src="{{asset('frontend/assets')}}/js/jquery.min.js"></script>
<script src="{{asset('frontend/assets')}}/js/bootstrap.bundle.min.js"></script>
<!-- Plugins for this template -->
<script src="{{asset('frontend/assets')}}/js/modernizr.custom.js"></script>
<script src="{{asset('frontend/assets')}}/js/jquery.dlmenu.js"></script>
<script src="{{asset('frontend/assets')}}/js/jquery-plugin-collection.js"></script>
<!-- Custom script for this template -->
<script src="{{asset('frontend/assets')}}/js/script.js"></script>

@stack('js')
<script>
    $('.nama_desa').text($('#nama_desa').text())
</script>
</body>

</html>
