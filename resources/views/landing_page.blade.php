<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Blanjaloka</title>
    <style>
        @font-face {
        font-family: "Nexa";
        /*memberikan nama bebas untuk font*/
        src: url("template/landing_page/font/Poppins-Black.ttf");
        /*memanggil file font eksternalnya di folder nexa*/
        src: url("template/landing_page/Poppins-BlackItalic.ttf");
        src: url("template/landing_page/font/Poppins-Bold.ttf");
        src: url("template/landing_page/font/Poppins-BoldItalic.ttf");
        src: url("template/landing_page/font/Poppins-ExtraBold.ttf");
        src: url("template/landing_page/font/Poppins-ExtraBoldItalic.ttf");
        src: url("template/landing_page/font/Poppins-ExtraLight.ttf");
        src: url("template/landing_page/font/Poppins-ExtraLightItalic.ttf");
        src: url("template/landing_page/font/Poppins-Italic.ttf");
        src: url("template/landing_page/font/Poppins-Light.ttf");
        src: url("template/landing_page/font/Poppins-LightItalic.ttf");
        src: url("template/landing_page/font/Poppins-Medium.ttf");
        src: url("template/landing_page/font/Poppins-MediumItalic.ttf");
        src: url("template/landing_page/font/Poppins-Regular.ttf");
        src: url("template/landing_page/font/Poppins-SemiBold.ttf");
        src: url("template/landing_page/font/Poppins-SemiBoldItalic.ttf");
        src: url("template/landing_page/font/Poppins-Thin.ttf");
        src: url("template/landing_page/font/Poppins-ThinItalic.ttf");
        }
        * {
        padding: 0;
        margin: 0;
        
        }

        nav {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        flex-wrap: wrap;
        height: 65px;
        width: 100%;
        background: #f2f2f2;
        box-shadow: 0px 2px 20px 2px rgba(0, 0, 0, 0.25);
        position: fixed;
        z-index: 555;
        }

        @media (max-width: 599px) {
        nav {
            justify-content: center;
            align-items: center;
            height: auto;
        }
        }
        nav .logo {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px 20px;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        }
        nav .menu-nav {
        display: flex;
        flex-direction: row;
        justify-content: center;
        list-style: none;
        margin: 0px 20px;
        }
        @media (max-width: 599px) {
        nav .menu-nav {
            justify-content: center;
            align-items: center;
            height: 70px;
            margin: 0px;
            width: auto;
        }
        }
        nav .menu-nav li {
        margin: 0px 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100px;
        font-family: "Poppins", sans-serif;
        font-weight: 100;
        }
        @media (max-width: 599px) {
        nav .menu-nav li {
            height: 70px;
            margin: 0px;
            width: auto;
        }
        }
        nav .menu-nav li :hover {
        background-color: #065138;
        color: white;
        transition: 0.4s;
        }
        nav .menu-nav li a {
        text-decoration: none;
        font-size: 18px;
        color: #065138;
        width: 100%;
        height: 100%;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        }
        @media (max-width: 599px) {
        nav .menu-nav li a {
            margin: 10px;
        }
        }

        main {
        width: 100%;
        height: 100vh;
        background: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        text-align: center; margin: auto;
        }
        main a {
        z-index: 2;
        width: 200px;
        height: 35px;
        margin: 10px;
        font-size: 20px;
        background: #f2f2f2;
        color: #065138;
        border-radius: 11px;  
        border: 2px solid #065138;
        text-decoration: none;
        padding-top: 15px ;
       
        }
        main a:hover {
        background-color: #065138;
        color: white;
        border: 2px solid white;
        box-shadow: 0px 1px 5px 2px rgba(0, 0, 0, 0.25);
        transition: 0.3s;
        }

        .bungkus {
        position: absolute;
        width: 100%;
        bottom: 0;
        overflow: hidden;
        flex-direction: column;
        display: flex;
        }

        .buah {
        position: relative;
        margin-bottom: -130px;
        margin-left: 100px;
        width: 500px;
        }
        @media (max-width: 599px) {
        .buah {
            margin-left: 0px;
            margin-bottom: 0px;
            width: 400px;
        }
        }

        .bg-button {
        width: 100%;
        }
    </style>
</head>
<body>
  <nav>
    <div class="logo">
      <h1>Blanjaloka</h1>
    </div>

      <ul class="menu-nav">
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">About Us</a></li>
      </ul>
  </nav>

  <main>
    <a href="{{ route('login_admin') }}">Admin</a>
    <a href="{{ route('login_pengelolapasar') }}">Pengelola Pasar</a>
    <a href="{{ route('login_seller') }}">Pedagang</a>
    <a href="{{ route('login_pemda') }}">Pemda</a>

    

  </main>
  <div class="bungkus">
      <img src="{{ asset('template/landing_page/img/buahGede.png') }}" alt="" class="buah">
      <img class="bg-button" src="{{ asset('template/landing_page/wave.svg') }}" alt="">    
    </div>
</body>
</html>