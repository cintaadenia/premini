@extends('kerangka.master')
@section('title', 'Dashboard')
@section('konten')

    <br>
    <br>
    <br>
    <br>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .mx-auto {
            width: 920px;
        }

        .card {
            margin-top: 40px;
        }
    </style>


    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <h2 style="text-align: center;">Edit Menu Drink</h2>
        <div class="card border">
            <div class="card-header text-white bg-primary">
                Edit Menu Drink
            </div>
            <br>
            <div class="card-body">

                <form action="{{ route('drink.update', $drink->id) }}" method="POST" id="food">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 row">
                        <label for="drink" class="col-sm-2 col-form-label">Dimsum</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="drink" rows="3" placeholder="Edit Drink"
                                name="drink" value="{{ $drink['drink'] }}">
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

@endsection
