<table class="table table-striped" >
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Username</th>
        <th scope="col">Judul Musik</th>
        <th scope="col">Judul Film</th>
        <th scope="col">Genre</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Catatan</th>
        <th scope="col">Potho</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($kunjungan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->username }}</td>
            <td>{{ $item->musik->judul_musik }}</td>
            <td>{{ $item->film->judul_film }}</td>
            <td>{{ $item->genre->judul_genre }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->catatan }}</td>
            <td>
                <img src="{{ asset('storage/'. $item->potho) }}" width="150px" alt="">
            </td>
            <td>

                <a href="{{  route('editadmin',$item->id)}}" class="btn btn-warning">Edit</a>

                {{-- <a href="{{  route('delete',$item->id)}}" class="btn btn-danger">Hapus</a> --}}

                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#konfirmasi">Hapus</button>

            </td>
        </tr>

        <div class="modal fade" id="konfirmasi" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Konfirmasi hapus</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('deleteadmin', $item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus data ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Yakin</button>
                    </div>
                </form>
              </div>
            </div>
        </div>

        @endforeach
    </tbody>
  </table>
</body>
@endsection
