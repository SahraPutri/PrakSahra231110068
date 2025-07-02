@extends('layouts.app')

@section('content')
    <h1>Tambah Mahasiswa</h1>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <p>
            <label>Nama:</label><br>
            <input type="text" name="nama" required>
        </p>
        <p>
            <label>NIM:</label><br>
            <input type="text" name="nim" required>
        </p>
        <p>
            <label>Jurusan:</label><br>
            <input type="text" name="jurusan" required>
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" required>
        </p>
        <p>
            <button type="submit">Simpan</button>
        </p>
    </form>

    <p>
        <a href="{{ route('mahasiswa.index') }}">Kembali</a>
    </p>
@endsection