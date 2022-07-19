<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blanjaloka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <style>
        body{
            background-image: url("assets/seller/img/Background_Landing_Page.jpg");
        }
        .content{
            padding-top: 13%;
            width: 100%;
        }
        .card{
            background-color: rgba(255, 255, 255, 0.9);
            width: 242px;
            height: 384px;
            text-decoration: none;
            color: #141414;
        }
        .card-img-top{
            width: 196px;
            display: block;
            margin-top: 63px
        }
        .card-body{
            margin-top: 68px;
        }
    </style>
    
    <div class="content row d-flex justify-content-center">
        
        <a href="{{ route('login_admin') }}" class="card me-4">
            <img src="assets/seller/img/Supermarket workers-pana 2.png" class="card-img-top mx-auto">
            <div class="card-body text-center">
                <h5 class="card-title">Admin</h5>
            </div>
        </a>

        <a href="{{ route('login_pengelolapasar') }}" class="card me-4">
            <img src="assets/seller/img/Supermarket workers-pana 2.png" class="card-img-top mx-auto">
            <div class="card-body text-center">
                <h5 class="card-title">Pengelola Pasar</h5>
            </div>
        </a>

        <a href="{{ route('login_seller') }}" class="card me-4">
            <img src="assets/seller/img/Supermarket workers-pana 2.png" class="card-img-top mx-auto">
            <div class="card-body text-center">
                <h5 class="card-title">Pedagang</h5>
            </div>
        </a>

        <a href="{{ route('login_pemda') }}" class="card">
            <img src="assets/seller/img/Supermarket workers-pana 2.png" class="card-img-top mx-auto">
            <div class="card-body text-center">
                <h5 class="card-title">Pemda</h5>
            </div>
        </a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
