@php
    use App\Helpers\OrderHelper;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>Gacoan</title>
    <link href="user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="user/assets/css/fontawesome.css">
    <link rel="stylesheet" href="user/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="user/assets/css/owl.css">
    <link rel="stylesheet" href="user/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-f0qKrHclba2MSy33"></script>
    <style>
        .main-nav {
            padding: 55px 0;
        }

        .main-nav .logo {
            font-size: 24px;
        }
    </style>
</head>

<body>
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="{{ route('foods') }}" class="logo">
                            <h1>Gacoan</h1>
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('user2') }}">Order Now!</a></li>
                            <li class="scroll-to-section"><a href="{{ route('order') }}">Details Order</a></li>
                            <li class="scroll-to-section"><a href="{{ route('spending') }}">Spending</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                {{--  --}}
            </div>
        </div>
    </div>

    <div class="section events" id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div id="main" class="col-5">
                                <header class="mb-3">
                                    <a href="#" class="burger-btn d-block d-xl-none">
                                        <i class="bi bi-justify fs-3"></i>
                                    </a>
                                </header>
                            </div>

                            <div class="page-heading col-12 mt-3">
                                <section class="section">
                                    <div class="card">
                                        <div class="card-header" style="background-color: #7a6ad8;">
                                            <h5 class="card-title text-white">
                                                Spending
                                            </h5>
                                        </div>

                                        <div class="card-body">
                                            <table class="table table-striped" id="table1">
                                                <thead>
                                                    <tr>
                                                        <th>Food</th>
                                                        <th>Drink</th>
                                                        <th>Dimsum</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($order as $or)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $or->food->food }}</td>
                                                        <td>{{ $or->drinks->drink }}</td>
                                                        <td>{{ $or->dimsums->dimsum }}</td>
                                                        <td>Rp. {{ number_format(OrderHelper::index($or->id), 0, ',', '.') }}</td>
                                                    </tr>

                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>


                <footer>
                    <div class="container">
                        <div class="col-lg-12">
                            <p>© 2024 Gacoan</p>
                        </div>
                    </div>
                </footer>

                <!-- Scripts -->
                <!-- Bootstrap core JavaScript -->
                <script src="user/vendor/jquery/jquery.min.js"></script>
                <script src="user/assets/bootstrap/js/bootstrap.min.js"></script>
                <script src="user/assets/js/isotope.min.js"></script>
                <script src="user/assets/js/owl-carousel.js"></script>
                <script src="user/assets/js/counter.js"></script>
                <script src="user/assets/js/custom.js"></script>

</body>

</html>
