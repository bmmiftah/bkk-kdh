@extends('layouts.main')

@section('container')

<div class="container justify-content-center">
    <div class="info-header">
        <h2 class=" mb-3 text-center py-3">Pusat Informasi</h2>

        <div id="carouselExampleCaptions" class="carousel slide shadow-sm" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner mb-4">
              <div class="carousel-item active">
                <img src="https://source.unsplash.com/1200x400/" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x400/" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x400/" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

    </div>

    <div class="row container main-lowongan">

      <div class="contaner side-bar col-md-4">
        <div class="side-bar py-3">
  
          <div class="input-group mb-3"> 
            <input type="text" class="form-control" placeholder="Cari Lowongan">
            <button class="btn btn-primary" type="button" id="search" name="search"><i class="bi bi-search"></i> Cari</button>
          </div>
  
          <div class="card item-fluid">
            <img src="/img/informasi.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title m-0">Pusat Informasi</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
               <a href="">Semua Informasi</a>
              </li>
              <li class="list-group-item">
                <a href="">Hasil Pengumpulan Berkas</a>
              </li>
              <li class="list-group-item">
                <a href="">Hasil Sikotes</a>
              </li>
              <li class="list-group-item">
                <a href="">Hasil Interview</a>
              </li>
              <li class="list-group-item">
                <a href="">Hasil MCU</a>
              </li>
            </ul>
          </div>
  
        </div>
        
      </div>
    

  <div class="container mb-5 col-md-8 ">

    <div class="row">

@foreach ($informasis as $informasi )
  

<div class=" col-lg-6 px-0 card item-fluid mt-lg-3">
  <img src="/img/informasi.jpg" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $informasi->title_informasi }}</h5>
    <small class="card-text text-muted">{{ $informasi->Category->title_category }}</small>
    <p class="card-text">{{ $informasi->excerpt }}</p>
  </div>
</div>

@endforeach
      
    </div>
  </div>
  
    
      

 </div>
  


  

</div>
</div>

@endsection
