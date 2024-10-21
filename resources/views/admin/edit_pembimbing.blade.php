@extends('admin.layouts.app')

@section('title', 'Edit Pembimbing')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">EDIT PEMBIMBING</h6>
            <form action="{{ route('admin.pembimbing.update', $pembimbing->id_pembimbing) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id_guru" class="form-label">Nama Guru</label>
                    <select name="id_guru" id="id_guru" class="form-select">
                        <option value="">-Pilih-</option>
                        @foreach($gurus as $guru)
                        <option value="{{ $guru->id_guru }}" {{ $pembimbing->id_guru == $guru->id_guru ? 'selected' : '' }}>{{ $guru->nama_guru }}</option>
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
                        <option value="{{ $dudi->id_dudi }}" {{ $pembimbing->id_dudi == $dudi->id_dudi ? 'selected' : '' }}>{{ $dudi->nama_dudi }}</option>
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