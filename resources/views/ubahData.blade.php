@extends('template/main')
@section('judul',"Ubah Data")
@section('konten')

    <div class="container mt-5">
        <form method="POST" action="{{ url('pemain/'.$pemain['id']) }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="id" id="id" value="{{ $pemain['id'] }}">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control @error('nama') is-active @enderror" id="nama" name="nama" placeholder="Input Nama" value="{{ $pemain['nama'] }}">
              @error('nama')
                <div class="text-danger">{{$message}}</div>
              @enderror    
            </div>
            <div class="form-group">
                <label for="negara">Negara</label>
                <input type="text" class="form-control @error('negara') is-active @enderror" id="negara" name="negara" placeholder="Input Negara" value="{{ $pemain['negara'] }}">
                @error('negara')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="posisi">Posisi</label>
                <input type="text" class="form-control @error('posisi') is-active @enderror" id="posisi" name="posisi" placeholder="Input Posisi" value="{{ $pemain['posisi'] }}">
                @error('posisi')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tim">Tim</label>
                <input type="text" class="form-control @error('tim') is-active @enderror" id="tim" name="tim" placeholder="Input Tim" value="{{ $pemain['tim'] }}">
                @error('tim')
                    <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">  
                <img src="/image/{{$pemain->gambar}}" width="150" style="margin-top:5px; margin-bottom:5px;">
                <br>
                <label for="gambar">Upload Gambar</label>   
                <br>
                <input type="file" class="form-control-file" id="gambar" name="gambar" placeholder="Input gambar" >
            </div>
            <button class="btn btn-primary mt-3" type="submit">Ubah</button>
        </form>
    </div>
@endsection