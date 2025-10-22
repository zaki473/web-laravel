@extends('template')
@section('title')
    Buku
@endsection
@section('header')
    <h4>Tambah Buku</h4>
@endsection
@section('main')
    <form action="{{ url('/buku') }}" method="POST">
        @csrf

        <label>Kategori Buku</label>
        <select name="id_kategori_buku">
            @if (!empty($DataKategori))
                @foreach ($DataKategori as $Kategori)
                    <option value="{{ $Kategori->id_kategori_buku }}">
                        {{ $Kategori->kategori }}
                    </option>
                @endforeach
            @endif
        </select>
        <br><br>

        <label>Judul Buku</label>
        <textarea name="judul"></textarea><br><br>

        <label>Pengarang</label>
        <textarea name="pengarang"></textarea><br><br>

        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit"><br><br>

        <label>Tag Buku:</label><br>
        @if (!empty($DataTag))
            @foreach ($DataTag as $Tag)
                <input type="checkbox" name="id_tags[]" value="{{ $Tag->id_tags }}">
                {{ $Tag->tag }} <br>
            @endforeach
        @endif
        <br>

        <input type="submit" value="Simpan">
    </form>
@endsection

