@extends('layouts.main')

@section('container')

<div class="container justify-content-center">
    <div class="info-header">
        <h2 class=" mb-3 text-center py-3">Pusat Informasi</h2>

        <div id="carouselExampleCaptions" class="carousel slide shadow-sm" data-bs-ride="carousel">
          
          
          {{-- <div class="carousel-inner mb-4">
            @foreach ($carousells as $carousell)
              <div class="carousel-item active">
                  <img src="/{{ $carousell->img_carousel }}" class="d-block w-100" alt="..." style="object-fit: cover; height: 400px;">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $carousell->title_carousel }}</h5>
                  </div>
              </div>
            @endforeach
            </div>
            
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>  --}}
            
    </div>

    <div class="row container main-lowongan m-0">

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
               <a style="text-decoration: none;" href="">Semua Informasi</a>
              </li>
              <li class="list-group-item">
                <a style="text-decoration: none" href="">Hasil Pengumpulan Berkas</a>
              </li>
              <li class="list-group-item">
                <a style="text-decoration: none" href="">Hasil Sikotes</a>
              </li>
              <li class="list-group-item">
                <a style="text-decoration: none" href="">Hasil Interview</a>
              </li>
              <li class="list-group-item">
                <a style="text-decoration: none" href="">Hasil MCU</a>
              </li>
            </ul>
          </div>
  
        </div>
        
      </div>
    

  <div class="container mb-5 col-md-8 ">

    <div class="row px-3">

@foreach ($informasis as $informasi )

<div class=" px-0 card mb-3 shadow-sm item-fluid mt-lg-3">
  <img src="/img/img-info.jpg" class="card-img-top" style="height: 200px; object-fit:cover;" alt="...">
  <div class="card-body">
    <a style="text-decoration: none;" href="/detail_informasi/{{ $informasi->slug }}"><h4 class="card-title">{!! $informasi->title_informasi !!}</h4></a>
    <small class="card-text text-muted">{{ $informasi->Category->title_category }}</small>
    <hr>
    <p class="card-text">{!! $informasi->excerpt !!}</p>
  </div>
</div>

@endforeach

    </div>
    </div>
</div>
</div>

@endsection
