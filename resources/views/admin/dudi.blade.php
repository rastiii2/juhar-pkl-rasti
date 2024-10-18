@extends('admin.layouts.app')

@section('title', 'Dudi')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h6 class="mb-4">Data Dudi</h6>
            <div class="table-responsive">
                <a href="{{ route('admin.dudi.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                <table class="table" id="dudi">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Dudi</th>
                            <th scope="col">Alamat Dudi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dudis as $dudi)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $dudi->nama_dudi }}</td>
                            <td>{{ $dudi->alamat_dudi }}</td>
                            <td>
                                <a href="{{ route('admin.dudi.edit', $dudi->id_dudi) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ route('admin.dudi.delete', $dudi->id_dudi) }}"  onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Hapus</a>
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
        $('#dudi').DataTable();
    });
</script>

@endsection