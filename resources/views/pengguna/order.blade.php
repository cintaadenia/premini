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
    <!-- Bootstrap core CSS -->
    <link href="user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="user/assets/css/fontawesome.css">
    <link rel="stylesheet" href="user/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="user/assets/css/owl.css">
    <link rel="stylesheet" href="user/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <style>7
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
                        <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="Cari Sesuatu" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
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
                        <section class="content">
                            <div class="row">
                                @foreach ($order as $ord)
                                <div class="col-md-4">
                                    <div class="card" style="width: 21rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">Detail Pesanan</h5>
                                            <br>
                                            <p>Food : {{ $ord->food->food }}</p>
                                            <p>Drink : {{ $ord->drinks->drink }}</p>
                                            <p>Dimsum : {{ $ord->dimsums->dimsum }}</p>
                                            <p>Catatan : {{ $ord->catatan }}</p>
                                            <h6>Total : <span style="color: red;">Rp {{ number_format(OrderHelper::index($ord->id), 0, ',', '.') }}</span></h6>
                                            <br>
                                                @if ($ord->status == 'UNPAID')
                                                <form action="{{ route('order.pay') }}" method="POST" class="payOrder">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $ord->id }}" />
                                                    <button class="btn btn-primary float-end" order="{{ $ord->id }}">Bayar Sekarang</button>
                                                </form>

                                                @elseif($ord->status == 'COOK')
                                                    <span class="badge bg-warning text-dark float-end">Sedang Dimasak</span>

                                                @elseif($ord->status == 'DELIVER')
                                                    <span class="badge bg-info float-end">Sedang Diantar</span>

                                                @elseif($ord->status == 'RECEIVED')
                                                    <span class="badge bg-success float-end">Sudah Diterima</span>
                                                @endif
                                            </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>


                        </div>
                    </section>
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
