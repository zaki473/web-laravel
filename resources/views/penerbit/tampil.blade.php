@extends('template')
@section('title')
    Penerbit
@endsection
@section('header')
    <h4>Penerbit</h4>
@endsection
@section('main')
    <table border='1'>
        <thead>
            <th>No</th>
            <th>Penerbit</th>
            <th>Alamat</th>
            <th>Aksi Edit</th>
            <th>Aksi Hapus</th>
        </thead>
        <tbody>
            @if (!empty($PenerbitBuku))
                @php
                    $i = 1;
                @endphp
                @foreach ($PenerbitBuku as $key => $Penerbit)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $Penerbit->penerbit }}</td>
                        <td>{{ $Penerbit->alamat }}</td>
                        <td><a href="{{ url('/penerbit.' . $Penerbit->id_penerbit . '.edit') }}">

                                <input type="button" value="Edit" />
                            </a></td>
                        <td>
                            <form action="{{ url('/penerbit.' . $Penerbit->id_penerbit) }}" method="Post"
                                onsubmit="return confirm('Apakah data ingin dihapus?')">

                                @csrf
                                <input type="hidden" value="DELETE" name="_method">

                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <p>Tidak ada data Penerbit</p>
            @endif
        <tbody>
    </table>
    @foreach ($JumlahPenerbitBuku as $Jumlah)
        <p>Jumlah Data {{ $Jumlah->penerbit }}: {{ $Jumlah->jumlah_penerbit }}</p>
    @endforeach
    <a href="{{ url('/penerbit.tambah') }}">Tambah Penerbit</a>
@endsection
