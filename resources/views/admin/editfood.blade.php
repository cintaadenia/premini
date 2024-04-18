@extends('kerangka.master')
@section('title', 'Dashboard')
@section('konten')

    <br>
    <br>
    <br>
    <br>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<body>

    <style>
        .mx-auto {
            width: 920px;
        }

        .card {
            margin-top: 40px;
        }
    </style>

<body>

    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <h2 style="text-align: center;">Edit Menu Food</h2>
        <div class="card">
            <div class="card-header text-white bg-primary">
                Create / Edit Menu Food
            </div>
            <div class="card-body">
                        <!-- Alert -->
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('food.update', $food->id) }}" method="POST" id="food">
                            @csrf
                            <div class="mb-3 row">
                                <label for="food" class="col-sm-2 col-form-label">Food</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="food" rows="3" placeholder="Edit Food" value="{{ $food["food"] }}">
                                    @error('food')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <nav class="navbar bg-body-tertiary">
                                <button class="btn btn-outline-success me-2" type="submit" id="submitForm">
                                    <i class="fas fa-save me-1"></i> Simpan
                                </button>
                            </nav>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @endsection

