@extends('kerangka.master')
@section('title', 'Dashboard')
@section('konten')

<br>
<br>
<br>
<br>

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

                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="food" class="col-sm-2 col-form-label">Food</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="food" name="food"></input>
                        </div>
                    </div>


                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" style="border-radius: 50px;" class="btn btn-primary">
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
                            <tr>
                                <th scope="row"></th>
                                <td scope="row"></td>
                                <td scope="row">
                                    <a href=""><button type="button" class="btn btn-warning">Edit</button></a> |
                                    <a href="" onclick="return confirm('Yakin Ingin Menghapus Data ?')"><button type="button" class="btn btn-danger">Delete</button></a>

                                </td>

                            </tr>
                    </tbody>
                    </thead>

                </table>

            </div>
        </div>
    </div>

@endsection
