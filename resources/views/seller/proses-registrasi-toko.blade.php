<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/seller/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Seller | Blanjaloka</title>
</head>
<body>
      <div class="position-absolute top-50 start-50 translate-middle">
        <img src="/assets/seller/img/logo-blanjaloka.svg" class="d-block mx-auto mb-3" alt="" width="115" height="47">
        <img src="/assets/seller/img/Supermarket workers-pana 1.svg" class="d-block mx-auto mb-3" width="500" height="400" alt="">
        <h3 class="title-proses-registrasi fw-bold text-center mb-3">Pendaftaran Anda sedang diproses</h3>
        <h4 class="text-proses-registrasi text-center mb-4">Pendaftaranmu sedang diproses oleh admin kami, tunggu konfirmasi kami di <br> email yang sudah didaftarkan ya!</h4>
        <a href="registrasi-toko" style="text-decoration: none;">
            <button type="submit" class="btn btn-dokumen-pendaftaran d-block mx-auto mb-3">Lihat Dokumen Pendaftaran</button>
        </a>
        <a href="{{ route('login_seller') }}" style="text-decoration: none;">
            <button type="submit" class="btn btn-keluar d-block mx-auto">Keluar</button>
        </a>
      </div>
      
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>