<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        #content{
            padding-top: 80px;
            padding-right: 100px;
            padding-bottom: 50px;
            padding-left: 100px;
        }
    </style>
</head>
<body>
    @include('includes.navbar')

    <div class="row" id="content">
        <div class="col">
            <h4>Selamat Datang di</h4>
            <h1 class="text-info">Digital Library</h1>
            <p>Anda dapat mencari seluruh koleksi yang tersedia di perpustakaan kami</p>
            <div class="d-flex">
                <div class="p-2">
                    <form class="d-flex">
                            <button class="btn btn-info" type="button">Cari Buku</button>
                    </form>
                </div>
                <div class="p-2">
                    <form class="d-flex">
                            <button class="btn btn-light" type="button">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
        <img src="{{ asset('img/reading.jpg') }}"  width="500" height="349">
        </div>
    </div>

    
</body>
</html>