<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Link Swiper's CSS -->
      <link
         rel="stylesheet"
         href="https://unpkg.com/swiper/swiper-bundle.min.css"
         />
   </head>
   <!-- Demo styles -->
   <style>
      html,
      body {
      position: relative;
      height: 100%;
      }
      body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
      }
      .swiper {
      width: 100%;
      height: 100%;
      }
      .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
      }
      .swiper-slide img {
      display: block;
      width:50%;
      height: 100%;
      object-fit: cover;
      }
      .p-m{
      margin: 0px;
      color: white;
      font-weight: 700;
      font-size: 12px;
      border-right: 1px solid;
      padding-right: 11px;
      margin-left: 11px;
      height: 15px;
      align-items: center;
      display: flex;
      } 
      .w-80 {
      width: 80%;
      }
      .w-20 {
      width: 20%;
      }   
      .w-60 {
      width: 60%;
      }
      .w-40 {
      width: 40%;
      }
      .font-14{
      font-size: 12px;
      }
      .font-14{
      font-size: 14px;
      } 
      .font-18{
      font-size: 18px;
      }    
      .icon_search{
      padding: 7px 10px;
      z-index: 10;
      cursor: pointer;
      color: #614186;
      position: absolute;
      }
      .img_co {
      height: 18px;
      align-self: center;
      }
      .br-color-font{
      background:#603e85!important;
      }
      .dropdown-toggle::after{
      display:none;
      }
      .text-m{
      color:#653f90!important;
      font-weight: 700;
      }
      .dropdown-menu {
      top: 75%!important;
      }
      .swiper {
      height: 50%!important;
      }
      .swiper-pagination{
      position: relative;
      margin-top: 2%;
      }
      .text-c {
      color: black!important;
      font-weight: 900;
      line-height: 18px;
      font-size: 15px;
      margin: 0px 15px;
      padding: 6px 0px;
      width: 185px;
      }
      .swiper-button-next:after, .swiper-button-prev:after {
      font-family: swiper-icons;
      font-size: var(--swiper-navigation-size);
      text-transform: none!important;
      letter-spacing: 0;
      text-transform: none;
      font-variant: initial;
      line-height: 1;
      font-size: 16px;
      background: #221b2940;
      padding: 6px 10px;
      border-radius: 27px;
      font-weight: bold;
      color: white;
      }
      .line-sub-m{
      align-items: center;
      display: flex;
      justify-content: space-between;
      font-weight:bold;
      }
      .text-v {
      color: black!important;
      font-weight: 600;
      line-height: 15px;
      font-size: 16px;
      }
      .text-v-sub {
      font-weight: 600;
      line-height: 10px;
      font-size: 10px;
      margin: 1px 5px;
      color: #616161;
      }
      .text-r-sub {
      font-weight: 600;
      line-height: 10px;
      font-size: 16px;
      margin: 1px 5px;
      color: red;
      }
      .fa-star {
      color: #ffb100;
      }
      .shoppin{
      border-radius: 5px;
      background: linear-gradient(0deg,#ffb100 0,#ffcb24 100%);
      font-weight: 900;
      color: #1f033e;
      padding: 4px 8px;
      border: 0;
      font-size: 7px;
      }
      .shoppin-h {
      border-radius: 5px;
      background: linear-gradient(0deg,#ffb100 0,#ffcb24 100%);
      font-weight: 900;
      color: #1f033e;
      padding: 0px 9px;
      border: 0;
      font-size: 11px;
      height: 30px;
      margin: 5px;
      }
      .btn-shoppin:hover{
      min-height: 42px;
      border-radius: 0 0 5px 5px;
      font-size: 19px;
      background: #fff!important;
      color: #603e85!important;
      border: 1px solid;
      transition: .4s;
      }
      .btn-shoppin{
      min-height: 42px;
      border-radius: 0 0 5px 5px;
      font-size: 19px;
      background: #603e85!important;
      color: white;
      font-weight: 700;
      width: 100%;
      }
      .sticky-top {
      position: fixed!important;
      width: 100%;
      }
      .suscribe {
      position: fixed;
      bottom: 203px;
      right: 4px;
      box-shadow: 0px 0px 5px -1px rgb(0 0 0 / 20%), 0px 6px 10px 0px rgb(0 0 0 / 14%), 0px 1px 18px 0px rgb(0 0 0 / 12%);
      color: white!important;
      text-align: center;
      font-size: 12px;
      z-index: 100;
      justify-content: center;
      padding: 10px 8px;
      background: #ff0000b0;
      border-radius: 4px 0px 0px 4px;
      font-weight: 600;
      }
      .vertical{
      writing-mode: vertical-lr;
      transform: rotate(180deg);
      padding: 3px 3px;
      }
      .whatsapp {
      position:fixed;
      width:40px;
      height:40px;
      bottom:110px;
      right:18px;
      box-shadow: 0px 0px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0,0,0,.12);
      color:#25d366!important;
      background-color:#fff!important;
      border-radius:50px;
      text-align:center;
      font-size:30px;
      z-index:100;
      }
      .whatsapp-icon:hover{
      color:#25d366!important;
      background-color:#603e85!important;
      }
      .whatsapp:hover{
      color:#25d366!important;
      background-color:#603e85!important;
      }
      .whatsapp-icon {
      margin-top: 0px;
      font-size: 30px;
      }
      .p-15{
      padding-top: 15%;
      }
      .chat {
      position:fixed;
      width:40px;
      height:40px;
      bottom:40px;
      right:18px;
      background-color:#603e85;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      font-size:25px;
      z-index:100;
      }
      .chat-icon:hover{
      color:#603e85!important;
      background-color:#fff!important;
      }
      .chat:hover{
      color:#603e85!important;
      background-color:#fff!important;
      border: 1px solid #603e85;
      }
      .chat-icon {
      margin-top: 0px;
      font-size: 20px;
      }
      .text-suscribe{
      font-size: 25px;
      padding: 5px 0px;
      }
      .red{
      color: #73598c;
      font-size: 30px;
      }
      .br-ft{
      background: #f0f1f3;
      }
      .d-sm-block{
      display:flex!important;
      }
      .m-xs-20{
      margin: 5% 40px;
      }
      .p-sm-5{
      padding: 0rem!important
      }
      .w-img  {
         width: 60%;
      }
      @media  screen and (max-width: 992px) {
      .card-deck .card {
         flex: auto!important;
      }
         .swiper-slide img {
         display: block;
         width: 40%;
         height: 100%;
         object-fit: cover;
      }
      .w-img  {
         width: 25%;
      }
      .p-15{
      padding-top: 15%;
      }
      .d-xs-none{
      display:none!important;
      }
      .w-100-sm {
      width:100%;
      }
      .d-sm-block{
      display:block!important;
      }
      .w-sm-50{
      width:50%;
      }
      .text-c {
         color: black!important;
         font-weight: 900;
         line-height: 11px;
         font-size: 11px;
         margin: 0px 15px;
         padding: 6px 0px;
         width: 185px;
      }
      }
      @media  screen and (max-width: 600px) {
      .swiper-slide img {
         display: block;
         width: 60%;
         height: 100%;
         object-fit: cover;
      }
       .w-img  {
         width: 75%;
      }
      .p-15 {
      padding-top: 80%;
      }
      .justify-content-sm-center{
      justify-content: center;
      }
      .d-xs-none{
      display:none!important;
      }
      .w-100-sm {
      width:100%;
      }
      .w-sm-50{
      width:50%;
      }
      .d-sm-block{
      display:block!important;
      }
      .p-sm-5{
      padding: 3rem!important
      }
      }
   </style>
   <body class="bg-white">
      <nav class="navbar sticky-top navbar-expand-lg  d-block m-0 p-0 b-0">
         <div>
            <div class="bg-dark d-xs-none">
               <div class="container d-flex">
                  <div class="w-60 d-flex flex-row bd-highlight m-0 my-2 mt-2 ">
                     <span class="ml-0  p-m">
                     <img class="cl-2" data-src=" https://laika.com.co/assets/home/secure_mc.svg" src=" https://laika.com.co/assets/home/secure_mc.svg" >
                     Compras seguras online 
                     </span>
                     <span class="p-m">
                     <img class="" data-src=" https://laika.com.co/assets/home/wallet_mc.svg " src=" https://laika.com.co/assets/home/wallet_mc.svg ">
                     Pago contra entrega
                     </span>
                     <span class="p-m">
                     <img class="" data-src=" https://laika.com.co/assets/home/truck_mc.svg " src=" https://laika.com.co/assets/home/truck_mc.svg ">
                     Entregas el mismo día
                     </span>
                  </div>
                  <div class="w-40 d-flex justify-content-end m-0 my-1">
                     <span class="p-m">Llámanos 3009108496</span>
                     <span class="p-m border-0">Escríbenos</span> 
                     <div class="d-flex">
                        <span class="border-0 p-m"><img data-src=" https://laika.com.co/assets/home/youtube_mc.svg " src=" https://laika.com.co/assets/home/youtube_mc.svg"></span>
                        <span class="border-0 p-m"><img class="lazy" data-src=" https://laika.com.co/assets/home/facebook_mc.svg " src=" https://laika.com.co/assets/home/facebook_mc.svg"></span>
                        <span class="border-0 p-m"><img class="lazy" data-src=" https://laika.com.co/assets/home/instagram_mc.svg " src=" https://laika.com.co/assets/home/instagram_mc.svg"></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="br-color-font">
            <div class="container d-lg-flex py-2 p-0">
               <div class="w-100 d-flex ">
                  <div class="d-lg-none  col-5 d-flex justify-content-left align-items-center"">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="fas fa-bars"></i>
                     </button>
                  </div>
                  <div class="col-2 col-lg-1">
                     <a class="navbar-brand" href="#"><img data-src="https://laika.com.co/assets/home/LaikaMascotas.svg" class="img_laika_navbar " src="https://laika.com.co/assets/home/LaikaMascotas.svg" style=""></a>
                  </div>
                  <div class="d-xs-none  col-lg-6 d-flex align-items-center justify-content-center">
                     <img src="https://laika.com.co/assets/home/search_icon_mc.svg" class="icon_search" >
                     <input type="text" autocomplete="off" name="autocomplete_search" id="autocomplete_search" placeholder="¿Qué necesita tu mascota?" spellcheck="false" data-ms-editor="true" class="pl-5 autocomplete_search_style placeholder form-control">
                  </div>
                  <div class="col-4 col-lg-2 d-flex align-items-center justify-content-center">
                     <img src=" https://laikapp.s3.amazonaws.com/general/avatar_col.png" class="img_co">
                     <div class="mx-2 text-white font-weight-bold">
                        COL
                        <i class="fas fa-caret-down"></i>
                     </div>
                  </div>
                  <div class="col-1 col-lg-3 d-flex justify-content-end align-items-center" id="">
                     <div class="d-flex">
                        <div class="d-xs-none d-flex justify-content-end align-items-center">
                           <a class="text-white" href="#">
                           <span><i class="far fa-user"></i></span>
                           Mi cuenta
                           </a>
                        </div>
                        <div class="">
                           <a class="nav-link text-white" href="#"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="w-100 d-lg-none d-flex justify-content-center my-2">
                  <div class="w-80 d-flex align-items-center">
                     <img src="https://laika.com.co/assets/home/search_icon_mc.svg" class="icon_search" >
                     <input type="text" autocomplete="off" name="autocomplete_search" id="autocomplete_search" placeholder="¿Qué necesita tu mascota?" spellcheck="false" data-ms-editor="true" class="pl-5 autocomplete_search_style placeholder form-control">
                  </div>
               </div>
            </div>
            <div class=" w-100 collapse justify-content-left bg-white" id="navbarSupportedContent">
               <ul class="navbar-nav">
                  <li class="nav-item dropdown m-xs-20 ">
                     <a class="shadow-sm m-1 nav-link dropdown-toggle d-flex align-items-center font-14 text-m line-sub-m" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     ACERCA DE LAIKA <i class="m-2 fas fa-angle-right"></i>
                     </a>
                  </li>
                  <li class="nav-item dropdown m-xs-20">
                     <a class="shadow-sm m-1 nav-link dropdown-toggle d-flex align-items-center font-14 text-m line-sub-m" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     LINK DE INTERÉSES <i class="m-2 fas fa-angle-right"></i>
                     </a>
                  </li>
                  <li class="nav-item dropdown m-xs-20 ">
                     <a class="shadow-sm m-1 nav-link dropdown-toggle d-flex align-items-center font-14 text-m line-sub-m" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     INFORMACION <i class="m-2 fas fa-angle-right"></i>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="bg-white">
            <div class="shadow-sm">
               <div class="container d-flex justify-content-center ">
                  <ul class="row d-flex list-inline m-0 my-1 d-sm-flex justify-content-sm-center">
                     <li class="w-sm-50 nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center font-14 text-m justify-content-sm-center" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-lg-block">Compra para perro </span><span class="d-lg-none">Perro <img width="30" src="https://laika.com.co/assets/home/dog_mc.svg " alt="Colombia "></span><i class="d-xs-none m-2 fas fa-angle-right"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Alimeto </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Snacks </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Farmapet</div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Cuidado e <br>Higiene </div>
                              </div>
                              <i class="m-2 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Juguetes </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Accesorios </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Para Petlovers </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                        </div>
                     </li>
                     <li class="w-sm-50 nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center font-14 text-m justify-content-sm-center" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-lg-block">Compra para gato </span><span class="d-lg-none">Gato <img width="30" class="no_decoration_links" src="https://laika.com.co/assets/home/cat_mc_s.svg " alt="Colombia "> </span> <i class="d-xs-none m-2 fas fa-angle-right"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Alimeto </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Snacks </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Farmapet</div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Cuidado e <br>Higiene </div>
                              </div>
                              <i class="m-2 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Juguetes </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Accesorios </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Para Petlovers </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                        </div>
                     </li>
                     <li class="nav-item dropdown d-xs-none">
                        <a class="nav-link dropdown-toggle d-flex align-items-center font-14 text-m" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ofertas <i class="m-2 fas fa-angle-right"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Alimeto </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Snacks </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Farmapet</div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Cuidado e <br>Higiene </div>
                              </div>
                              <i class="m-2 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Juguetes </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Accesorios </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Para Petlovers </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                        </div>
                     </li>
                     <li class="nav-item dropdown d-xs-none">
                        <a class="nav-link dropdown-toggle d-flex align-items-center font-14 text-m" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Servicios <i class="m-2 fas fa-angle-right"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Alimeto </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Snacks </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Farmapet</div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Cuidado e <br>Higiene </div>
                              </div>
                              <i class="m-2 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Juguetes </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Accesorios </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                           <a class="line-sub-m dropdown-item " href="#">
                              <div class="d-flex">
                                 <div><i class="m-1 fas fa-paw"></i></div>
                                 <div>Para Petlovers </div>
                              </div>
                              <i class="m-3 fas fa-angle-right float-right"></i>
                           </a>
                        </div>
                     </li>
                     <li class="nav-item dropdown d-xs-none">
                        <a class="nav-link dropdown-toggle d-flex align-items-center font-14 text-m my-1" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        blog
                        </a>
                     </li>
                     <li class="nav-item dropdown d-flex d-sm-block text-center ">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img width="160" data-src=" https://laika.com.co/assets/home/LaikaMemberNew.svg " class="img_member  br-8" src=" https://laika.com.co/assets/home/LaikaMemberNew.svg " style="">
                        </a>
                        <button class="shoppin-h">ADQUIÉRELA YA</button>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <div class="container p-15">
         <div class="swiper mySwiper">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <img src="https://laikapp.s3.amazonaws.com/dev_images_banners/1632346317banner%20App%20membresia%20APROBADO%20NUEVO-18%20%281%29.png " class="w-100 d-md-block d-lg-block d-xl-block">
               </div>
               <div class="swiper-slide">
                  <img src="https://laikapp.s3.amazonaws.com/dev_images_banners/163241457611%20%282%29.png " class="w-100 d-md-block d-lg-block d-xl-block">
               </div>
               <div class="swiper-slide">
                  <img src="https://laikapp.s3.amazonaws.com/dev_images_banners/16327804616%20%286%29.png " alt="" srcset="" class="w-100 d-md-block d-lg-block d-xl-block">
               </div>
            </div>
            <div class="swiper-pagination"></div>
         </div>
      </div>
      <div class="bg-white">
         <div class="">
            <div class="container d-flex justify-content-left justify-content-sm-center">
               <ul class="d-flex list-inline m-0 my-1">
                  <li class="nav-item dropdown m-2 ">
                     <span class="nav-link dropdown-toggle d-flex align-items-center font-18 text-m">
                     Categoría
                     </span>
                  </li>
               </ul>
            </div>
         </div>
         <div class="">
            <div class="container d-flex justify-content-center ">
               <ul class="row d-flex list-inline m-0 my-1">
                  <li class="col-sm-2 nav-item dropdown shadow-sm mx-2 border rounded my-1 d-flex justify-content-sm-center">
                     <a class="nav-link dropdown-toggle d-flex align-items-center font-14 text-c justify-content-sm-center" href="#" >
                     <i class="m-1 fas fa-paw"></i> Aliemento 
                     </a>
                  </li>
                  <li class="col-sm-2 nav-item dropdown shadow-sm mx-2 border rounded my-1 d-flex justify-content-sm-center">
                     <a class="nav-link dropdown-toggle d-flex align-items-center font-14 text-c justify-content-sm-center" href="#" >
                     <i class="m-1 fas fa-paw"></i> Snacks
                     </a>
                  </li>
                  <li class="col-sm-2 nav-item dropdown shadow-sm mx-2 border rounded my-1 d-flex justify-content-sm-center">
                     <a class="nav-link dropdown-toggle d-flex align-items-center font-14 text-c justify-content-sm-center" href="#" >
                     <i class="m-1 fas fa-paw"></i> Farmapet
                     </a>
                  </li>
                  <li class="col-sm-2 nav-item dropdown shadow-sm mx-2 border rounded my-1 d-flex justify-content-sm-center">
                     <a class="nav-link dropdown-toggle d-flex align-items-center font-14 text-c justify-content-sm-center" href="#" >
                     <i class="m-1 fas fa-paw"></i> <span class="d-none d-lg-block">Cuidado e <br>Higiene</span><span class="d-lg-none">Cuidado e Higiene</span> 
                     </a>
                  </li>
                  <li class="col-sm-2 nav-item dropdown shadow-sm mx-2 border rounded my-1 d-flex justify-content-sm-center">
                     <a class="nav-link dropdown-toggle d-flex align-items-center font-14 text-c justify-content-sm-center" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">   
                     <i class="m-1 fas fa-paw"></i> Juguetes
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="">
            <div class="container d-flex justify-content-center ">
               <ul class="row d-flex list-inline m-0 ">
                  <li class=" col-sm-2 col-lg-5 col-md-5 nav-item dropdown shadow-sm mx-2 border rounded my-1 d-flex justify-content-sm-center">
                     <a class="nav-link dropdown-toggle d-flex align-items-center font-14 text-c justify-content-sm-center" href="#" >
                     <i class="m-1 fas fa-paw"></i>Accesorios
                     </a>
                  </li>
                  <li class="col-sm-2 col-lg-5 col-md-5 nav-item dropdown shadow-sm mx-2 border rounded my-1 d-flex justify-content-sm-center">
                     <a class="nav-link dropdown-toggle d-flex align-items-center font-14 text-c justify-content-sm-center" href="#" >
                     <i class="m-1 fas fa-paw"></i> Para PetLovers
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Swiper -->
      <div class="container d-flex justify-content-left justify-content-sm-center">
         <ul class="d-flex list-inline m-0 my-1">
            <li class="nav-item dropdown m-2">
               <span class="nav-link dropdown-toggle d-flex align-items-center font-18 text-m">
               Marcas destacadas
               </span>
            </li>
         </ul>
      </div>
      </div>
      <div class="container pb-5 pt-2">
         <div class="swiper mySwiper-2 shadow-sm">
            <div class="swiper-wrapper m-2">
               <div class="swiper-slide"><img data-src="https://laikapp.s3.amazonaws.com/dev_images_categories/1592410196_SALVAJE_FOOD_SAS__1226X1028.PNG" class="w-img" src="https://laikapp.s3.amazonaws.com/dev_images_categories/1592410196_SALVAJE_FOOD_SAS__1226X1028.PNG" style=""></div>
               <div class="swiper-slide"><img data-src="https://s3.us-east-1.amazonaws.com/laikapp/images_categories/total_max_circulo2.png" class="lazy w-50" src="https://s3.us-east-1.amazonaws.com/laikapp/images_categories/total_max_circulo2.png" style=""></div>
               <div class="swiper-slide"><img data-src="https://s3.us-east-1.amazonaws.com/laikapp/images_categories/PELUDITOS_BARF_logo2.png" class="lazy w-50" src="https://s3.us-east-1.amazonaws.com/laikapp/images_categories/PELUDITOS_BARF_logo2.png" style=""></div>
               <div class="swiper-slide"><img data-src="https://laikapp.s3.amazonaws.com/dev_images_categories/AGILITY_GOLD_CIRCULO_OK2.png" class="lazy w-50" src="https://laikapp.s3.amazonaws.com/dev_images_categories/AGILITY_GOLD_CIRCULO_OK2.png" style=""></div>
               <div class="swiper-slide"><img data-src="https://laikapp.s3.amazonaws.com/images_categories/1589395980_ROYAL_CANIN_500X500.png" class="lazy w-50" src="https://laikapp.s3.amazonaws.com/images_categories/1589395980_ROYAL_CANIN_500X500.png" style=""></div>
               <div class="swiper-slide"><img data-src="https://laikapp.s3.amazonaws.com/dev_images_categories/hills_circulo4.png" class="lazy w-50" src="https://laikapp.s3.amazonaws.com/dev_images_categories/hills_circulo4.png" style=""></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
         </div>
      </div>
      <div class="container">
         <div class="card-deck mb-3 text-center p-sm-5">
            <div class="card mb-4 box-shadow border-bottom-0">
               <div class="m-3">
                  <div>
                     <img id="img_products_categories_937" alt="Ringo Vitality Super Premium Adultos" data-src="https://laikapp.s3.amazonaws.com/dev_images_products/8106_Ringo_Vitality_Super_Premium_Adultos__1597852095_500x500.jpg" class="img_card_products ml-auto mr-auto mt-3 mb-3 lazy" style="width: 180px;" src="https://laikapp.s3.amazonaws.com/dev_images_products/8106_Ringo_Vitality_Super_Premium_Adultos__1597852095_500x500.jpg">
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v py-1" aria-expanded="false">
                     Ringo Vitality Super Premium Adultos
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v py-1">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v pt-2 align-self-start" aria-expanded="false">
                     <div class="m-1 align-items-center d-flex">
                        $ 5.555
                     </div>
                     <div class="m-1">
                        <div class="text-v-sub">
                           Antes
                        </div>
                        <div class="text-v-sub">
                           $ 5.555
                        </div>
                     </div>
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v align-self-start" aria-expanded="false">
                     <div class="m-1 text-r-sub ">
                        $ 5.555
                     </div>
                     <div class="m-1">
                        <div class="text-v-sub">
                           <img width="80" data-src="https://laika.com.co/assets/laikamemeber.svg" class="ml-1 mb-1 lazy" style="align-self: stretch;" src="https://laika.com.co/assets/laikamemeber.svg">
                        </div>
                        <div class="text-v-sub">
                           <button class="shoppin">ADQUIÉRELA YA</button>
                        </div>
                     </div>
                  </div>
               </div>
               <button type="button" class="btn btn-shoppin mt-3"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
            </div>
            <div class="card mb-4 box-shadow border-bottom-0">
               <div class="m-3">
                  <div>
                     <img id="img_products_categories_937" alt="Ringo Vitality Super Premium Adultos" data-src="https://laikapp.s3.amazonaws.com/dev_images_products/8106_Ringo_Vitality_Super_Premium_Adultos__1597852095_500x500.jpg" class="img_card_products ml-auto mr-auto mt-3 mb-3 lazy" style="width: 180px;" src="https://laikapp.s3.amazonaws.com/dev_images_products/8106_Ringo_Vitality_Super_Premium_Adultos__1597852095_500x500.jpg">
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v py-1" aria-expanded="false">
                     Ringo Vitality Super Premium Adultos
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v py-1">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v pt-2 align-self-start" aria-expanded="false">
                     <div class="m-1 align-items-center d-flex">
                        $ 5.555
                     </div>
                     <div class="m-1">
                        <div class="text-v-sub">
                           Antes
                        </div>
                        <div class="text-v-sub">
                           $ 5.555
                        </div>
                     </div>
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v align-self-start" aria-expanded="false">
                     <div class="m-1 text-r-sub ">
                        $ 5.555
                     </div>
                     <div class="m-1">
                        <div class="text-v-sub">
                           <img width="80" data-src="https://laika.com.co/assets/laikamemeber.svg" class="ml-1 mb-1 lazy" style="align-self: stretch;" src="https://laika.com.co/assets/laikamemeber.svg">
                        </div>
                        <div class="text-v-sub">
                           <button class="shoppin">ADQUIÉRELA YA</button>
                        </div>
                     </div>
                  </div>
               </div>
               <button type="button" class="btn btn-shoppin mt-3"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
            </div>
            <div class="card mb-4 box-shadow border-bottom-0">
               <div class="m-3">
                  <div>
                     <img id="img_products_categories_937" alt="Ringo Vitality Super Premium Adultos" data-src="https://laikapp.s3.amazonaws.com/dev_images_products/8106_Ringo_Vitality_Super_Premium_Adultos__1597852095_500x500.jpg" class="img_card_products ml-auto mr-auto mt-3 mb-3 lazy" style="width: 180px;" src="https://laikapp.s3.amazonaws.com/dev_images_products/8106_Ringo_Vitality_Super_Premium_Adultos__1597852095_500x500.jpg">
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v py-1" aria-expanded="false">
                     Ringo Vitality Super Premium Adultos
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v py-1">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v pt-2 align-self-start" aria-expanded="false">
                     <div class="m-1 align-items-center d-flex">
                        $ 5.555
                     </div>
                     <div class="m-1">
                        <div class="text-v-sub">
                           Antes
                        </div>
                        <div class="text-v-sub">
                           $ 5.555
                        </div>
                     </div>
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v align-self-start" aria-expanded="false">
                     <div class="m-1 text-r-sub ">
                        $ 5.555
                     </div>
                     <div class="m-1">
                        <div class="text-v-sub">
                           <img width="80" data-src="https://laika.com.co/assets/laikamemeber.svg" class="ml-1 mb-1 lazy" style="align-self: stretch;" src="https://laika.com.co/assets/laikamemeber.svg">
                        </div>
                        <div class="text-v-sub">
                           <button class="shoppin">ADQUIÉRELA YA</button>
                        </div>
                     </div>
                  </div>
               </div>
               <button type="button" class="btn btn-shoppin mt-3"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
            </div>
            <div class="card mb-4 box-shadow border-bottom-0">
               <div class="m-3">
                  <div>
                     <img id="img_products_categories_937" alt="Ringo Vitality Super Premium Adultos" data-src="https://laikapp.s3.amazonaws.com/dev_images_products/8106_Ringo_Vitality_Super_Premium_Adultos__1597852095_500x500.jpg" class="img_card_products ml-auto mr-auto mt-3 mb-3 lazy" style="width: 180px;" src="https://laikapp.s3.amazonaws.com/dev_images_products/8106_Ringo_Vitality_Super_Premium_Adultos__1597852095_500x500.jpg">
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v py-1" aria-expanded="false">
                     Ringo Vitality Super Premium Adultos
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v py-1">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v pt-2 align-self-start" aria-expanded="false">
                     <div class="m-1 align-items-center d-flex">
                        $ 5.555
                     </div>
                     <div class="m-1">
                        <div class="text-v-sub">
                           Antes
                        </div>
                        <div class="text-v-sub">
                           $ 5.555
                        </div>
                     </div>
                  </div>
                  <div class="justify-content-left d-flex align-items-center text-v align-self-start" aria-expanded="false">
                     <div class="m-1 text-r-sub ">
                        $ 5.555
                     </div>
                     <div class="m-1">
                        <div class="text-v-sub">
                           <img width="80" data-src="https://laika.com.co/assets/laikamemeber.svg" class="ml-1 mb-1 lazy" style="align-self: stretch;" src="https://laika.com.co/assets/laikamemeber.svg">
                        </div>
                        <div class="text-v-sub">
                           <button class="shoppin">ADQUIÉRELA YA</button>
                        </div>
                     </div>
                  </div>
               </div>
               <button type="button" class="btn btn-shoppin mt-3"><i class="fas fa-shopping-cart"></i> Añadir al carrito</button>
            </div>
         </div>
         <a href="#" class="suscribe">
            <div class="vertical">Sugerencias</div>
            <i class="fas fa-comment-alt text-suscribe"></i>
         </a>
         <a href="#" class="whatsapp"> <i class="fab fa-whatsapp whatsapp-icon"></i></a>
         <a href="#" class="chat"><i class="fas fa-comment chat-icon"></i></a>
      </div>
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
         <div class="container d-lg-none">
            <div class="row">
               <div class="col-12 col-md">
                  <div class="d-flex justify-content-center"> 
                     <img class="ml-2 text-right img-fluid img_laika_footer lazy" data-src="https://laika.com.co/assets/LAIKA.png  " src="https://laika.com.co/assets/LAIKA.png  " style="">
                  </div>
                  <div class="d-flex justify-content-center text-m font-18">
                     Síguenos en:
                  </div>
                  <div class="d-flex justify-content-center">
                     <span class="p-1"><i class="fab fa-youtube red"></i></span>
                     <span class="p-1"><i class="fab fa-instagram red"></i></span>
                     <span class="p-1"><i class="fab fa-facebook-square red"></i></span>
                  </div>
                  <div>
                  </div>
               </div>
               <div class="accordion w-100" id="accordionExample">
                  <div class="">
                     <div class="" id="headingOne">
                        <div class="nav-item dropdown m-xs-20">
                           <div class="shadow-sm m-1 nav-link dropdown-toggle d-flex align-items-center font-14 text-m line-sub-m"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           ACERCA DE LAIKA <i class="m-2 fas fa-angle-right"></i>
                           </div>
                        </div>
                     </div>
                     <div id="collapseOne" class="collapse m-5" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <ul class="list-unstyled text-small">
                        <li class="py-2"><a class="font-12 text-m" href="#">Sobre Laika</a></li>
                        <li class="py-2"><a class="font-12 text-m" href="#">Servicios</a></li>
                        <li class="py-2"><a class="font-12 text-m" href="#">Trabaja con nosotros</a></li>
                        <li class="py-2"><a class="font-12 text-m" href="#">Blog</a></li>
                        <li class="py-2"><a class="font-12 text-m" href="#">Términos y condiciones</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="">
                     <div class="" id="headingTwo">
                        <div class="nav-item dropdown m-xs-20">
                           <div class="shadow-sm m-1 nav-link dropdown-toggle d-flex align-items-center font-14 text-m line-sub-m"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                           ACERCA DE LAIKA <i class="m-2 fas fa-angle-right"></i>
                           </div>
                        </div>
                     </div>
                     <div id="collapseTwo" class="collapse m-5" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <ul class="list-unstyled text-small">
                        <li class="py-2"><a class="font-12 text-m" href="#">Sobre Laika</a></li>
                        <li class="py-2"><a class="font-12 text-m" href="#">Servicios</a></li>
                        <li class="py-2"><a class="font-12 text-m" href="#">Trabaja con nosotros</a></li>
                        <li class="py-2"><a class="font-12 text-m" href="#">Blog</a></li>
                        <li class="py-2"><a class="font-12 text-m" href="#">Términos y condiciones</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="">
                     <div class="" id="headingThree">
                        <div class="nav-item dropdown m-xs-20">
                           <div class="shadow-sm m-1 nav-link dropdown-toggle d-flex align-items-center font-14 text-m line-sub-m"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                           ACERCA DE LAIKA <i class="m-2 fas fa-angle-right"></i>
                           </div>
                        </div>
                     </div>
                     <div id="collapseThree" class="collapse m-5" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <ul class="list-unstyled text-small">
                        <li class="py-2"><a class="font-12 text-m" href="#">Sobre Laika</a></li>
                        <li class="py-2"><a class="font-12 text-m" href="#">Servicios</a></li>
                        <li class="py-2"><a class="font-12 text-m" href="#">Trabaja con nosotros</a></li>
                        <li class="py-2"><a class="font-12 text-m" href="#">Blog</a></li>
                        <li class="py-2"><a class="font-12 text-m" href="#">Términos y condiciones</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
          </div>

         <div class="container d-xs-none">
            <div class="row">
               <div class="col-12 col-md">
                  <div class="d-flex justify-content-center"> 
                     <img class="ml-2 text-right img-fluid img_laika_footer lazy" data-src="https://laika.com.co/assets/LAIKA.png  " src="https://laika.com.co/assets/LAIKA.png  " style="">
                  </div>
                  <div class="d-flex justify-content-center text-m font-18">
                     Síguenos en:
                  </div>
                  <div class="d-flex justify-content-center">
                     <span class="p-1"><i class="fab fa-youtube red"></i></span>
                     <span class="p-1"><i class="fab fa-instagram red"></i></span>
                     <span class="p-1"><i class="fab fa-facebook-square red"></i></span>
                  </div>
                  <div>
                  </div>
               </div>
               <div class="col-3 col-md">
                  <h5 class="text-m font-18">ACERCA DE LAIKA</h5>
                  <ul class="list-unstyled text-small">
                     <li class="py-2"><a class="font-12 text-m" href="#">Sobre Laika</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Servicios</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Trabaja con nosotros</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Blog</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Términos y condiciones</a></li>
                  </ul>
               </div>
               <div class="col-3 col-md">
                  <h5 class="text-m font-18">ACERCA DE LAIKA</h5>
                  <ul class="list-unstyled text-small">
                     <li class="py-2"><a class="font-12 text-m" href="#">Sobre Laika</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Servicios</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Trabaja con nosotros</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Blog</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Términos y condiciones</a></li>
                  </ul>
               </div>
               <div class="col-3 col-md">
                  <h5 class="text-m font-18">ACERCA DE LAIKA</h5>
                  <ul class="list-unstyled text-small">
                     <li class="py-2"><a class="font-12 text-m" href="#">Sobre Laika</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Servicios</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Trabaja con nosotros</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Blog</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Términos y condiciones</a></li>
                  </ul>
               </div>
               <div class="col-3 col-md">
                  <h5 class="text-m font-18">ACERCA DE LAIKA</h5>
                  <ul class="list-unstyled text-small">
                     <li class="py-2"><a class="font-12 text-m" href="#">Sobre Laika</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Servicios</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Trabaja con nosotros</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Blog</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Términos y condiciones</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="br-ft">
            <div class="container">
               <div class="row p-4 d-sm-block">
                  <div class="col-12 col-lg-6 col-md d-flex justify-content-center">
                     <div class="row">
                        <div class="col-4 col-lg-3 col-md d-flex justify-content-center">
                           <a href="" class="text-center">
                           <img src="https://laika.com.co/assets/laika_vetcare/Mercado_pago.png" class="w-img" alt="">
                           </a>
                        </div>
                        <div class="col-4 col-lg-3 ccol-md d-flex justify-content-center">
                           <a href="" class="text-center">
                           <img src="https://laika.com.co/assets/laika_vetcare/Mercado_pago.png" class="w-img" alt="">
                           </a>
                        </div>
                        <div class="col-4 col-lg-3 col-md d-flex justify-content-center">
                           <a href="" class="text-center">
                           <img src="https://laika.com.co/assets/laika_vetcare/Mercado_pago.png" class="w-img" alt="">
                           </a>
                        </div>
                        <div class="col-6 col-lg-3 col-md d-flex justify-content-center">
                           <a href="" class="text-center">
                           <img src="https://laika.com.co/assets/laika_vetcare/Mercado_pago.png" class="w-img" alt="">
                           </a>
                        </div>
                        <div class="d-lg-none col-6 col-lg-4 col-md text-center d-flex justify-content-center">
                           <a href="" class="text-center">
                           <img  data-src="https://laika.com.co/assets/APP.png  " src="https://laika.com.co/assets/APP.png" class="w-img">
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6 col-md d-flex justify-content-center">
                     <div class="row">
                        <div class=" d-none d-lg-block col-6 col-lg-4 col-md text-center ">
                           <a href="" class="text-center">
                           <img  data-src="https://laika.com.co/assets/APP.png  " src="https://laika.com.co/assets/APP.png" class="w-img">
                           </a>
                        </div>
                        
                        <div class=" col-6 col-lg-4 col-md text-center d-flex justify-content-center">
                           <a href="" class="text-center">
                           <img  data-src="https://laika.com.co/assets/APP.png  " src="https://laika.com.co/assets/APP.png" class="w-img">
                           </a>
                        </div>
                        <div class=" col-6 col-lg-4 col-md text-center d-flex justify-content-center">
                           <a href="" class="text-center">
                           <img  data-src="https://laika.com.co/assets/APP.png  " src="https://laika.com.co/assets/APP.png" class="w-img">
                           </a>
                        </div>
                     </div>
                  </div>
            
                  


                
               </div>
            </div>
         </div>
      </footer>
      <!-- Swiper JS -->
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <!-- Initialize Swiper -->
      <script> 
         var swiper = new Swiper(".mySwiper-2", {
          slidesPerView: 1,
          spaceBetween: 10,
          loop: true,
          loopFillGroupWithBlank: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            "@0.00": {
              slidesPerView: 1,
              spaceBetween: 10,
            },
            "@0.75": {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            "@1.00": {
              slidesPerView: 3,
              spaceBetween: 40,
            },
            "@1.50": {
              slidesPerView: 4,
              spaceBetween: 50,
            },
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
         });
      </script>
      <script>
         var swiper = new Swiper(".mySwiper", {
         spaceBetween: 30,
         centeredSlides: true,
         autoplay: {
            delay: 2900,
            disableOnInteraction: false,
         },
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         
         });
      </script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script>
         const $dropdown = $(".dropdown");
         const $dropdownToggle = $(".dropdown-toggle");
         const $dropdownMenu = $(".dropdown-menu");
         const showClass = "show";
         $(window).on("load resize", function() {
         if (this.matchMedia("(min-width: 768px)").matches) {
         $dropdown.hover(
         function() {
         const $this = $(this);
         $this.addClass(showClass);
         $this.find($dropdownToggle).attr("aria-expanded", "true");
         $this.find($dropdownMenu).addClass(showClass);
         },
         function() {
         const $this = $(this);
         $this.removeClass(showClass);
         $this.find($dropdownToggle).attr("aria-expanded", "false");
         $this.find($dropdownMenu).removeClass(showClass);
         }
         );
         } else {
         $dropdown.off("mouseenter mouseleave");
         }
         });
      </script>
   </body>
</html><?php /**PATH C:\laragon\www\laika-prueba\resources\views/home.blade.php ENDPATH**/ ?>