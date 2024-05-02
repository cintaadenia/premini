@if ($errors->any())
    @foreach ($errors->all() as $item)
        <script>
            console.log("{{ $item }}")
        </script>
    @endforeach
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Gacoan</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="user/assets/css/fontawesome.css">
    <link rel="stylesheet" href="user/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="user/assets/css/owl.css">
    <link rel="stylesheet" href="user/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        .select2-container--default .select2-selection--multiple {
            width: 100%;
            border-radius: 25px;
            background-color: rgba(255, 255, 255, 0.15);
            border: none;
            outline: none;
            font-weight: 300;
            font-size: 14px;
            color: #1b1919;
            margin-bottom: 30px;
            padding: 14px;
            position: relative;
            z-index: 3;
        }

        .select2-search__field {
            background-color: transparent !important;
            color: #fff !important;
            height: 30px;
        }

        /* edit inputan select 2 */
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #f2e3f7;
            border: 1px solid #aaa;
            border-radius: 4px;
            box-sizing: border-box;
            display: inline-block;
            margin-left: 9px;
            margin-bottom: 5%;
            padding: 0;
            position: relative;
            max-width: 100%;
            height: 45px;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: bottom;
            white-space: nowrap;
        }
    </style>


</head>

<body>

    <!-- ** Preloader Start ** -->
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
    <!-- ** Preloader End ** -->

    <!-- ** Header Area Start ** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ** Logo Start ** -->
                        <a href="{{ route('foods') }}" class="logo">
                            <h1>Gacoan</h1>
                        </a>
                        <!-- ** Logo End ** -->
                        <!-- ** Serach Start ** -->
                        <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="Cari Sesuatu" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                        <!-- ** Serach Start ** -->
                        <!-- ** Menu Start ** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#order">Order Now!</a></li>
                            <li class="scroll-to-section"><a href="{{ route('order') }}">Details Order</a></li>
                            <li class="scroll-to-section"><a href="{{ route('spending') }}">Spending</a></li>
                            <li class="scroll-to-section">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    style="color: rgb(254, 254, 254); background-color: transparent; text-decoration: none; cursor: pointer;"
                                    onclick="delayedAlert()">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            <script>
                                function delayedAlert() {
                                    setTimeout(function() {
                                        alert("Yakin Log out?.");
                                    }, 1000);
                                }
                            </script>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ** Menu End ** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ** Header Area End ** -->

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                <span class="category">Mie Gacoan</span>
                                <h2>Mie Dulu Baru Skripsi. Mie Dulu Ga sihh...</h2>
                                <p>"Sensasi Pedasnya Bikin Ketagihan, Mie Gacoan Pilihan Terbaik!"</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <div class="rating">
                                            <i class="fas fa-star" style="color: gold;"></i>
                                            <i class="fas fa-star" style="color: gold;"></i>
                                            <i class="fas fa-star" style="color: gold;"></i>
                                            <i class="fas fa-star" style="color: gold;"></i>
                                            <i class="fas fa-star" style="color: gold;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="item item-2">
                            <div class="header-text">
                                <span class="category">Mie Gacoan</span>
                                <h2>Siang-Siang Tuh Kalemin aja guys</h2>
                                <p>"Kreasikan Hidanganmu dengan Mie Gacoan, Selalu Berkesan!"</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <div class="rating">
                                            <i class="fas fa-star" style="color: gold;"></i>
                                            <i class="fas fa-star" style="color: gold;"></i>
                                            <i class="fas fa-star" style="color: gold;"></i>
                                            <i class="fas fa-star" style="color: gold;"></i>
                                            <i class="fas fa-star" style="color: gold;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="item item-3">
                            <div class="header-text">
                                <span class="category">Mie Gacoan</span>
                                <h2>Ujian Terberat adalah Macet, solusinya Mie Gacoan</h2>
                                <p>"Setiap Gigitan Mie Gacoan, Sebuah Petualangan Rasa!"</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <div class="rating">
                                            <i class="fas fa-star" style="color: gold;"></i>
                                            <i class="fas fa-star" style="color: gold;"></i>
                                            <i class="fas fa-star" style="color: gold;"></i>
                                            <i class="fas fa-star" style="color: gold;"></i>
                                            <i class="fas fa-star" style="color: gold;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        <h6>Mie Gacoan</h6>
                        <h2>Kuy Guys Order Sekarang!</h2>
                        <p>Inovasi akan selalu kami kedepankan agar "Mie Gacoan" tetap relevan dan menjadi pilihan
                            terbaik bagi para customer fanatik.</p>
                        <div class="special-offer">
                            <span class="offer">off<br><em>50%</em></span>
                            <h6>Valide: <em>24 April 2036</em></h6>
                            <h4>Special Offer <em>50%</em> OFF!</h4>
                            {{-- <a href="#"></i></a> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" id="order">
                    <div class="contact-us-content">
                        <form id="contact-form" action="{{ route('order.create') }}" method="post">
                            @csrf
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="number" name="noTelepon" id="noTelepon"
                                        value="{{ old('noTelepon') }}" placeholder="No Telepon..." required>
                                </fieldset>
                            </div>


                            <div class="col-lg-12">
                                <fieldset>
                                    <select class="js-example-basic-multiple text-white form-select"
                                        multiple="multiple" name="makanan" data-placeholder="Pilih Makanan...">
                                        @forelse ($foods as $food)
                                            <option value="{{ $food->id }}">{{ $food->food }}</option>

                                        @empty
                                            <option>Belum ada makanan</option>
                                        @endforelse
                                    </select>
                                </fieldset>
                            </div>


                            <div class="col-lg-12">
                                <fieldset>
                                    <select class="js-example-basic-multiple text-white form-select"
                                        multiple="multiple" name="level" data-placeholder="Pilih Level...">
                                        @forelse ($levels as $level)
                                            <option value="{{ $level->id }}">{{ $level->level }}</option>

                                        @empty
                                            <option>Makanan & Level tidak tersedia</option>
                                        @endforelse
                                    </select>
                                </fieldset>
                            </div>


                            <div class="col-lg-12">
                                <fieldset>
                                    <select class="js-example-basic-multiple text-white form-select" name="minuman"
                                        multiple="multiple" data-placeholder="Pilih Minuman...">
                                        @forelse ($drinks as $drink)
                                            <option value="{{ $drink->id }}">{{ $drink->drink }}</option>

                                        @empty
                                            <option>Belum ada minuman</option>
                                        @endforelse
                                    </select>
                                </fieldset>
                            </div>


                            <div class="col-lg-12">
                                <fieldset>
                                    <select class="js-example-basic-multiple text-white form-select" name="dimsum"
                                        multiple="multiple" data-placeholder="Pilih Dimsum...">
                                        @forelse ($dimsums as $dimsum)
                                            <option value="{{ $dimsum->id }}">{{ $dimsum->dimsum }}</option>

                                        @empty
                                            <option>Belum ada dimsum</option>
                                        @endforelse
                                    </select>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="catatan" id="catatan" placeholder="Catatan..." autocomplete="on" required></textarea>
                                </fieldset>
                            </div>



                            <div class="col-lg-12">
                                <fieldset>
                                    <button class="btn btn-light p-3">Order Sekarang!</button>
                                </fieldset>
                            </div>

                    </div>
                    </form>
                </div>
            </div>



            <br>
            <br>
            <br>
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

            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.js-example-basic-multiple').select2();
                });
            </script>


</body>

</html>
