@extends('template')
@section('title')
    Kategori Buku
@endsection
@section('header')
    <h4>Kategori Buku</h4>
@endsection
@section('main')
    <table border='1'>
        <thead>
            <th>No</th>
            <th>Kategori Buku</th>
            <th>Aksi edit</th>
            <th>Aksi Hapus</th>
        </thead>
        <tbody>
            @if (!empty($KategoriBuku) && count($KategoriBuku))
                @php $i = 1; @endphp
                @foreach ($KategoriBuku as $kb)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $kb->kategori }}</td>

                        <td><a href="{{ url('/kategori-buku/' . $kb->id_kategori_buku . '/edit') }}">
                        <input type ="button" value="Edit"></a></td>
                        <td>
                            <form action="{{ url('/kategori-buku/' . $kb->id_kategori_buku) }}" method="POST" onsubmit="return confirm('Apakah data ingin dihapus?')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                    @php $i++; @endphp
                @endforeach
            @else
                <tr>
                    <td colspan="4">Tidak ada data Kategori Buku</td>
                </tr>
            @endif
        </tbody>
    </table>
    <a href="{{ url('/kategori-buku/tambah') }}">Tambah Kategori Buku</a>
@endsection
