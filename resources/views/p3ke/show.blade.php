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
        <h1>Halaman Detail Anggota Keluarga p3ke</h1>

        <div class="row my-5">
            @foreach ($individus as $individu)
                <div class="col-md-3 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $individu->nama }}</h5>
                            <h6 class="card-title">{{ $individu->hubungan_keluarga }}</h6>
                            <p class="card-text">NIK: {{ $individu->nik }}</p>
                            <p class="card-text">Jenis Kelamin: {{ $individu->jenis_kelamin }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center my-5">
            <form method="get" action="{{ URL::previous() }}">
                <button class="btn btn-primary">Kembali</button>
            </form>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>
