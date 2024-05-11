@extends('kerangka.master')
@section('title', 'Dashboard')
@section('konten')
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">

                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Users Login</h6>
                                        <h6 class="font-extrabold mb-0">{{ $countUser }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon " style="background-color: rgb(47, 55, 175);">
                                            <i class="fa-solid fa-bowl-food"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Amount of Food</h6>
                                        <h6 class="font-extrabold mb-0">{{ $countFood }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="fa-solid fa-mug-hot"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Number of Drinks</h6>
                                        <h6 class="font-extrabold mb-0">{{ $countDrink }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon" style="background-color: rgb(249, 47, 152);">
                                            <i class="fas fa-egg"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Number of Dimsum</h6>
                                        <h6 class="font-extrabold mb-0">{{ $countDimsum }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Transaction Data</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="monthlyChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


            @endsection

            @section('script')
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var monthlyData = @json($monthlyData);
                    var transactionMonth = @json($transactionMonth);

                    var ctx = document.getElementById('monthlyChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: transactionMonth,
                            datasets: [{
                                label: 'Transaction Data',
                                data: monthlyData,
                                fill: false,
                                borderColor: 'rgb(75, 192, 192)',
                                tension: 0.1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        precision: 0
                                    }
                                }
                            }
                        }
                    });
                });
            </script>
        @endsection
