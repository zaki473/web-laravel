<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    @extends('template')

    @section('main')
        <h4>Hai !!!</h4>
        Selamat datang di Vokasi UB, Prodi kita :
        @if (!empty($namaprodi))
            <ul>
                @foreach ($namaprodi as $prodi)
                    <li>{{ $prodi }}</li>
                @endforeach
            </ul>
        @else
            <p>tidak ada memiliki prodi</p>
        @endif
    @endsection
    @section('footer')
        <footer>© 2024 Vokasi UB</footer>
    @endsection
</body>

</html>
