<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        /* style login */
        *{
            font-family: 'poppins', sans-serif;
        }

        .background{
            background-color: #006973;
            /* height: 729px; */
            padding: auto;
            position: relative;
        }

        .column-text-heading{
            color: #ffffff;
            padding-left: 150px;
            padding-right: 150px;
            padding-top: 150px;   
        }

        .hero-heading{
            font-size: 34px;
        }

        .text-heading{
            font-size: 24px;
        }

        .image-login{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .form-page{
            padding-left: 100px;
            padding-right: 100px;
        }

        form{
            padding-top: 50px;
        }

        .form-control{
            border-radius: 10px;
        }

        .forgot-password{
            text-align: end;
        }

        .forgot-password a{
            text-decoration: none;
            color: #00838F;
        }

        .btn-login{
            width: 100%;
            background-color: #00838F;
            color: #ffffff;
            border-radius: 12px;
        }

        .login-with{
            width: 100%; 
            color: rgba(0, 0, 0, 0.35);
            border-bottom: 1px solid #ced4da; 
            line-height: 0.1em;
            text-align: center;
        }

        .login-with span {
            font-size: 14px;
            background:#fff; 
            padding: 0 50px;
        }

        .btn-google{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 100%;
            background: #FFFFFF;
            border: 1px solid #00838F;
            box-sizing: border-box;
            border-radius: 6px;
        }

        .link-register{
            text-align: center;
            padding-top: 158px;
            font-size: 14px;
        }

        .link-register a{
            text-decoration: none;
            color: #00838F;
        }
        /* end style login */
    </style>

    <title>Pedagang | Blanjaloka</title>
</head>
<body>
    <div class="row w-100">
        <div class="col-lg-6 background">
            <div class="hero-bg-login">
                <div class="column-text-heading">
                    <h2 class="hero-heading fw-bold">Mulai bisnismu di sini!</h2>
                    <h3 class="text-heading">Kelola dan atur tokomu di Blanjaloka Seller</h3>
                </div>
                <div class="">
                    <img class="image-login" src="img/Supermarket workers-pana.svg" width="450" alt="">
                </div> 
            </div>
        </div>

        <div class="col-lg-6 form-page">
            <div class="container">
                <nav class="navbar navbar-light">
                    <a class="navbar-brand ms-auto" href="#">
                        <img src="img/logo-blanjaloka.svg" alt="" width="115" height="47">
                    </a>
                </nav>
        
                <form action="{{url('pemda/login')}}" method="POST">
                    @csrf
                    <h1 class="mb-5 fw-bold">Login</h1>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Masukkan Email Anda" aria-describedby="Username">
                    </div>
                    <label for="exampleInputPassword1" class="form-label fw-bold">Password </label>
                    <div class="input-group mb-1">
                       <input type="password" class="form-password form-control" name="password" placeholder="Masukkan Kata Sandi Anda" style="border-bottom-left-radius: 10px; border-top-left-radius: 10px;"> 
                        <span class="input-group-text" id="basic-addon1" style="border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
                            <i class="bi bi-eye-slash-fill" id="togglePassword"></i>
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </span>      
                    </div>
                    <div class="forgot-password mb-4">
                        <a href="lupa-password" class="">Lupa Password?</a>
                    </div>
                    
                    <button type="submit" class="btn btn-login">Login</button>
                </form>
                    
                    <h6 class="login-with mt-4 mb-4">
                        <span>Atau login dengan</span>
                    </h6>
                    <a href="#" class="btn btn-google p-1"> 
                        <img class="logo-button-google me-2" src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-icon-png-transparent-background-osteopathy-16.png" width="20" alt="Login dengan Google">
                        <span>Google</span>
                    </a>

                <div class="link-register">
                    <p>Tidak punya akun?<a href="registrasi">Buat akunmu!</a></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
    </script>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>