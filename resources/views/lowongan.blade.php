@extends('layouts.main')

@section('container')

<div class="container justify-content-center">

  <h2 class="text-center py-3">Lowongan Pekerjaan</h2>

  <div class="row container main-lowongan m-0">

    <div class="contaner side-bar col-md-4">
      <div class="side-bar py-3">

        <form action="/lowongan">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Lowongan" name="search" value="{{ request('search') }}">
            
            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i> Cari</button>
          </div>
        </form>

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
@if ($lowongans->count())
  
@foreach ($lowongans as $lowongan )

<div class="list-lowongan py-3">
  <div class="card item-fluid">
    <div class="card-body">
      <h5 class="card-title">{{ $lowongan->title_lowongan }}</h5>
      <small> 
        @if ($lowongan->status == true )
        <b class="text-primary">DIBUKA </b> <i class="bi bi-calendar3"></i> {{ $lowongan->tgl_tutup }}
        @else
        <b class="text-danger">DITUTUP </b> <i class="bi bi-calendar3"></i> {{ $lowongan->tgl_tutup }}
        @endif
      </small>
      <br> <hr>
      <p class="card-text">{{ $lowongan->excerpt }}</p>
      <a href="/detail_lowongan/{{ $lowongan->slug }}" class="btn btn-primary">Lihat Lebih</a>
    </div>
  </div>
</div>

@endforeach

@else
<div class="card shadow-sm mt-3">

  <p class="text-center fs-4 my-5">Lowongan Yang Dicari Tidak Bisa Ditemukan</p>
  
</div>
@endif

{{  $lowongans->links()  }}

    </div>
  </div>  
</div>


@endsection
