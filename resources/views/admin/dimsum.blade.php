@extends('kerangka.master')
@section('title', 'Dashboard')
@section('konten')

    <br>
    <br>
    <br>
    <br>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        .mx-auto {
            width: 920px;
        }

        .card {
            margin-top: 40px;
        }
    </style>
    </head>

        <div class="mx-auto">
            <!-- untuk memasukkan data -->
            <h2 style="text-align: center;">Menu Dimsum</h2>
            <div class="card border">
                <div class="card-header text-white bg-primary">
                    Tambah Menu Dimsum
                </div>
                <br>
                <div class="card-body">


                    <form action="{{ route('dimsum.create') }}" method="POST" id="dimsum" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="food" class="col-sm-2 col-form-label">dimsum</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="dimsum" name="dimsum"
                                    placeholder="Tambahkan dimsum"></input>
                                @error('dimsum')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Tambahkan Deskripsi"></textarea>
                                @error('deskripsi')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="price" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="price" name="price" type="number"
                                    placeholder="Tambahkan price"></input>
                                @error('price')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="stock" name="stock" type="number"
                                    placeholder="Tambahkan stock"></input>
                                @error('stock')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="image" name="image" type="file"
                                    placeholder="Tambahkan image"></input>
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" style="border-radius: 50px;" class="btn btn-primary">+ Tambah</button>
                        </div>

                    </form>
                </div>
            </div>


            <!-- untuk mengeluarkan data -->
            <div class="card border">
                <div class="card-header text-white bg-black">
                    Data Menu Dimsum
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"> No</th>
                                <th scope="col"> Dimsum</th>
                                <th scope="col"> Deskripsi</th>
                                <th scope="col"> Price</th>
                                <th scope="col"> Stock</th>
                                <th scope="col"> Image</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            <tbody>
                                @foreach ($dimsum as $dm )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dm->dimsum }}</td>
                                    <td>{{ $dm->deskripsi }}</td>
                                    <td>{{ $dm->price }}</td>
                                    <td>{{ $dm->stock }}</td>
                                <td><img src="{{ asset('storage/' . $dm->image) }}" style="width: 100px;"></td>
                                    <td scope="row">
                                        <a href="{{ route('dimsum.edit', $dm->id) }}" class="btn btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a> |

                                        <form id="deleteForm{{ $dm->id }}" action="{{ route('dimsum.destroy', $dm->id) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $dm->id }})">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </thead>

                    </table>

                </div>
            </div>
        </div>

    <script>
        // Function untuk konfirmasi sebelum menghapus
        function confirmDelete(id) {
            if (confirm('Yakin Ingin Menghapus Data?')) {
                document.getElementById('deleteForm'+id).submit();
            }
        }
    </script>

@endsection
