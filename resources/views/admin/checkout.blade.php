@extends('kerangka.master')
@section('title', 'Dashboard')
@section('konten')

<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="card border">
        <div class="card-header text-white bg-primary">
            Data Pesanan User
        </div>
        <div class="card-body">
            <table class="table">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-3">#</th>
                            <th class="col-md-3">USERNAME</th>
                            <th class="col-md-2">EMAIL</th>
                            <th class="col-md-2">NO TELEPON</th>
                            <th class="col-md-2">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->user->name }}</td>
                                <td>{{ $user->user->email }}</td>
                                <td>{{ $user->order->noTelepon }}</td>
                                <td scope="row">
                                    <a class="btn icon icon-left btn-primary me-2 text-nowrap" type="button" data-bs-toggle="modal" data-bs-target="#lihat{{ $loop->iteration }}">
                                        <i class="bi bi-eye-fill"></i> Show
                                    </a>
                                </td>
                            </tr>

                            <div class="modal fade text-left" id="lihat{{ $loop->iteration }}" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="myModalLabel1">Feedback</h3>
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col">
                                                <h6>Username: {{ $user->user->name }}</h6>
                                            </div>
                                        </div>

                                        <hr style="color: blueviolet">

                                        <div class="row">
                                            <div class="col">
                                                <h6>Email: {{ $user->user->email }}</h6>
                                            </div>
                                        </div>

                                        <hr style="color: blueviolet">

                                        <div class="row">
                                            <div class="col">
                                                <h6>No Telepon: {{ $user->order->noTelepon }}</h6>
                                            </div>
                                        </div>

                                        <hr style="color: blueviolet">

                                        <div class="row">
                                            <div class="col">
                                                <h6>Makanan: {{ $user->order->food->food }}</h6>
                                            </div>
                                        </div>

                                        <hr style="color: blueviolet">

                                        <div class="row">
                                            <div class="col">
                                                <h6>{{ $user->order->levels->level}}</h6>
                                            </div>
                                        </div>

                                        <hr style="color: blueviolet">

                                        <div class="row">
                                            <div class="col">
                                                <h6>Minuman : {{ $user->order->drinks->drink}}</h6>
                                            </div>
                                        </div>

                                        <hr style="color: blueviolet">

                                        <div class="row">
                                            <div class="col">
                                                <h6>Dimsum: {{ $user->order->dimsums->dimsum }}</h6>
                                            </div>
                                        </div>

                                        <hr style="color: blueviolet">

                                        <div class="row">
                                            <div class="col">
                                                <h6>Catatan: {{ $user->order->catatan }}</h6>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>
                                        <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Accept</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    </tbody>
                </table>
            </table>
        </div>
    </div>
@endsection
