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
                <h2 style="text-align: center;">Edit Menu Level</h2>
                <div class="card border">
                    <div class="card-header text-white bg-primary">
                        Edit Menu Level
                    </div>
                    <br>
                    <div class="card-body">

                        <form action="{{ route('level.update', $level->id) }}" method="POST" id="food">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="food" class="col-sm-2 col-form-label">Level</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="food" rows="3" placeholder="Edit Level"
                                        name="level" value="{{ $level['level'] }}">
                                    @error('level')
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
