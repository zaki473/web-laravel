@extends('template')
@section('title')
    Detail User
@endsection
@section('header')
    <h4>Detail User</h4>
@endsection
@section('main')
    <a href="{{ url('/user') }}">Kembali</a>
    <table border="1">
        <tbody>
            <tr>
                <td colspan="2">Data User</td>
            </tr>
            <tr>
                <td><strong>Foto User<strong></td>
                <td><img src="{{ asset('foto/' . $DataUser->foto) }}"></td>
            </tr>
            <tr>
                <td width="20%"><strong>Nama<strong></td>
                <td width="80%">{{ $DataUser->name }}</td>
            </tr>
            <tr>
                <td width="20%"><strong>Email<strong></td>
                <td width="80%">{{ $DataUser->email }}</td>
            </tr>
            <tr>
                <td width="20%"><strong>Level<strong></td>
                <td width="80%">{{ $DataUser->level }}</td>
            </tr>
        </tbody>
    </table>
@endsection
