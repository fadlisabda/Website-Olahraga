@extends('template/main')
@section('judul',"Data Pemain Bola")
@section('konten')
<body>    
    <div class="container">
    <div class="container">
        <a href="{{ url('/pemain/create') }}" class="btn btn-primary mb-2 mt-5">Tambah Data</a>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Negara</th> 
                    <th scope="col">Posisi</th>
                    <th scope="col">Tim</th>
                    <th scope="col">Gambar</th>  
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_pemain as $pemain)
                    <tr>
                        <td>{{ $loop->iteration  }}</td>
                        <td>{{ $pemain['nama']   }}</td>
                        <td>{{ $pemain['negara'] }}</td>
                        <td>{{ $pemain['posisi'] }}</td>
                        <td>{{ $pemain['tim']    }}</td>
                        <td><img class="card-img-top" src="/image/{{$pemain->gambar}}" alt="Card image cap" style="width: 50px;"></td>
                        <td>
                            <a href="{{ url('/pemain/'.$pemain['id']) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ url('/pemain/'.$pemain['id']) }}" method="post"> 
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-small" style="margin-left: 55px; margin-top: -38px;" onclick="return confirm('yakin ingin delete data?');">Delete</button>
                            </form>
                        </td>
                    </tr>    
                @endforeach
            </tbody>    
        </table>
    </div>
    </div>
@endsection
  </body>
</html>