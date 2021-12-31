@extends('layouts.main')

@section('container')

<div class="container smk justify-content-center">

  <h2 class="text-center py-3">Tentang</h2>

    <div class="container px-4 py-lg-3 mx-0">
        <div class="row flex-lg-row-reverse d-flex align-item-center ">
          <div class="col-lg">
              <img class="d-block img-fluid rounded shadow" src="/img/smk-full.jpg" alt="">
            {{-- <img src="https://source.unsplash.com/600x400" class="d-flex img-fluid h-600" alt="Bootstrap Themes" loading="lazy"> --}}
          </div>
          <div class="col-lg">
            <h3 class="display-6 fw-bold lh-1 mb-3">SMK Muhammadiyah Kandanghaur</h3>
            <p>Merupakan sekolah menengah kerjuruan swasta berakreditasi A, yang berada di wilayah kecamatan Kandanghaur, Indramayu. Dengan berbagai macam jurusan keahlian yang tersedia.</p>
            <p class="fw-normal"> <i class="bi bi-geo-alt-fill"></i>
               Jl. Raya Kandanghaur No.28 A, Karanganyar, Kec. Kandanghaur,
              Kabupaten Indramayu, Jawa Barat 45254
            </p>
            <p class="fw-normal">
              <i class="bi bi-telephone-fill"></i>
              (0234) 507239
            </p>
            <p class="fw-normal">
              <i class="bi bi-envelope-fill"> </i>
              smkmuhkdh@gmail.com 
            </p>
          </div>
        </div>
      </div>

</div>

<div class="container smk justify-content-center py-3">
    
    <hr>

    <div class="container px-4 py-5 mx-0">
        <div class="row d-flex align-item-center py-5 ">
          <div class="col-lg">
              <img class="d-block img-fluid rounded shadow" src="/img/smk.jpg" alt="">
            {{-- <img src="https://source.unsplash.com/600x400" class="d-flex img-fluid h-600" alt="Bootstrap Themes" loading="lazy"> --}}
          </div>
          <div class="col-lg text-justify-end">
            <h1 class="display-6 fw-bold lh-1 mb-3">BKK <br> SMK Muhammadiyah Kandanghaur</h1>
            <p> bkk.muh_kdh@gmail.com</p>
            </div>
          </div>
        </div>
      </div>


      <div class="container justify-content-center py-3">
        <hr>
        <div class="container py-5">
            
            <h3 class="text-center mb-5">Pengurus BKK SMK Muhammadiyah Kandanghaur</h3>
        
            <!-- Three columns of text below the carousel -->
            <div class="row d-flex align-item-center">
              <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle mb-3 mx-auto d-block" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h5 class="text-center">M. Naufal Abidin, S.pd</h5>
                <p class="text-center">Ketua</p>
              </div>
            </div><!-- /.row --> 
        </div>
        
    </div>

</div>

@endsection