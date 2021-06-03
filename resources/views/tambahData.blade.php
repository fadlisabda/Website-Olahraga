@extends('template/main')
@section('judul',"Tambah Data")
@section('konten')

    <div class="container mt-5">
        <form method="POST" action="{{ url('pemain/') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control @error('nama') is-active @enderror" id="nama" name="nama" placeholder="Input Nama">
              @error('nama')
                <div class="text-danger">{{$message}}</div>
              @enderror    
            </div>
            <div class="form-group">
                <label for="negara">Negara</label>
                <input type="text" class="form-control @error('negara') is-active @enderror" id="negara" name="negara" placeholder="Input Negara">
                @error('negara')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="posisi">Posisi</label>
                <input type="text" class="form-control @error('posisi') is-active @enderror" id="posisi" name="posisi" placeholder="Input Posisi">
                @error('posisi')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tim">Tim</label>
                <input type="text" class="form-control @error('tim') is-active @enderror" id="tim" name="tim" placeholder="Input Tim">
                @error('tim')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="gambar">Upload Gambar</label>
                <br>
                <input type="file" class="form-control-file" id="gambar" name="gambar" placeholder="Input gambar">
            </div>
            <button class="btn btn-primary mt-3" type="submit">Tambah</button>
        </form>
    </div>
@endsection