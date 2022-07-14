<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ronda Minerva Hotel en Guadalajara, Jalisco">
    <meta name="keywords" content="Hotel, comfort, alberca, minerva, gdl, barato, tequila, centro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ronda Minerva Hotel | En Guadalajara, Jalisco</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('custom/css/custom.css')}}" type="text/css">

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('custom/img/ico/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('custom/img/ico/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('custom/img/ico/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('custom/img/ico/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('custom/img/ico/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('custom/img/ico/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('custom/img/ico/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('custom/img/ico/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('custom/img/ico/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('custom/img/ico/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('custom/img/ico/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('custom/img/ico/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('custom/img/ico/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('custom/img/ico/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('custom/img/ico/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    @yield('app-head')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="{{route('home')}}"><img src="{{ asset('/img/logos/Ronda_Minerva-Sello-white.png')}}" loading="lazy" alt="Ronda Minerva Hotel Logo" width="120px"></a>
                </div>
                <div class="nav-right">
                    <a href="#" class="primary-btn">WhatsApp</a>git add 
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="{{route('home')}}">Inicio</a></li>
                        <li><a href="{{route('rooms')}}">Habitaciones</a></li>
                        <li><a href="{{route('installations')}}">Instalaciones</a></li>
                        <li><a href="{{route('services')}}">Servicios</a></li>
                        <li><a href="{{route('contact')}}">Contacto</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a href="#"><img loading="lazy" alt="Ronda Minerva Hotel Logo" src="{{ asset('/img/logos/logo-white.png')}}"></a>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        {{-- {# <h5>Suscribete</h5>
                        <div class="newslatter-form">
                            <input type="text" placeholder="Email">
                            <button type="submit">Suscribirme</button>
                        </div> #} --}}
                        <div id="cont_8d8e1c72dacd1b1f56f1fc2535609b62">
                          <script type="text/javascript" async src="https://www.theweather.com/wid_loader/8d8e1c72dacd1b1f56f1fc2535609b62">
                          </script>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h5>Informacion de contacto</h5>
                        <ul>
                            <li><img src="{{ asset('/img/phone.png')}}" alt="">+52 33 3121 4700</li>
                            <li><img src="{{ asset('/img/placeholder.png')}}" alt="">Av. Adolfo López Mateos Sur 265, <br />Jardines del Bosque, 44520 Guadalajara, Jal.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul>
                            <li><a href="{{route('home')}}">Inicio</a></li>
                            <li><a href="{{route('rooms')}}">Habitaciones</a></li>
                            <li><a href="{{route('installations')}}">Instalaciones</a></li>
                            <li><a href="{{route('services')}}">Servicios</a></li>
                            <li><a href="{{route('contact')}}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
<div class="row pt-5">
                    <div class="col-lg-12 ">
                        <div class="small text-white text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Powered by <a href="https://pcbtroniks.com/" target="_blank">PCBTRONIKS</a> and PolenAvenue
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('/js/main.js')}}"></script>
    <script src="{{ asset('/js/reservation.js')}}"></script>

</body>

</html>
