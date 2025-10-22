@extends('template')
@section('title')
    Buku
@endsection
@section('header')
    <h4>Buku</h4>
@endsection
@section('main')
    <table border='1'>
        <thead>
            <th>No</th>
            <th>Kategori Buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Tag</th>
            <th>Aksi Edit</th>
            <th>Aksi Hapus</th>
        </thead>
        <tbody>
            @if (!empty($DataBuku))
                @php

                    $i = 1;
                @endphp
                @foreach ($DataBuku as $key => $Buku)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $Buku->kategori_buku ? $Buku->kategori_buku->kategori : '-' }}</td>
                        <td>{{ $Buku->judul }}</td>
                        <td>{{ $Buku->pengarang }}</td>
                        <td>{{ $Buku->tahun_terbit }}</td>
                        <td>
                            @foreach ($Buku->tag as $tag)
                                {{ $tag->tag }},
                            @endforeach
                        </td>
                        <td><a href="{{ url('/buku.' . $Buku->id_buku . '.edit') }}">

                                <input type="button" value="Edit" /></a></td>
                        <td>
                            <form action="{{ url('/buku.' . $Buku->id_buku) }}" method="Post"
                                onsubmit="return confirm('Apakah data ingin dihapus?')">
                                @csrf
                                <input type="hidden" value="DELETE" name="_method">

                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            @else
                <p>Tidak ada data Buku</p>
            @endif
        <tbody>
    </table>
    <a href="{{ url('/buku.create') }}">Tambah Buku</a>
@endsection
