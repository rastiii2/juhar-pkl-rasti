@extends('admin.layouts.app')

@section('title', 'Tambah Pembimbing')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">TAMBAH PEMBIMBING</h6>
            <form action="{{ route('admin.pembimbing.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="id_guru" class="form-label">Nama Guru</label>
                    <select name="id_guru" id="id_guru" class="form-select">
                        <option value="">-Pilih-</option>
                        @foreach($gurus as $guru)
                        <option value="{{ $guru->id_guru }}">{{ $guru->nama_guru }}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @error('id_guru')
                        {{ $message }}
                        @enderror
                    </div> 
                </div>
                <div class="mb-3">
                    <label for="id_dudi" class="form-label">Nama Dudi</label>
                    <select name="id_dudi" id="id_dudi" class="form-select">
                        <option value="">-Pilih-</option>
                        @foreach($dudis as $dudi)
                        <option value="{{ $dudi->id_dudi }}">{{ $dudi->nama_dudi }}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @error('id_dudi')
                        {{ $message }}
                        @enderror
                    </div> 
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection