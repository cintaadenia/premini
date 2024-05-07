<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Gacoan</title>

    <!-- Bootstrap core CSS -->
    <link href="
    user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="user/assets/css/fontawesome.css">
    <link rel="stylesheet" href="user/assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="user/assets/css/owl.css">
    <link rel="stylesheet" href="user/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

Mo 586 Scholar

https://mo.com/tm-586-scholar

-->
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

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="{{ route('foods') }}" class="logo">
                            <h1>Gacoan</h1>
                        </a>
                        <!-- ** Menu Start ** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#services">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ route('order') }}">Details Order</a></li>
                            <li class="scroll-to-section"><a href="{{ route('spending') }}">Spending</a></li>
                            <div style="margin-right: 10px;">
                                <a href="#" id="addToCartBtn" style="color: #faf9fa; font-size: 24px; vertical-align: middle;"><i
                                    class="fas fa-cart-plus" style="color: #ffffff; font-size: 24px;"></i></a>
                            </div>
                            <li class="scroll-to-section">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    style="color: rgb(254, 254, 254); background-color: transparent; text-decoration: none; cursor: pointer;"
                                    onclick="delayedAlert()">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
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

    <h1 class="button" style="text-align: center; color: #9370DB; padding-top: 30px; font-size: 36px; line-height: 1.5; font-family: Arial, sans-serif;" id="food">Food Menu</h1>

    <div class="services section" id="services">
        <script>
            document.getElementById("orderForm").addEventListener("submit", function(event) {
                event.preventDefault();
                window.location.href = "order";
            });
        </script>

<div class="container">
    <form id="orderForm" action="{{ route('order.create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            @foreach ($foods as $food)

                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('storage/' . $food->image) }}" height="100" width="100" alt="online degrees">
                        </div>
                        <div class="main-content">
                            <div class="d-flex w-100 gap-2">
                                <input class="form-check-input food-checkbox" type="checkbox" id="food{{ $food->id }}" name="food_id[]" value="{{ $food->id }}" class="checkbox" style=" width: 23px; height: 23px;" />
                                <label class="form-check-label" for="food{{ $food->id }}"></label>
                                <h4 class="w-80">{{ $food->food }} LV {{ $food->level }}</h4>
                            </div>
                            <p>{{ $food->deskripsi }}</p>
                            <h6 style="color: rgb(255, 0, 0)">Rp {{ number_format($food->price, 0, ',', '.') }}</h6>
                            <h6 style="color: gray">Stock : {{ $food->stock }}</h6>
                            <br>
                            <div class="rating" style="display: flex; align-items: center;">
                                <div>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="far fa-star" style="color: gold;"></i>
                                </div>
                                <div style="margin-left: auto;">
                                    <p class="btn-holder" style="margin-top: 21px;">
                                        <a class="btn btn-outline-danger add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#lihat" data-food-id="{{ $food->id }}">Add to cart</a>
                                    </p>
                                </div>
                            </div>

                            <br>
                            <div class="order-details" style="display: none;">
                                <input type="number" name="jumlah_food[]" class="form-control quantity-input" placeholder="Jumlah">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                    <div class="modal fade" id="lihat" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true" >
                        <div class="modal-dialog" role="document" >
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cartModalLabel">Detail Pesanan Anda</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="cartModalBody">
                                    <!-- Konten detail pesanan akan ditampilkan di sini -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Lanjutkan Pembayaran</button>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.food-checkbox').change(function() {
            var $parent = $(this).closest('.service-item');
            if ($(this).is(':checked')) {
                $parent.find('.order-details').show();
            } else {
                $parent.find('.order-details').hide();
            }
        });
    });
</script>

<script>
    let cart = {};

    function addToCart(foodId, quantity) {
        if (cart[foodId]) {
            cart[foodId] += quantity;
        } else {
            cart[foodId] = quantity;
        }
        console.log("Makanan berhasil ditambahkan ke keranjang:", cart);
    }
</script>

<script>
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const foodId = button.getAttribute('data-food-id');
            const quantityInput = button.parentElement.querySelector('.quantity-input');
            const quantity = parseInt(quantityInput.value);
            addToCart(foodId, quantity);

            // Membuat detail pesanan
            const foodName = button.parentElement.querySelector('label').innerText;
            const totalPrice = quantity * parseFloat(button.parentElement.querySelector('h6').innerText.replace('Rp ', '').replace('.', '').replace(',', '.'));
            const cartModalBody = document.getElementById('cartModalBody');
            cartModalBody.innerHTML = `
                <p>Item: ${foodName}</p>
                <p>Jumlah: ${quantity}</p>
                <p>Total Harga: Rp ${totalPrice}</p>
            `;

            // Menampilkan modal
            $('#lihat').modal('show');
        });
    });
