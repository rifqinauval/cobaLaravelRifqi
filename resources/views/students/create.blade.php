@extends('layout.main')

@section('title', 'Form Tambah Mahasiswa')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-2">Form Tambah Data Mahasiswa</h1>

                <form method="post" action="/students">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama">
                        @error('nama')
                        <div class="invalid-feedback">
                         {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="masukkan nrp" name="nrp">
                        @error('nrp')
                        <div class="invalid-feedback">
                         {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="masukkan email" name="email">
                        @error('email')
                        <div class="invalid-feedback">
                         {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="masukkan jurusan" name="jurusan">
                        @error('jurusan')
                        <div class="invalid-feedback">
                         {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>

            </div>
        </div>
    </div>
    
@endsection