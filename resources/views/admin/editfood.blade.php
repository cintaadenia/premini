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
                <div class="card border">
                    <div class="card-header text-white bg-primary">
                        Edit Menu Food
                    </div>
                    <br>
                    <div class="card-body">

                        <form action="{{ route('food.update', $food->id) }}" method="POST" id="food" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="food" class="col-sm-2 col-form-label">Food</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="food" rows="3" placeholder="Edit Food"
                                        name="food" value="{{ $food['food'] }}">
                                    @error('food')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Tambahkan Deskripsi" value>{{ $deskripsi['deskripsi'] }}</textarea>
                                    @error('deskripsi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="price" rows="3" placeholder="Edit price"
                                        name="price" value="{{ $food['price'] }}">
                                    @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3 row">
                                <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="price" rows="3" placeholder="Edit stock"
                                        name="stock" value="{{ $food['stock'] }}">
                                    @error('stock')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('storage/'. $food->image) }}" alt="" width="400">
                                    <input class="form-control" type="file" id="image" name="image" rows="3">
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
