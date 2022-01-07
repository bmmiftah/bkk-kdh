@extends('layouts.main1')

@section('container')

<div class="justify-content-center">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus-circle fa-sm fa-fw mr-2 text-gray-400"></i>Buat Lowongan Baru</h6>
        </div>
        <div class="card-body mx-10">
            <form method="post" action="/" class="mb-5" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="title_lowongan" class="form-label">Judul lowongan</label>
                  <input type="text" class="form-control @error('title_lowongan') is-invalid @enderror" id="title_lowongan" name="title_lowongan" required autofocus value="{{ old('title_lowongan') }}">
                  @error('title_lowongan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
        
                <div class="mb-3">
                  <label for="slug" class="form-label">Slug</label>
                  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                  @error('slug')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="perusahaan" class="form-label">Perusahaan</label>
                  <br>
                  <select class="form-control" name="perusahaan_id" required>
                      <option value="" selected>--Pilih Perusahaan--</option>
                    @foreach ($perusahaans as $perusahaan )
                     @if (old('perusahaan_id') == $perusahaan->id)
                        <option value="{{ $perusahaan->id }}" selected>{{ $perusahaan->nama_perusahaan }}</option>
                     @else
                        <option value="{{ $perusahaan->id }}">{{ $perusahaan->nama_perusahaan }}</option>
                      @endif
                    @endforeach
                  </select>
                </div>

                <div class="mb-3">
                    <label for="tgl_buka" class="form-label">Tanggal Buka Pendaftaran</label>
                    <input type="date" class="form-control @error('tgl_buka') is-invalid @enderror" id="tgl_buka" name="tgl_buka" required autofocus value="{{ old('tgl_buka') }}">
                    @error('tgl_buka')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                <div class="mb-3">
                    <label for="tgl_tutup" class="form-label">Tanggal Tutup Pendaftaran</label>
                    <input type="date" class="form-control @error('tgl_tutup') is-invalid @enderror" id="tgl_tutup" name="tgl_tutup" required autofocus value="{{ old('tgl_tutup') }}">
                    @error('tgl_tutup')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                
                <button type="submit" class="btn btn-primary">Buat Lowongan</button>
              </form>
        </div>
    </div>

</div>

@endsection