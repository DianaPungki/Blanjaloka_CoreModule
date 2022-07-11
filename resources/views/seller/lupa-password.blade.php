<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/seller/css/style.css">

    <title>Seller | Blanjaloka</title>
</head>
<body>
    <div class="row w-100">
        <div class="col-lg-6 background">
            <div class="hero-bg">
                <div class="column-text-heading">
                    <h2 class="hero-heading fw-bold">Mulai bisnismu di sini!</h2>
                    <h3 class="text-heading">Kelola dan atur tokomu di Blanjaloka Seller</h3>
                </div>
                <div class="">
                    <img class="image-login" src="/assets/seller/img/Supermarket workers-pana.svg" width="450" alt="">
                </div> 
            </div>
        </div>

        <div class="col-lg-6 form-page">
            <div class="container">
                <nav class="navbar navbar-light">
                    <a class="navbar-brand ms-auto" href="#">
                        <img src="/assets/seller/img/logo-blanjaloka.svg" alt="" width="115" height="47">
                    </a>
                </nav>
        
                <form class="form-forgot-password">
                    <h1 class="title-forgot-password fw-bold">Lupa password?</h1>
                    <p class="text-forgot-password">Masukkan email dan tunggu link verifikasi dari kami</p>
                    <div class="mt-4 mb-4">
                        <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="InputEmail" placeholder="Masukkan Email Anda" aria-describedby="Email">
                    </div>
                    
                    <a class="btn btn-reset-password" href="reset-password">Reset Password</a>
                    
                </form>

                <div class="back-login">
                    <a href="{{ route('login_seller') }}">Kembali ke halaman login</a>
                </div>
            </div>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>