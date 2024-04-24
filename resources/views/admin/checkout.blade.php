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
            Data Pesanan User / Checkout
        </div>
        <div class="card-body">
            <table class="table">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-3">No</th>
                            <th class="col-md-3">Username</th>
                            <th class="col-md-2">Email</th>
                            <th class="col-md-2">No Telepon</th>
                            <th class="col-md-2">Detail</th>
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
                                    <a class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#lihat{{ $loop->iteration }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>

                            <div class="modal fade text-left" id="lihat{{ $loop->iteration }}" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel1">Data Order</h5>
                                        <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Username: {{ $user->user->name }}</p>
                                      <hr>
                                      <p>Email: {{ $user->user->email }}</p>
                                      <hr>
                                      <p>No Telepon: {{ $user->order->noTelepon }}</p>
                                      <hr>
                                      <p>Makanan: {{ $user->order->food->food }}</p>
                                      <hr>
                                      <p>Level: {{ $user->order->levels->level}}</p>
                                      <hr>
                                      <p>Minuman : {{ $user->order->drinks->drink}}</p>
                                      <hr>
                                      <p>Dimsum: {{ $user->order->dimsums->dimsum }}</p>
                                      <hr>
                                      <p>Catatan: {{ $user->order->catatan }}</p>
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
