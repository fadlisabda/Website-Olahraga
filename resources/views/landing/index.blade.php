@extends('template/main')
@section('judul',"Home Page")
@section('konten')
  <body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Informasi Diri</h1>
          <p class="lead">{{$nama}}</p>
          <p class="lead">{{$npm}}</p>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
    <div class="row">    
        <div class="col-lg-12">
            <div class="card rounded-circle mb-3">
                <div class="card-body">
                    <img src={{ asset('image/profile.jpg') }} style="width: 80px; height: 80px;" class="rounded-circle mb-3" alt="" data-aos="fade-up" data-aos-duration="55000">
                </div>
            </div>    
        </div>
    </div>    
    </div>
    <div class="containerm d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src={{ asset('image/1.jpg') }} style="width: 100%; height:500px" class="d-block alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src={{ asset('image/2.jpg') }} style="width: 100%; height:500px" class="d-block alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src={{ asset('image/3.jpg') }} style="width: 100%; height:500px" class="d-block alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                </div>        
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-start mt-3" data-aos="fade-right" data-aos-duration="15000">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <img src={{ asset('image/Tambah.png') }} style="width: 100%; height:500px; background-size: cover;" class="d-block alt="...">
                      <h5 class="card-title">Fitur Pada Aplikasi pertama</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Tambah Data</h6>
                      <p class="card-text">Fitur pertama ini tambah data ,bisa tambah gambar data tidak bisa di tambah jika tidak di isi ,setelah data ditambah akan tampil di table dan database</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-end mt-3" data-aos="fade-left" data-aos-duration="15000">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <img src={{ asset('image/Ubah.png') }} style="width: 100%; height:500px; background-size: cover;" class="d-block alt="...">
                      <h5 class="card-title">Fitur Pada Aplikasi kedua</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Ubah Data</h6>
                      <p class="card-text">Fitur kedua ini ubah data ,bisa ubah gambar bisa tidak, setelah data diubah akan tersimpan di table dan database</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    @endsection
  </body>
</html>