@extends('dashboard.layouts.main')

@section('container')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif
<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-briefcase fa-sm fa-fw mr-2 text-gray-400"></i> Data Lowongan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tabelLowongan" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Lowongan</th>
                        <th scope="col">Perusahaan</th>
                        <th scope="col">Tanggal Tutup</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
               
                <tbody>
                    @foreach ($lowongans as $lowongan )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $lowongan->title_lowongan }}</td>
                        <td>{{ $lowongan->perusahaan->nama_perusahaan}}</td>
                        <td>{{ $lowongan->tgl_tutup }}</td>
                        <td class="text-center">
                            <a href="/dashboard/lowongan/{{ $lowongan->slug }}/edit" class="badge bg-warning"><i style="color: white" class="fas fa-edit fa-md fa-fw"></i></a>

                            <a href="/dashboard/lowongan/{{ $lowongan->slug }}" class="badge bg-warning"><i style="color: white" class="fas fa-trash fa-md fa-fw"></i></a>

                            <form action="/dashboard/lowongan/{{ $lowongan->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('are you sure?')"><i style="color: white" class="fas fa-trash fa-md fa-fw"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection

@section('tables')

<script>
$(document).ready( function () {
    $('#tabelLowongan').DataTable();
} );
</script>

@endsection
