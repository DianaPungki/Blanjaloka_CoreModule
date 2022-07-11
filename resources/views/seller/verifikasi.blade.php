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
        
                <form class="form-verifikasi" id="formOtp">
                    <h3 class="title-verifikasi fw-bold">Verifikasi Pendaftaran</h3>
                    <h4 class="text-verifikasi mb-5">Kode telah dikirimkan ke email aaaaaaa@gmail.com</h4>
                    <br><br>
                    <div class="row mx-6">
                        <div class="col-sm-2 col-md-2 col-lg-2">
                            <input type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" class="input-otp text-center" data-otp='1' name="otp_1">
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2">
                            <input type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" class="input-otp text-center" data-otp='2' name="otp_2">
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2">
                            <input type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" class="input-otp text-center" data-otp='3' name="otp_3">
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2">
                            <input type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" class="input-otp text-center" data-otp='4' name="otp_4">
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2">
                            <input type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" class="input-otp text-center" data-otp='5' name="otp_5">
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2">
                            <input type="text" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="1" class="input-otp text-center" data-otp='6' name="otp_6">
                        </div>
                    </div>
                    <div class="timer text-end mt-4 me-4">0.59 <span id="timer"></span></div>
                    <div class="link-kirim-ulang">
                        <p>Tidak menerima kode ?<a href="">Kirim Ulang Kode</a></p>
                    </div>
                    
                    <a class="btn btn-verifikasi" href="verifikasi-sukses">Verifikasi</a>
                    
                </form>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>