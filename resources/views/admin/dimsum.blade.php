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
            <h2 style="text-align: center;">Menu Dimsum</h2>
            <div class="card">
                <div class="card-header text-white bg-primary">
                    Create / Edit Menu Dimsum
                </div>
                <div class="card-body">

                    <form action="{{ route('dimsum.create') }}" method="POST" id="dimsum">
                        @csrf
                        <div class="mb-3 row">
                            <label for="dimsum" class="col-sm-2 col-form-label">Dimsum</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="dimsum" name="dimsum"
                                    placeholder="Tambahkan Dimsum"></input>
                                @error('dimsum')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-12">
                            <input type="submit" name="simpan" value="Simpan Data" style="border-radius: 50px;"
                                class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>


            <!-- untuk mengeluarkan data -->
            <div class="card">
                <div class="card-header text-white bg-black">
                    Data Menu Dimsum
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Menu Dimsum</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            <tbody>
                                @foreach ($dimsum as $dm )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dm->dimsum }}</td>
                                    <td scope="row">
                                        <a href="" class="btn btn-warning">
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
