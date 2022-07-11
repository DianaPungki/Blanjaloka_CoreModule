<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/seller/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="logobl1.svg" type="image/x-icon">
    <title>Seller | Blanjaloka</title>
</head>
<body>
    <div class="row w-100">
        <div class="col-md-6 background-regist-toko">
            <div class="hero-bg-regist-toko">
              <div class="column-text-heading2">
                <h2 class="hero-heading2 fw-bold">Daftarkan tokomu!</h2>
                <h5 class="text-heading2 ">Ikut alur pendaftaran berikut untuk <br> mendaftarkan tokomu</h5>                   
              </div>
    
              <div class="">
                  <img class="image-regist-toko" src="/assets/seller/img/Supermarket workers-pana 1.svg" width="450" alt="">          
              </div>              
            </div>      
        </div>

        <div class="col-md-6">
          <nav class="navbar back navbar-light">
              <a class="nav-link" href="{{ route('login_seller') }}"><img src="/assets/seller/img/dropdown2.svg" alt=""> Kembali ke Halaman login</a>
          </nav>
            <div class="regist-page">
                <form method="post">
                    <div class="form-login">          
                      <h3 class="text-regist1 mt-4">Lengkapi Data Pendaftaran</h3>
                      <h5 class="text-regist2 mb-5">Jika data sudah lengkap, mohon kirim data pendaftaran agar bisa diperiksa oleh tim kami.</h5>
                      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">                        
                        <a class="btn btn-group-regist btn-light text-start" href="form-registrasi-toko">
                          <img class="me-3" src="/assets/seller/img/centang.svg" alt="" height="23">
                          <span class="">Identitas Pedagang</span>
                          <hr>
                        </a>                        
                      </div>
                      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <a class="btn btn-group-regist btn-light text-start" href="form-registrasi-toko">
                          <img class="me-3" src="/assets/seller/img/centang.svg" alt="" height="23">
                          <span class="">Identitas Toko</span>
                          <hr>
                        </a>  
                      </div>
                      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <a class="btn btn-group-regist btn-light text-start" href="form-registrasi-toko">
                          <img class="me-3" src="/assets/seller/img/centang.svg" alt="" height="23">
                          <span class="">Informasi Rekening</span>
                          <hr>
                        </a>  
                      </div>
                          
                      <h6 class="text-konfirmasi">
                        <img src="/assets/seller/img/Subtract.svg" alt="">
                        <span>Data anda dilindungi di sistem kami dan dirahasiakan</span>
                      </h6>
                      
                      <button type="button" class="btn btn-regist-toko" data-bs-toggle="modal" data-bs-target="#exampleModal">Isi Data</button>                    
                      
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <img class="d-block mx-auto mb-4" src="/assets/seller/img/Done-pana.png" alt="">
            <h4 class="text1-popup-dokumen text-center">Dokumenmu sudah lengkap...</h4>
            <p class="text2-popup-dokumen text-center">Apakah kamu yakin ingin mengajukan pendaftaran?</p>

            <div class="d-flex justify-content-center mt-4">
              <button class="btn btn-kembali-popup-dokumen me-3" type="button" data-bs-toggle="modal">Kembali</button>
              <a href="proses-registrasi-toko" class="btn btn-batal-popup-dokumen" type="button">Iya, yakin</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>