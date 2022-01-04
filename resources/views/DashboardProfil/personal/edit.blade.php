@extends('dashboardProfil.layouts.main')

<div class="justify-content-center">

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profil Saya</h6>
        </div>
        <div class="card-body mx-10">
            <form method="post" action="/dashboardProfil/personal/{{ $profil->user_id }}" class="mb-5" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus required readonly value="{{ old('name', $user->name) }}">
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" autofocus required readonly value="{{ old('username', $user->username) }}">
                  @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autofocus required readonly value="{{ old('email', $user->email) }}">
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role Pengguna</label>
                    <br>
                    <select class="form-control" name="role_id" id="role">
                      @foreach ($roles as $role )
                       @if (old('role_id', $user->role_id) == $role->id)
                          <option value="{{ $role->id }}" selected>{{ $role->title_role }}</option>
                       @else
                          <option value="{{ $role->id }}">{{ $role->title_role }}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
        
               
                
                <button type="submit" class="btn btn-primary">Update User</button>
              </form>
        </div>
    </div>

</div>

@endsection