<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

    <div class="container mt-5">
        <a href="{{ route('home') }}" class="my-4">Ke Halaman Home</a>
        <h1>Halaman Data KK p3ke</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Success!</strong> {{ $message }}.
            </div>
        @endif

        <a href="{{ route('p3ke.create') }}" class="btn btn-success my-3">Import Excel</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Keluarga</th>
                    <th scope="col">Desil</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Desa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keluargas as $key => $keluarga)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td><a href="{{ route('p3ke.show', $keluarga->id) }}">{{ $keluarga->id_keluarga }}</a></td>
                        <td>{{ $keluarga->desil }}</td>
                        <td>{{ $keluarga->alamat }}</td>
                        <td>{{ $keluarga->desa }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>
