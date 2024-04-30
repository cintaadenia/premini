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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.49.0/apexcharts.min.css"
        integrity="sha512-qc0GepkUB5ugt8LevOF/K2h2lLGIloDBcWX8yawu/5V8FXSxZLn3NVMZskeEyOhlc6RxKiEj6QpSrlAoL1D3TA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Additional CSS Files -->
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
            /* Mengurangi padding vertikal */
        }

        .main-nav .logo {
            font-size: 24px;
            /* Mengurangi ukuran font logo */
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

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="" class="logo">
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
                            <li class="scroll-to-section"><a href="{{ route('user2') }}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{ route('order') }}">Order</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

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

                <div class="card-body">
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-40">
                <div id="myChart"></div>
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

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.49.0/apexcharts.min.js"
            integrity="sha512-NpRqjS1hba1uc6270PmwsKwQti3CSCDkZD9/dlen3+ytOUb/azIyuaGtyewUkjazLMSdl7Zy2CVWMvGxR6vFWg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>

            console.log(5645);
            var options = {
                series: [{
                    name: 'Sales',
                    data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5]
                }],
                chart: {
                    height: 350,
                    type: 'line',
                },
                forecastDataPoints: {
                    count: 7
                },
                stroke: {
                    width: 5,
                    curve: 'smooth'
                },
                xaxis: {
                    type: 'datetime',
                    categories: ['1/11/2000', '2/11/2000', '3/11/2000', '4/11/2000', '5/11/2000', '6/11/2000',
                        '7/11/2000', '8/11/2000', '9/11/2000', '10/11/2000', '11/11/2000', '12/11/2000',
                        '1/11/2001', '2/11/2001', '3/11/2001', '4/11/2001', '5/11/2001', '6/11/2001'
                    ],
                    tickAmount: 10,
                    labels: {
                        formatter: function(value, timestamp, opts) {
                            return opts.dateFormatter(new Date(timestamp), 'dd MMM')
                        }
                    }
                },
                title: {
                    text: 'Pengeluaran Anda',
                    align: 'left',
                    style: {
                        fontSize: "16px",
                        color: '#666'
                    }
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'dark',
                        gradientToColors: ['#FDD835'],
                        shadeIntensity: 1,
                        type: 'horizontal',
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 100, 100, 100]
                    },
                }
            };

            var chart = new ApexCharts(document.querySelector("#myChart"), options);
            chart.render();
        </script>

</body>

</html>
