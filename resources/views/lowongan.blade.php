@extends('layouts.main')

@section('container')

<div class="container justify-content-center">

  <h2 class="text-center py-3">Lowongan Pekerjaan</h2>

  <div class="row container main-lowongan">

    <div class="contaner side-bar col-md-4">
      <div class="side-bar py-3">

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari Lowongan">
          <button class="btn btn-primary" type="button" id="search" name="search"><i class="bi bi-search"></i> Cari</button>
        </div>

        <div class="card item-fluid">
          <img src="/img/lowongan.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Alur Pendaftaran</h5>
            <p class="card-text">Berikut adalah alur pendaftaran dari setiap lowongan pekerjaan yang tersedia:</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p class="text m-0"><span class="badge bg-primary text-white rounded-square">1</span> Daftar akun</p>
            </li>
            <li class="list-group-item">
              <p class="text m-0"><span class="badge bg-primary text-white rounded-square">2</span> Masuk dengan akun yang telah terdaftar</p>
            </li>
            <li class="list-group-item">
              <p class="text m-0"><span class="badge bg-primary text-white rounded-square">3</span> Pilih atau cari lowongan pekerjaan</p>
            </li>
            <li class="list-group-item">
              <p class="text m-0"><span class="badge bg-primary text-white rounded-square">4</span> Daftar pekerjaan</p>
            </li>
          </ul>
        </div>

      </div>
      
    </div>
  

    <div class="container lowongan mb-5 col-md-8">

       <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  
    <div class="list-lowongan py-3">
      <div class="card item-fluid">
        <div class="card-body">
          <h5 class="card-title">PT. ASTRA HONDA MOTOR</h5>
          <small> <b class="text-primary">TERSEDIA </b> <i class="bi bi-calendar3"></i> 12 maret 2021 - 25 maret 2020</small>
          <br> <hr>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod iste alias et esse asperiores. Optio architecto corporis, temporibus quod nam labore a veniam sequi expedita magnam neque, ex deserunt accusantium.</p>
          <a href="#" class="btn btn-primary">Lihat Lebih</a>
        </div>
      </div>
    </div>

    <div class="list-lowongan py-3">
      <div class="card item-fluid">
        <div class="card-body">
          <h5 class="card-title">PT. ASTRA HONDA MOTOR</h5>
          <small> <b class="text-primary">TERSEDIA </b> <i class="bi bi-calendar3"></i> 12 maret 2021 - 25 maret 2020</small>
          <br> <hr>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod iste alias et esse asperiores. Optio architecto corporis, temporibus quod nam labore a veniam sequi expedita magnam neque, ex deserunt accusantium.</p>
          <a href="#" class="btn btn-primary">Lihat Lebih</a>
        </div>
      </div>
    </div>

    <div class="list-lowongan py-3">
      <div class="card item-fluid">
        <div class="card-body">
          <h5 class="card-title">PT. ASTRA HONDA MOTOR</h5>
          <small> <b class="text-danger">DITUTUP </b> <i class="bi bi-calendar3"></i> 12 maret 2021 - 25 maret 2020</small>
          <br> <hr>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod iste alias et esse asperiores. Optio architecto corporis, temporibus quod nam labore a veniam sequi expedita magnam neque, ex deserunt accusantium.</p>
          <a href="#" class="btn btn-primary">Lihat Lebih</a>
        </div>
      </div>
    </div>
    
    </div>
  </div>  
</div>


@endsection
