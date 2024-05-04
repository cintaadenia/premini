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
            <h2 style="text-align: center;">Menu Suit</h2>
            <div class="card border">
                <div class="card-header text-white bg-primary">
                    Tambah Suit
                </div>
                <br>
                <div class="card-body">

                    <form action="{{ route('suit.create') }}" method="POST" id="suit">
                        @csrf
                        <div class="mb-3 row">
                            <label for="suit" class="col-sm-2 col-form-label">Suit</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="suit" name="suit"
                                    placeholder="Tambahkan suit" value="{{ old('suit') }}"></input>
                                @error('suit')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-12">
                            <input type="submit" name="simpan" value="Tambah +" style="border-radius: 50px;"
                                class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>


            <!-- untuk mengeluarkan data -->
            <div class="card border">
                <div class="card-header text-white bg-black">
                    Data Menu Suit
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Menu Suit</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            <tbody>
                                @foreach ($suit as $sui )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $sui->suit }}</td>
                                    <td scope="row">
                                        <a href="{{ route('suit.edit', $sui->id) }}" class="btn btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a> |

                                        <form id="deleteForm{{ $sui->id }}" action="{{ route('suit.destroy', $sui->id) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $sui->id }})">
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
