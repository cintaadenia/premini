@extends('kerangka.master')
@section('title', 'Dashboard')
@section('konten')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

        <style>
            .small-box-footer {
                color: blue;
            }
        </style>

        <section class="content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border" style="width: 21rem;">
                        <img src="{{ asset('image/miesuit.png') }}" width="150" height="250" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mie Suit</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                                <a href="" class="btn btn-primary">
                                    More Info <i class="fa-solid fa-circle-info"></i>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