</script>


    <br>
    <br>
    <br>

    <h1 class="button" style="text-align: center; color: #9370DB; padding-top: 100px; font-size: 36px; line-height: 1.5; font-family: Arial, sans-serif;">Dimsum Menu</h1>

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
                                <div class="d-flex w-100 gap-2">
                                    <input class="form-check-input dimsum-checkbox" type="checkbox"
                                        id="dimsum{{ $dimsum->id }}" name="dimsum_id[]"
                                        value="{{ $dimsum->id }}" class="checkbox"
                                        style="width: 23px; height: 23px;" />
                                    <label class="form-check-label" for="dimsum{{ $dimsum->id }}"></label>
                                    <h4 class="w-80">{{ $dimsum->dimsum }}</h4>
                                </div>
                                <p>{{ $dimsum->deskripsi }}</p>
                                <h6 style="color: rgb(255, 0, 0)">Rp {{ number_format($dimsum->price, 0, ',', '.') }}
                                </h6>
                                <h6 style="color: gray">Stock : {{ $dimsum->stock }}</h6>
                                <br>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="far fa-star" style="color: gold;"></i>
                                </div>
                                <br>
                                <div class="order-details" style="display: none;">
                                    <input type="number" name="jumlah_dimsum[]" class="form-control quantity-input"
                                        placeholder="Jumlah">
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dimsum-checkbox').change(function() {
                var $parent = $(this).closest('.service-item');
                if ($(this).is(':checked')) {
                    $parent.find('.order-details').show();
                } else {
                    $parent.find('.order-details').hide();
                }
            });
        });
    </script>

    <h1
        class="button"style="text-align: center; color: #9370DB; padding-top: 200px; padding-bottom: 10px; font-size: 36px; line-height: 1.5; font-family: Arial, sans-serif;">
        Drink Menu</h1>


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
                                <div class="d-flex w-100 gap-2">
                                    <input class="form-check-input drink-checkbox" type="checkbox"
                                        id="drink{{ $drink->id }}" name="drink_id[]" value="{{ $drink->id }}"
                                        class="checkbox" style="width: 23px; height: 23px;" />
                                    <label class="form-check-label" for="drink{{ $drink->id }}"></label>
                                    <h4 class="w-80">{{ $drink->drink }}</h4>
                                </div>
                                <p>{{ $drink->deskripsi }}</p>
                                <h6 style="color: rgb(255, 0, 0)">Rp {{ number_format($drink->price, 0, ',', '.') }}
                                </h6>
                                <h6 style="color: gray">Stock : {{ $drink->stock }}</h6>
                                <br>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="fas fa-star" style="color: gold;"></i>
                                    <i class="far fa-star" style="color: gold;"></i>
                                </div>
                                <br>
                                <div class="order-details" style="display: none;">
                                    <input type="number" name="jumlah_drink[]" class="form-control quantity-input" placeholder="Jumlah">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.drink-checkbox').change(function() {
                var $parent = $(this).closest('.service-item');
                if ($(this).is(':checked')) {
                    $parent.find('.order-details').show();
                } else {
                    $parent.find('.order-details').hide();
                }
            });
        });
    </script>

    <div class="pe-5 me-5" style="display: flex; justify-content: flex-end; align-items: center;">
        <button type="submit" class="btn btn-primary" style="background-color: #9370DB; margin-left: 10px;" onclick="return validateOrder();">Order Sekarang!</button>
    </div>

    {{-- <script>
        $(document).ready(function() {
            $('#addToCartBtn').click(function(event) {
                event.preventDefault();
                // Gantikan alert dengan logika untuk menampilkan riwayat pesanan
                showOrderHistory();
            });

            // Definisikan fungsi untuk menampilkan riwayat pesanan
            function showOrderHistory() {
                // Tambahkan logika di sini untuk menampilkan riwayat pesanan
                // Misalnya, munculkan modal atau buka halaman baru yang menampilkan riwayat pesanan
                alert("Menampilkan riwayat pesanan...");
            }
        });
    </script> --}}

    </form>

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
                                <li><a href="https://www.facebook.com/warunkgacoankota/?locale=id_ID"><i
                                            class="fab fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/mie_gacoan"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/mie.gacoan/"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="
                            {{ asset('image/gacoan3.png') }}" alt="">
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
                                {{ asset('image/uk.png') }} " alt="">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        function validateOrder() {
            var totalItems = document.querySelectorAll(
                '.food-checkbox:checked, .dimsum-checkbox:checked, .drink-checkbox:checked').length;
            if (totalItems === 0) {
                alert('Mohon pilih item yang akan dibeli.');
                return false;
            }

            return true;
        }
    </script>

</body>
</html>
