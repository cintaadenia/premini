@extends('kerangka.master')
@section('title', 'Dashboard')
@section('konten')

    <body class="bg-light">
        <main class="container">
            <div class="my-3 p-3 bg-body rounded shadow-sm">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">Bukti Pembayaran</th>
                            <th class="col-md-3">No Telepon</th>
                            <th class="col-md-4">Makanan</th>
                            <th class="col-md-2">Level</th>
                            <th class="col-md-2">Minuman</th>
                            <th class="col-md-2">Dimsum</th>
                            <th class="col-md-2">Catatan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1001</td>
                            <td>Ani</td>
                            <td>Ilmu Komputer</td>
                            <td>
                                <a href='' class="btn btn-warning btn-sm">Edit</a>
                                <a href='' class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
@endsection
