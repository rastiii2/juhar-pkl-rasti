@extends('guru.layouts.app')

@section('title', 'Pembimbing')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h6 class="mb-4">Data Pembimbing</h6>
            <div class="table-responsive">
                <table class="table" id="pembimbing">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Nama Dudi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembimbings as $pembimbing)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $pembimbing->guru->nama_guru }}</td>
                            <td>{{ $pembimbing->dudi->nama_dudi }}</td>
                            <td>
                                <a href="{{ route('guru.pembimbing.siswa', $pembimbing->id_pembimbing) }}"  class="btn btn-info btn-sm">Siswa</a>
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
        $('#pembimbing').DataTable();
    });
</script>

@endsection