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
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-briefcase fa-sm fa-fw mr-2 text-gray-400"></i> Data Pendaftaran</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="tabelPendaftaran" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Tes</th>
                        <th scope="col">Nama Pelamar</th>
                        <th scope="col">Lowongan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
               
                <tbody>
                    @foreach ($pendaftarans as $pendaftaran )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pendaftaran->no_tes }}</td>
                        <td>{{ $pendaftaran->nama_lengkap}}</td>
                        <td>{{ $pendaftaran->lowongan->title_lowongan }}</td>
                        <td>{{ $pendaftaran->status }}</td>
                        <td class="text-right">

                            {{-- <a href="/dashboard/pendaftaran/{{ $pendaftaran->id }}/edit" class="badge bg-warning"><i style="color: white" class="fas fa-edit fa-md fa-fw"></i></a> --}}
                            @if ($pendaftaran->status != 'diterima')
                            <form action="/dashboard/pendaftaran/{{ $pendaftaran->id }}" method="post" class="d-inline">
                                @method('put')
                                @csrf
                                    <button class="badge bg-success text-light border-0" onclick="return confirm('are you sure?')"><i style="color: white" class="fas fa-check-circle fa-md fa-fw"></i> Update Status</button>
                                </form>
                            @endif
                        
                            <form action="/dashboard/pendaftaran/{{ $pendaftaran->id }}" method="post" class="d-inline">
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
    $('#tabelPendaftaran').DataTable();
} );
</script>

@endsection
