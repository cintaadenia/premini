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
        <div class="card-header text-white bg-warning">
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
                                    <a class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#lihat{{ $loop->iteration }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>

                            <div class="modal" tabindex="-1" id="lihat{{ $loop->iteration }}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">Detail Pesanan</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Username: {{ $user->user->name }}</p>
                                      <hr>
                                      <p>Email: {{ $user->user->email }}</p>
                                      <hr>
                                      <p>No Telepon: {{ $user->order->noTelepon }}</p>
                                      <hr>
                                      <p>Makanan: {{ $user->order->makanan }}</p>
                                      <hr>
                                      <p>Level: {{ $user->order->level }}</p>
                                      <hr>
                                      <p>Minuman : {{ $user->order->minuman }}</p>
                                      <hr>
                                      <p>Dimsum: {{ $user->order->dimsum }}</p>
                                      <hr>
                                      <p>Catatan: {{ $user->order->catatan }}</p>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
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
