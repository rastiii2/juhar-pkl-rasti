@extends('guru.layouts.app')

@section('title', 'Kegiatan')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if($kegiatan)

            <div class="row bg-light rounded align-items-center mx-0">
                <div class="col-md-6 p-3">
                    <table>
                        <tr>
                            <td width="100">Nama Siswa</td>
                            <td width="10">:</td>
                            <td>{{ $kegiatan->kegiatanSiswa->nama_siswa }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            @endif
            <h6 class="mb-4">Data Kegiatan</h6>
            <div class="table-responsive">
                <form action="{{ route('guru.pembimbing.siswa.kegiatan.cari', ['id' => $id_pembimbing, 'id_siswa' => $id_siswa]) }}" method="GET" class="row g-3">
                    <div class="col-auto">
                        <label for="tanggal_awal" class="form-label">Tanggal Awal</label>
                        <input type="date" class="form-control" name="tanggal_awal" id="tanggal_awal" value="{{ $tanggalAwal ?? '' }}">
                        <div class="text-danger">
                            @error('tanggal_awal')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-auto">
                        <label for="tanggal_akhir" class="form-label">Tanggal Akhir</label>
                        <input type="date" class="form-control" name="tanggal_akhir" id="tanggal_akhir" value="{{ $tanggalAkhir ?? '' }}">
                        <div class="text-danger">
                            @error('tanggal_akhir')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-auto align-self-end">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                        <a href="{{ route('guru.pembimbing.siswa.kegiatan', ['id' => $id_pembimbing, 'id_siswa' => $id_siswa]) }}" class="btn btn-primary"><i class="fas fa-sync-alt"></i></a>
                    </div>
                </form>
                <table class="table" id="kegiatan">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal Kegiatan</th>
                            <th scope="col">Nama Kegiatan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kegiatans as $kegiatan)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $kegiatan->tanggal_kegiatan }}</td>
                            <td>{{ $kegiatan->nama_kegiatan }}</td>
                            <td>
                                <a href="{{ route('guru.pembimbing.siswa.kegiatan.detail', ['id' => $id_pembimbing, 'id_siswa' => $kegiatan->id_siswa, 'id_kegiatan' => $kegiatan->id_kegiatan]) }}" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#kegiatan').DataTable();
    });
</script>

@endsection