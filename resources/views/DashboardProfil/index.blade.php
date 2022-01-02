@extends('dashboardprofil.layouts.main')

@section('container')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-info fa-sm fa-fw mr-2 text-gray-400"></i> Data Informasi</h6>
    </div>
    <div class="card-body">

        <div class="body">
            
            <h5>Nama : {{  $user->name }}</h5>

        </div>
    </div>
</div>

@endsection