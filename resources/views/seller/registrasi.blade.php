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
                <div class="column-text-heading-regist">
                    <h2 class="hero-heading fw-bold">Mulai bisnismu di sini!</h2>
                    <h3 class="text-heading">Kelola dan atur tokomu di Blanjaloka Seller</h3>
                </div>
                <div class="">
                    <img class="image-login" src="/assets/seller/img/Supermarket workers-pana.svg" width="450" alt="">
                </div> 
            </div>
        </div>

        <div class="col-md-6 form-page">
            <div class="container">
                <nav class="navbar navbar-light">
                    <a class="navbar-brand ms-auto" href="#">
                        <img src="/assets/seller/img/logo-blanjaloka.svg" alt="" width="115" height="47">
                    </a>
                </nav>

                @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
                @endif
        
                <form action="{{ route('register_seller.action') }}" method="POST">
                    @csrf
                    <h3 class="title-register fw-bold">Buat Akun Anda</h3>
                    <p class="text-register mb-5">Lengkapi data diri anda di bawah ini</p>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-bold">Nama Anda</label>
                        <input type="text" class="form-control" name="nama_pedagang" value="{{ old('name') }}"  placeholder="Masukkan Data Anda">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-bold">Nomor Telepon</label>
                        <input type="text" class="form-control" name="nomor_telepon" value="{{ old('nomor_telepon') }}" placeholder="Masukkan Data Anda">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Masukkan Data Anda">
                    </div>
                    <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-password form-control" name="password" placeholder="Masukkan Kata Sandi Anda" id="password" style="border-bottom-left-radius: 10px; border-top-left-radius: 10px;"> 
                         {{-- <span class="input-group-text" id="basic-addon1" style="border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
                             <i class="bi bi-eye-slash-fill" id="togglePassword"></i>
                             <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                             <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                         </span>       --}}
                     </div>
                     <label for="exampleInputPassword1" class="form-label fw-bold">Konfirmasi Password</label>
                     <div class="input-group mb-5">
                        <input type="password" class="form-password form-control" name="password_confirm" id="password1" placeholder="Masukkan Kata Sandi Anda" style="border-bottom-left-radius: 10px; border-top-left-radius: 10px;"> 
                         {{-- <span class="input-group-text" id="basic-addon1" style="border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
                             <i class="bi bi-eye-slash-fill" id="togglePassword1"></i>
                             <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                             <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                         </span>       --}}
                     </div>
                    
                    <button class="btn btn-registrasi">Daftar Sekarang</button>
                    
                    <h6 class="regist-with mt-4 mb-4">
                        <span>Atau daftar dengan</span>
                    </h6>
                    <a href="#" class="btn btn-google p-1"> 
                        <img class="logo-button-google me-2" src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-icon-png-transparent-background-osteopathy-16.png" width="20" alt="Login dengan Google">
                        <span>Google</span>
                    </a>
                </form>
                <div class="link-login-register">
                    <p>Sudah punya akun?<a href="{{ route('login_seller') }}">Masuk Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        const togglePassword1 = document.querySelector("#togglePassword1");
        const password1 = document.querySelector("#password1");

        togglePassword1.addEventListener("click", function () {
            // toggle the type attribute
            const type = password1.getAttribute("type") === "password" ? "text" : "password";
            password1.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script> --}}
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>