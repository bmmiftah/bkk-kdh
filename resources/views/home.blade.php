@extends('layouts.main')

@section('container')


<div class="header text-center px-0 mx-0">
    <div class="row content px-0 mx-0">
      <div class="col-12 px-0">
        <div class="headline">
          Cari Lowongan Pekerjaan <br class="d-none d-md-block" />
          {{-- Di Perusahaan Besar Yang Ada Di Indonesia --}}
        </div>
        <div class="mt-3 subheadline">
          Bersama Bursa Kerja Khusus (BKK) SMK Muhammadiyah Kandanghaur
        </div>
        <div class="button-header item-fluid">
          <button class="btn btn-listing">
            <i class="bi bi-search"></i>
              Cari Sekarang
          </button>
        </div>
      </div>
    </div>
    <div class="row px-0 mx-0">
      <div class="col-12 img-brand px-0">
        <img
          src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Startup/Group_1.png"
          alt="Shayna"
          class="px-4 mt-5 img-fluid mr-60 mt-md-0 px-md-0"
        />
        <img
          src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Startup/Group_2.png"
          alt="Shayna"
          class="px-4 mt-5 img-fluid mr-60 mt-md-0 px-md-0"
        />
        <img
          src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Startup/Group_3.png"
          alt="Shayna"
          class="px-5 mt-5 img-fluid mr-60 mt-md-0 px-md-0"
        />
        <img
          src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Startup/Group_4.png"
          alt="Shayna"
          class="px-4 mt-5 img-fluid mr-60 mt-md-0 px-md-0"
        />
        <img
          src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Startup/Group_5.png"
          alt="Shayna"
          class="px-4 mt-5 img-fluid mt-md-0 px-md-0"
        />

        <br><br><br>

        <img
          src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Startup/Group_3.png"
          alt="Shayna"
          class="px-5 mt-5 img-fluid mr-60 mt-md-0 px-md-0"
        />
        <img
          src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Startup/Group_4.png"
          alt="Shayna"
          class="px-4 mt-5 img-fluid mr-60 mt-md-0 px-md-0"
        />
        <img
          src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Startup/Group_5.png"
          alt="Shayna"
          class="px-4 mt-5 img-fluid mt-md-0 px-md-0"
        />

        <br><br><br>

        <img
          src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Startup/Group_3.png"
          alt="Shayna"
          class="px-5 mt-5 img-fluid mr-60 mt-md-0 px-md-0"
        />
        <img
          src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-Startup/Group_4.png"
          alt="Shayna"
          class="px-4 mt-5 img-fluid mr-60 mt-md-0 px-md-0"
        />
        
      </div>
    </div>
  </div>

  {{-- tahapan --}}

  <div class="content-3-2 container-xxl mx-auto  position-relative" style="font-family: 'Poppins', sans-serif">
    <div class="d-flex flex-lg-row flex-column align-items-center">
      <!-- Left Column -->
      <div class="img-hero text-center justify-content-center d-flex">
        <img id="hero" class="img-fluid"
          src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-1.png"
          alt="" />
      </div>

      <!-- Right Column -->
      <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
        <h4 class="title-text">3 Keuntungan Menggunakan Website BKK Muhammadiyah Kandanghaur</h4>
        <ul style="padding: 0; margin: 0">
          <li class="list-unstyled" style="margin-bottom: 2rem">
            <h4
              class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
              <span class="circle text-white d-flex align-items-center justify-content-center">
                1
              </span>
              Informasi Yang Cepat
            </h4>
            <p class="text-caption">
              Mendapatkan Informasi Lowongan Pekerjaan Yang Tersedia Dengan Cepat, Tanpa Harus Datang Ke Sekolah.
            </p>
          </li>
          <li class="list-unstyled" style="margin-bottom: 2rem">
            <h4
              class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
              <span class="circle text-white d-flex align-items-center justify-content-center">
                2
              </span>
              Kemudahan Melamar Pekerjaan
            </h4>
            <p class="text-caption">
              Mudah Untuk Mendaftarkan Diri Dalam Melamar Pekerjaan Secara Online, Menjadikan Lebih Cepat Dan Efisien.
            </p>
          </li>
          <li class="list-unstyled" style="margin-bottom: 4rem">
            <h4
              class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
              <span class="circle text-white d-flex align-items-center justify-content-center">
                3
              </span>
              Halfpenny
            </h4>
            <p class="text-caption">
              We provide economical packages for those of you<br class="d-sm-inline d-none" />
              who are still in school or workers.
            </p>
          </li>
        </ul>
      </div>
    </div>

    <div class="container">
      <div class="row flex-lg-row-reverse justify-content-center align-items-center ">
        <div class="col-lg">
            <img class="d-block img-fluid" src="/img/smk.jpg" alt="">
          {{-- <img src="https://source.unsplash.com/600x400" class="d-flex img-fluid h-600" alt="Bootstrap Themes" loading="lazy"> --}}
        </div>
        <div class="col-lg px-4 mt-3">
          <h1 class="display-5 fw-bold lh-1 mb-3">SMK Muhammadiyah Kandanghaur</h1>
          <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <p class="fw-normal"> <i class="bi bi-geo-alt-fill"></i>
               Jl. Raya Kandanghaur No.28 A, Karanganyar, Kec. Kandanghaur,
              Kabupaten Indramayu, Jawa Barat 45254
            </p>
            <p class="fw-normal">
              <i class="bi bi-phone-fill"></i>
               +6282213313423
            </p>
            <p class="fw-normal">
              <i class="bi bi-envelope-fill"> </i>
               bkk.muh_kdh@gmail.com
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
