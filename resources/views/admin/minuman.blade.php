@extends('kerangka.master')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menu Minuman</title>
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
        <h2 style="text-align: center;">Menu Minuman</h2>
        <div class="card">
            <div class="card-header text-white bg-primary">
                Create / Edit Menu Minuman
            </div>
            <div class="card-body">

                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="minuman" class="col-sm-2 col-form-label">Minuman</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="minuman" name="minuman"></input>
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
                Data Menu Minuman
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Menu Minuman</th>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

@section('konten')
@endsection
