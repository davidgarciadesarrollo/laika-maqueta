<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laika</title>
      <!-- Link bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
      <link rel="stylesheet" href="{{asset('css/style.css')}}" rel="stylesheet"/>
   </head>
   <body class="bg-white">
       <!-- header -->
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

      <!-- Contenido -->
      @yield('contenido') @section('contenido')

      <!-- footer -->
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
         <div class="container d-lg-none">
            <div class="row justify-content-center">
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
               <div class="d-flex justify-content-center">
                  <form action="">
                     <div class="py-2 "><a class="d-flex font-12 text-m" href="#"><input type="email" placeholder="Correo electrónico" required="required" class=" form-control text_subscription"> <button type="button" class=" btn  email pt-0 pb-1 "><span class="email-bg badge mt-1 " style="width: 30px; height: 25px;"><i class=" fas fa-angle-right text-white align-text-bottom " style="font-size: 18px;"></i></span></button><br></div>
                     <div><label for="check_notifications" class="custom-control-label pt-1 font-11 color_purple mx-4" style="font-style: italic;">He leído y acepto las <a href="https://laika.com.co/privacy_policies/bog" class="color_purple">políticas de privacidad.</a></label></a></div>
                  </form>         
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
                     <li class="py-2"><a class="font-12 text-m" href="#">Preguntas frecuentes</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">¿Cómo comprar en Laika?</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Política de Privacidads</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Contáctanos</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Políticas de Entrega</a></li>
                  </ul>
               </div>
               <div class="col-3 col-md">
                  <h5 class="text-m font-18">ACERCA DE LAIKA</h5>
                  <ul class="list-unstyled text-small">
                     <li class="py-2"><a class="font-12 text-m" href="#">Teléfono: 3009108496</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">servicioclientes@laika.com.co</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Bogotá D.C., Colombias</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Blog</a></li>
                     <li class="py-2"><a class="font-12 text-m" href="#">Términos y condiciones</a></li>
                  </ul>
               </div>
               <div class="col-3 col-md">
                  <h5 class="text-m font-18">ACERCA DE LAIKA</h5>
                  <ul class="list-unstyled text-small">
                     <li class="py-2"><a class="font-12 text-m" href="#">Recibe noticias y promociones al instante.</a></li>
                     <form action="">
                        <li class="py-2 "><a class="d-flex font-12 text-m" href="#"><input type="email" placeholder="Correo electrónico" required="required" class=" form-control text_subscription"> <button type="button" class=" btn  email pt-0 pb-1 "><span class="email-bg badge mt-1 " style="width: 30px; height: 25px;"><i class=" fas fa-angle-right text-white align-text-bottom " style="font-size: 18px;"></i></span></button><br></li>
                        <li><label for="check_notifications" class="custom-control-label pt-1 font-11 color_purple" style="font-style: italic;">He leído y acepto las <a href="https://laika.com.co/privacy_policies/bog" class="color_purple">políticas de privacidad.</a></label></a></li>
                     </form>
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
                           <img src="https://laika.com.co/assets/laika_vetcare/MASTER.png"  class="w-img" alt="">
                           </a>
                        </div>
                        <div class="col-4 col-lg-3 col-md d-flex justify-content-center">
                           <a href="" class="text-center">
                           <img src="https://laika.com.co/assets/laika_vetcare/VISA.png" class="w-img" alt="">
                           </a>
                        </div>
                        <div class="col-6 col-lg-3 col-md d-flex justify-content-center">
                           <a href="" class="text-center">
                           <img src="https://laika.com.co/assets/laika_vetcare/AMERICAN.png" class="w-img" alt="">
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
                        <div class=" col-6 col-lg-4 col-md text-center d-flex justify-content-center">
                           <a href="" class="text-center">
                           <img  data-src="https://laika.com.co/assets/APP.png  " src="https://laika.com.co/assets/APP.png" class="w-img">
                           </a>
                        </div>
                        <div class=" d-none d-lg-block col-6 col-lg-4 col-md text-center ">
                           <a href="" class="text-center">
                           <img  data-src="https://laika.com.co/assets/GOOGLEP.png  " src="https://laika.com.co/assets/GOOGLEP.png  " class="w-img">
                           </a>
                        </div>
                        <div class=" col-6 col-lg-4 col-md text-center d-flex justify-content-center">
                           <a href="" class="text-center">
                           <img  data-src="https://laika.com.co/assets/huaweiGallery.png  " src="https://laika.com.co/assets/huaweiGallery.png  " class="w-img">
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
      <link rel="stylesheet" href="{{asset('css/style.css')}}" rel="stylesheet"/>
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
   </body>
</html>