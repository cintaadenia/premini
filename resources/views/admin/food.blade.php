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
    </head>

    <body>

        <div class="mx-auto">
            <!-- untuk memasukkan data -->
            <h2 style="text-align: center;">Menu Food</h2>
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Create / Edit Menu Food
                </div>
                <div class="card-body">
                    {{-- <!-- Alert -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show  " role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('delete_success'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('delete_success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif --}}

                    <form action="{{ route('food.create') }}" method="POST" id="food">
                        @csrf
                        <div class="mb-3 row">
                            <label for="food" class="col-sm-2 col-form-label">Food</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="food" name="food"
                                    placeholder="Tambahkan Food"></input>
                                @error('food')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-12">
                            <input type="submit" name="simpan" value="Tambah Food" style="border-radius: 50px;" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>


            <!-- untuk mengeluarkan data -->
            <div class="card">
                <div class="card-header text-white bg-black">
                    Data Menu Food
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Menu Food</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        <tbody>
                            @foreach ($food as $f )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $f->food }}</td>
                                <td scope="row">
                                    <a href="{{ route('food.update', $f->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a> |

                                    <form id="deleteForm{{ $f->id }}" action="{{ route('food.destroy', $f->id) }}" method="post" style="display: inline;">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $f->id }})">
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
                    // alert('Data berhasil Dihapus!');
                }
            }
        </script>
    @endsection
