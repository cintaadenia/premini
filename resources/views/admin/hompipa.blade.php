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
            <h2 style="text-align: center;">Menu Hompimpa</h2>
            <div class="card border">
                <div class="card-header text-white bg-primary">
                    Tambah Hompimpa
                </div>
                <br>
                <div class="card-body">

                    <form action="{{ route('hompimpa.create') }}" method="POST" id="hompimpa">
                        @csrf
                        <div class="mb-3 row">
                            <label for="hompimpa" class="col-sm-2 col-form-label">Hompimpa</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="hompimpa" name="hompimpa"
                                    placeholder="Tambahkan Hompimpa" value="{{ old('hompimpa') }}"></input>
                                @error('hompimpa')
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
                    Data Menu Hompimpa
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Menu Hompimpa</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            <tbody>
                                @foreach ($hompimpa as $hom )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $hom->hompimpa }}</td>
                                    <td scope="row">
                                        <a href="{{ route('hompimpa.edit', $hom->id) }}" class="btn btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a> |

                                        <form id="deleteForm{{ $hom->id }}" action="{{ route('hompimpa.destroy', $hom->id) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $hom->id }})">
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
