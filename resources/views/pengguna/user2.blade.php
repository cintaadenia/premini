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

    <!-- ***** Preloader Start ***** -->
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
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <h1>Gacoan</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Serach Start ***** -->
                        <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="Cari Sesuatu" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                        <!-- ***** Serach Start ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#services">Menu</a></li>
                            {{-- <li class="scroll-to-section"><a href="#services">Dimsum</a></li> --}}
                            <li class="scroll-to-section"><a href="#contact">Order</a></li>
                            <li class="scroll-to-section"><a href="{{route('transaction.index')}}">Transsaction</a></li>
                            <li class="scroll-to-section">
                                <form id="logout-form" action="{{ route('logout') }}" method="get">
                                    @csrf
                                    <button type="submit" id="logout-button"
                                        style="color: rgb(254, 254, 254); background-color: transparent; border: none; cursor: pointer;"
                                        onclick="delayedAlert()">Logout</button>
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
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

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

    <h1 class="button"
        style="text-align: center; color: #9370DB; padding-top: 30px; font-size: 36px; line-height: 1.5; font-family: Arial, sans-serif;">
        Menu Makanan</h1>


    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                @foreach ($foods as $food)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('storage/' . $food->image) }}" height="100" width="100"
                                    alt="online degrees">
                            </div>
                            <div class="main-content">
                                <h4>{{ $food->food }}</h4>
                                <p>{{ $food->deskripsi }}</p>
                                <h6 style="color: rgb(255, 0, 0)">Rp {{ $food->price }}</h6>
                                <h6 style="color: gray">Stock : {{ $food->stock }}</h6>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="far fa-star" style="color: gold;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <h1 class="button"
        style="text-align: center; color: #9370DB; padding-top: 100px; font-size: 36px; line-height: 1.5; font-family: Arial, sans-serif;">
        Menu Dimsum</h1>

    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                @foreach ($dimsums as $dimsum)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('storage/' . $dimsum->image) }}" height="100" width="100"
                                    alt="online degrees">
                            </div>
                            <div class="main-content">
                                <h4>{{ $dimsum->dimsum }}</h4>
                                <p>{{ $dimsum->deskripsi }}</p>
                                <h6 style="color: rgb(255, 0, 0)">Rp {{ $dimsum->price }}</h6>
                                <h6 style="color: gray">Stock : {{ $dimsum->stock }}</h6>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="far fa-star" style="color: gold;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <h1 class="button"
        style="text-align: center; color: #9370DB; padding-top: 200px; padding-bottom: 10px; font-size: 36px; line-height: 1.5; font-family: Arial, sans-serif;">
        Menu Minuman</h1>


    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                @foreach ($drinks as $drink)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="icon">
                                <img src="{{ asset('storage/' . $drink->image) }}" height="100" width="100"
                                    alt="online degrees">
                            </div>
                            <div class="main-content">
                                <h4>{{ $drink->drink }}</h4>
                                <p>{{ $drink->deskripsi }}</p>
                                <h6 style="color: rgb(255, 0, 0)">Rp {{ $drink->price }}</h6>
                                <h6 style="color: gray">Stock : {{ $drink->stock }}</h6>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="far fa-star" style="color: gold;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <br>
    <br>
    <br>
    <h1 class="button"
        style="text-align: center; color: #9370DB; padding-top: 30px; font-size: 36px; line-height: 1.5; font-family: Arial, sans-serif;">
        Rating Tertinggi</h1>

    <div class="team section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="
                                {{ asset('image/sm.png') }}" alt="">
                            <span class="category">Ranking Peminat</span>
                            <h4>Siomay</h4>
                            <div class="rating">
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                            </div>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/warunkgacoankota/?locale=id_ID"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/mie_gacoan"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/mie.gacoan/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="
                                {{ asset('image/gacoan3.png') }}"
                                alt="">
                            <span class="category">Ranking Peminat</span>
                            <h4>Mie Gacoan</h4>
                            <div class="rating">
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                            </div>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/warunkgacoankota/?locale=id_ID"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/mie_gacoan"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/mie.gacoan/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="{{ asset('image/esgobaksodor.png') }}" alt="">
                            <span class="category">Ranking Peminat</span>
                            <h4>Es Gobak Sodor</h4>
                            <div class="rating">
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                            </div>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/warunkgacoankota/?locale=id_ID"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/mie_gacoan"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/mie.gacoan/"><i class="fab fa-instagram"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="
                                    {{ asset('image/uk.png') }} "
                                alt="">
                            <span class="category">Ranking Peminat</span>
                            <h4>Udang Keju</h4>
                            <div class="rating">
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                                <i class="fas fa-star" style="color: gold;"></i>
                            </div>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/warunkgacoankota/?locale=id_ID"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/mie_gacoan"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/mie.gacoan/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="500" data-speed="1000"></h2>
                                    <p class="count-text ">Rating Makanan</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="550" data-speed="1000"></h2>
                                    <p class="count-text ">Rating Dimsum</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="450" data-speed="1000"></h2>
                                    <p class="count-text ">Rating Minuman</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="section testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">
                        <div class="item">
                            <p>“Solusi Tanggal tua, tp masih pengen makan mie. Always di Mie Gacoan lahh. Walaupun
                                harganya terjangkau tp worth to buy karna rasanya juga enak.”</p>
                            <div class="author">
                                <img src="
                user/assets/images/testimonial-author.jpg" alt="">
                                <span class="category">Full Stack Master</span>
                                <h4>ELSA</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Datang lapar, pulang bahagia. kenapa bisa sebahagia itu? karena selain makan dan
                                minumannya yg enak, harga Mie Gacoan ramah di kantong.”
                            </p>
                            <div class="author">
                                <img src="
                user/assets/images/testimonial-author.jpg" alt="">
                                <span class="category">UI Expert</span>
                                <h4>AMI NUR DWIUTAMI</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Ngga ngerti lagi bisa seseneng itu tiap kali makan di Mie Gacoan rasanya tuh....
                                sesuatuuu bangeet!!. ”</p>
                            <div class="author">
                                <img src="
                user/assets/images/testimonial-author.jpg" alt="">
                                <span class="category">Digital Animator</span>
                                <h4>BELINDA</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>TESTIMONIALS</h6>
                        <h2>Apa pendapat mereka tentang GACOAN?</h2>
                        <p>Mie Gacoan" adalah sebuah merk dagang dari jaringan restaurant mie pedas no 1 di indonesia,
                            yang menjadi anak perusahaan PT Pesta Pora Abadi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section events" id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Mie Gacoan</h6>
                        <h2>Outlets</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="
                  user/assets/images/gacoan.jpg" alt=""
                                        width="240" height="240">
                                </div>
                            </div>


                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Cabang Malang</span>
                                        <h4>Singosari Malang</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>16 Feb 2019</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>24 Jam</h6>
                                    </li>
                                </ul>
                                <a href="#"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="
                  user/assets/images/gacoan2.jpeg" alt=""
                                        width="245" height="245">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Cabang Malang</span>
                                        <h4>Kota Batu</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>24 Feb 2020</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>24 Jam</h6>
                                    </li>
                                </ul>
                                <a href="#"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="
                  user/assets/images/gacoan3.jpg" alt=""
                                        width="245" height="245">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Cabang Surabaya</span>
                                        <h4>Jalan Dupak Surabaya</h4>
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        <h6>12 Mar 2023</h6>
                                    </li>
                                    <li>
                                        <span>Duration:</span>
                                        <h6>24 Jam</h6>
                                    </li>
                                </ul>
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <form id="contact-form" action="{{ route('order.create') }}" method="post">
                            {{-- <div class="col-lg-12">
                                <fieldset style="text-align: center;">
                                    <input type="file" name="photo" id="photo" accept="image/*" required
                                        style="height: 4pc; ">
                                </fieldset>
                            </div> --}}


                            @csrf
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="number" name="noTelepon" id="noTelepon"
                                        placeholder="No Telepon..." required>
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
                                            <option>Level tidak tersedia</option>
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
                                    <button class="btn btn-light p-3">Order
                                        Sekarang!</button>
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
