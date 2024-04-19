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
            <div class="card border">
                <div class="card-header text-white bg-black">
                    Data Email User
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Email User</th>
                            </tr>
                            {{-- <tbody>
                                @foreach ($dimsum as $dm )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dm->dimsum }}</td>
                                    <td scope="row">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody> --}}
                        </thead>

                    </table>

                </div>
            </div>
        </div>
@endsection
