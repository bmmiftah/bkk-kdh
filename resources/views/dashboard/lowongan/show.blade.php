@extends('dashboard.layouts.main')

@section('container')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="card shadow mb-4">
     <div class="card-header py-3">
         
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-info fa-sm fa-fw mr-2 text-gray-400"></i> Data lowongan</h6>
    </div>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
        <div class="accordion-body">
          {!! $lowongans->detail_lowongan !!}
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
          <i class="bi bi-ui-checks"></i> Kriteria Pekerja
        </button>
      </h2>
      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
        <div class="accordion-body">
          {!! $lowongans->kriteria_lowongan !!}
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
          <i class="bi bi-megaphone-fill"></i> Informasi Tambahan
        </button>
      </h2>
      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
        <div class="accordion-body">
         {!! $lowongans->informasi_tambahan !!}
        </div>
      </div>
    </div>
  </div>

</div>

<div class="col-md-5">

<div class="item-fluid p-5 shadow-sm border rounded-5" style="background-color: #fefefe">
    <h2>{{ $lowongans->title_lowongan }}</h2>
    <p>{{ $lowongans->perusahaan->nama_perusahaan }}</p>
    <hr>
    <h6>Status Pendaftaran <span class="badge bg-success">Dibuka</span></h6>
    <p class="inline-text"><i class="bi bi-calendar2-date-fill"></i> Batas Pendaftaran : {{ $lowongans->tgl_tutup }}</p>
    <br>
    <button class="btn btn-primary" type="button"><i class="bi bi-briefcase-fill"></i> Daftar Lowongan</button>
  </div>
</div>



@endsection