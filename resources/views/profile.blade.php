<!DOCTYPE html>
<html class="overflow-x-hidden h-full" lang="en">
   
<!-- Mirrored from slimhamdi.net/tunis-tailwind/demos/dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2024 12:49:00 GMT -->
<head>
      <meta charset="utf-8">
      <title>Premkumar Personal Portfolio</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Template Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <!-- Template CSS Files -->
      <link rel="stylesheet" href="{{asset('assets/css/circle.css')}}" >
      <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/component.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
      <!-- CSS Skin File -->
      <link rel="stylesheet" href="{{asset('assets/css/skins/yellow.css')}}">
      <!-- Live Style Switcher - demo only -->
      <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('assets/css/skins/blue.css')}}">
      <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('assets/css/skins/green.css')}}">
      <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('assets/css/skins/yellow.css')}}">
      <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{asset('assets/css/skins/blueviolet.css')}}">
      <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('assets/css/skins/goldenrod.css')}}">
      <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('assets/css/skins/magenta.css')}}">
      <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('assets/css/skins/orange.css')}}">
      <link rel="alternate stylesheet" type="text/css" title="purple" href="{{asset('assets/css/skins/purple.css')}}">
      <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('assets/css/skins/red.css')}}">
      <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('assets/css/skins/yellowgreen.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/styleswitcher.css')}}">
      <!-- Modernizr JS File -->
      <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
   </head>
   <body class="home dark font-Poppins text-fs-16 text-white font-medium leading-lh-1.6 relative w-full h-full bg-black overflow-hidden">
      <!-- Live Style Switcher Starts - demo only -->
      <div id="switcher" class="">
         <div class="content-switcher">
            <h4>COLOR SWITCHER</h4>
            <ul>
               <li>
                     <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="assets/img/styleswitcher/purple.png" alt="purple"></a>
               </li>
               <li>
                     <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="assets/img/styleswitcher/red.png" alt="red"></a>
               </li>
               <li>
                     <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="assets/img/styleswitcher/blueviolet.png" alt="blueviolet"></a>
               </li>
               <li>
                     <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="assets/img/styleswitcher/blue.png" alt="blue"></a>
               </li>
               <li>
                     <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="assets/img/styleswitcher/goldenrod.png" alt="goldenrod"></a>
               </li>
               <li>
                     <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="assets/img/styleswitcher/magenta.png" alt="magenta"></a>
               </li>
               <li>
                     <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="assets/img/styleswitcher/yellowgreen.png" alt="yellowgreen"></a>
               </li>
               <li>
                     <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="assets/img/styleswitcher/orange.png" alt="orange"></a>
               </li>
               <li>
                     <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="assets/img/styleswitcher/green.png" alt="green"></a>
               </li>
               <li>
                     <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="assets/img/styleswitcher/yellow.png" alt="yellow"></a>
               </li>
            </ul>
            <h4>TRANSITION DIRECTION</h4>
            <div class="flex justify-between transition-direction">
               <div id="cornertopleft">
                  <div class="arrow cornertopleft"></div>
               </div>
               <div class="active" id="top">
                  <div class="arrow top"></div>
               </div>
               <div id="cornertopright">
                  <div class="arrow cornertopright"></div>
               </div>
            </div>
            <div class="flex justify-between transition-direction">
               <div id="left">
                  <div class="arrow left"></div>
               </div>
               <div id="right">
                  <div class="arrow right"></div>
               </div>
            </div>
            <div class="flex justify-between transition-direction">
               <div id="cornerbottomleft">
                  <div class="arrow cornerbottomleft"></div>
               </div>
               <div id="bottom">
                  <div class="arrow bottom"></div>
               </div>
               <div id="cornerbottomright">
                  <div class="arrow cornerbottomright"></div>
               </div>
            </div>
            <span>Navigate between sections to see the effect.</span>
            <div id="hideSwitcher">&times;</div>
         </div>
      </div>
      <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
      <!-- Live Style Switcher Ends - demo only -->
      <!-- Preloader Starts -->
      <div id="preloader" class="fixed z-100 group left-0 top-0 h-screen w-full flex justify-center items-center pointer-events-none before:absolute before:left-0 before:top-0 before:w-1/2 before:h-full before:bg-black-3 before:transition-all before:duration-300 after:absolute after:right-0 after:top-0 after:w-1/2 after:h-full after:bg-black-3 after:transition-all after:duration-300 [&.preloaded]:before:animate-finishanimation [&.preloaded]:after:animate-finishanimation">
         <div class="line m-0 h-250 w-3 rounded-4 relative overflow-hidden transition-all duration-700 before:animate-animateline before:z-10 before:absolute before:left-0 before:top-1/2 before:w-3 before:h-0 before:-translate-y-1/2 after:animate-animatebgline after:absolute after:left-0 after:w-1 after:h-full after:bg-transparent after:-translate-y-full group-[.preloaded]:opacity-0 group-[.preloaded]:!h-full group-[.preloaded]:after:opacity-0"></div>
      </div>
      <!-- Preloader Ends -->
      <!-- Header Starts -->
      <header class="header from-lg:fixed from-lg:right-30 from-lg:bottom-0 from-lg:z-30 from-lg:flex from-lg:items-center from-lg:h-[calc(100vh-200px)] from-lg:top-100 from-lg:opacity-100 from-lg:transition from-lg:duration-300 from-lg:[&.hide-header]:z-0 from-lg:[&.hide-header]:opacity-0" id="navbar-collapse-toggle">
         <!-- Fixed Desktop Navigation Starts -->
         <ul id="desktop-nav" class="icon-menu down-lg:hidden from-md:block uppercase">
            <li class="desktop-nav-element cursor-pointer w-50 h-50 relative flex items-center transition duration-300 my-20 mx-0 rounded-full bg-black-2 active">
               <i class="fa fa-home absolute left-0 right-0 mx-auto block text-center top-15 pointer-events-none text-fs-19"></i>
               <div class="group block p-0 w-50 h-50" >
                  <h2 class="absolute text-center -z-10 block h-50 pr-25 pl-30 text-fs-15 right-0 opacity-0 text-white leading-lh-50 font-medium transition-all duration-300 rounded-30 group-hover:opacity-100 group-hover:right-27 group-hover:rounded-tl-30 group-hover:rounded-bl-30 group-hover:rounded-tr-none group-hover:rounded-br-none">Home</h2>
               </div>
            </li>
            <li class="desktop-nav-element cursor-pointer w-50 h-50 relative flex items-center transition duration-300 my-20 mx-0 rounded-full bg-black-2">
               <i class="fa fa-user absolute left-0 right-0 mx-auto block text-center top-15 pointer-events-none text-fs-19"></i>
               <div class="group block p-0 w-50 h-50" >
                  <h2 class="absolute text-center -z-10 block h-50 pr-25 pl-30 text-fs-15 right-0 opacity-0 text-white leading-lh-50 font-medium transition-all duration-300 rounded-30 group-hover:opacity-100 group-hover:right-27 group-hover:rounded-tl-30 group-hover:rounded-bl-30 group-hover:rounded-tr-none group-hover:rounded-br-none">About</h2>
               </div>
            </li>
            <li class="desktop-nav-element cursor-pointer w-50 h-50 relative flex items-center transition duration-300 my-20 mx-0 rounded-full bg-black-2">
               <i class="fa fa-briefcase absolute left-0 right-0 mx-auto block text-center top-15 pointer-events-none text-fs-19"></i>
               <div class="group block p-0 w-50 h-50">
                  <h2 class="absolute text-center -z-10 block h-50 pr-25 pl-30 text-fs-15 right-0 opacity-0 text-white leading-lh-50 font-medium transition-all duration-300 rounded-30 group-hover:opacity-100 group-hover:right-27 group-hover:rounded-tl-30 group-hover:rounded-bl-30 group-hover:rounded-tr-none group-hover:rounded-br-none">Portfolio</h2>
               </div>
            </li>
            <li class="desktop-nav-element cursor-pointer w-50 h-50 relative flex items-center transition duration-300 my-20 mx-0 rounded-full bg-black-2">
               <i class="fa fa-envelope-open absolute left-0 right-0 mx-auto block text-center top-15 pointer-events-none text-fs-19"></i>
               <div class="group block p-0 w-50 h-50">
                  <h2 class="absolute text-center -z-10 block h-50 pr-25 pl-30 text-fs-15 right-0 opacity-0 text-white leading-lh-50 font-medium transition-all duration-300 rounded-30 group-hover:opacity-100 group-hover:right-27 group-hover:rounded-tl-30 group-hover:rounded-bl-30 group-hover:rounded-tr-none group-hover:rounded-br-none">Contact</h2>
               </div>
            </li>
            <!-- + -->
         </ul>
         <!-- Fixed Desktop Navigation Ends -->
         <!-- Mobile Menu Starts -->
         <nav class="hidden down-md:block relative">
            <div id="menuToggle" class="fixed top-30 right-30 z-50 select-none pt-19 pl-16 w-54 h-54 rounded-5 bg-black-3 xs:right-15 xs:top-4 xs:pb-13 xs:w-49 xs:h-49">
               <input id="inputmobile" class="h-54 w-54 absolute top-0 left-0 opacity-0 z-20 cursor-pointer peer" type="checkbox">
               <span class="flex h-0.5 w-23 mb-5 relative bg-white z-10 rounded-3 origin-0 custom-transition peer-checked:rotate-45 peer-checked:translate-x-1 peer-checked:translate-y-0"></span>
               <span class="flex h-0.5 w-23 mb-5 relative bg-white z-10 rounded-3 origin-0-100 custom-transition peer-checked:opacity-0 peer-checked:scale-0-2"></span>
               <span class="flex h-0.5 w-23 mb-5 relative bg-white z-10 rounded-3 origin-0-100 custom-transition peer-checked:-rotate-45 peer-checked:translate-x-2 peer-checked:translate-y-2"></span>
               <ul class="fixed m-0 left-0 top-0 w-full h-full pt-60 bg-black-3 -translate-x-full ease-menu-mobile duration-500 peer-checked:transform-none [&>li]:cursor-pointer [&>li]:after:absolute [&>li]:after:h-px [&>li]:after:w-[calc(100%-60px)] [&>li]:after:bg-black-4 [&>li]:after:left-30 [&>li:last-child]:after:hidden" id="mobile-nav">
                  <li class="mobile-nav-element active relative pl-30 home-link">
                     <div class="uppercase delay-2000 no-underline relative text-fs-26 xs:text-fs-18 py-14">
                        <i class="fa fa-home"></i>
                        <span class="absolute left-50 xs:left-35 font-normal">Home</span>
                     </div>
                  </li>
                  <li class="mobile-nav-element relative pl-30">
                     <div class="uppercase delay-2000 no-underline relative text-fs-26 xs:text-fs-18 py-14">
                        <i class="fa fa-user"></i>
                        <span class="absolute left-50 xs:left-35 font-normal">About</span>
                     </div>
                  </li>
                  <li class="mobile-nav-element relative pl-30">
                     <div class="uppercase delay-2000 no-underline relative text-fs-26 xs:text-fs-18 py-14">
                        <i class="fa fa-folder-open"></i>
                        <span class="absolute left-50 xs:left-35 font-normal">Portfolio</span>
                     </div>
                  </li>
                  <li class="mobile-nav-element relative pl-30">
                     <div class="uppercase delay-2000 no-underline relative text-fs-26 xs:text-fs-18 py-14">
                        <i class="fa fa-envelope-open"></i>
                        <span class="absolute left-50 xs:left-35 font-normal">Contact</span>
                     </div>
                  </li>
                  <!-- <li class="mobile-nav-element relative pl-30">
                     <div class="uppercase delay-2000 no-underline relative text-fs-26 xs:text-fs-18 py-14">
                        <i class="fa fa-comments"></i>
                        <span class="absolute left-50 xs:left-35 font-normal">Blog</span>
                     </div>
                  </li> -->
               </ul>
            </div>
         </nav>
         <!-- Mobile Menu Ends -->
      </header>
      <!-- Header Ends -->
      <!-- Main Content Starts -->
      <div class="w-full h-full pages overflow-hidden">
         <!-- Home Starts -->
         <div class="page page--current" id="home">
            <div class="bg-accent fixed w-full h-200prcnt -rotate-15 -top-1/2 -left-83prcnt hidden from-lg:block"></div>
            <div class="flex items-center h-screen w-full down-lg:mx-auto down-lg:justify-center xs:text-left down-lg:text-center ">
               <!-- Desktop Image Starts -->
               <img class="hidden from-lg:block fixed w-1/3 h-[calc(100vh-80px)] left-40 top-40 rounded-30 shadow-1 object-cover"  src="assets/img/my_self_dark.jpg" alt="">
               <!-- Desktop Image Ends -->
               <div class="from-lg:ml-100/3 from-lg:w-2/3">
                  <div class="mx-auto max-w-550 custom-md-1:max-w-450">
                     <!-- Mobile Image Starts -->
                     <img src="assets/img/my_self_dark.jpg" class="hidden down-lg:block xs:!hidden rounded-full w-270 h-270 mx-auto mb-25 border-4 border-solid border-black-3" alt="my picture">
                     <!-- Mobile Image Ends -->
                     <!-- Informations Starts -->
                     <!-- <a href="{{ url('/get-user-info') }}">Just click i hack your device 😉</a> -->
                     <h1 class="text-fs-51 text-accent font-Poppins relative uppercase font-bold leading-lh-62 pl-70 before:absolute before:left-0 before:top-29 before:h-4 before:w-40 before:rounded-10 custom-md-2:text-fs-42 down-xl:before:hidden down-xl:pl-0 custom-md-2:leading-lh-52 down-md:text-fs-38 down-md:leading-lh-48 down-md:mt-29 down-md:mb-13 xs:text-fs-29 xs:leading-lh-39 xs:mt-18">I'm PremKumar N.<span class="block text-white">Software Engineer - Full Stack Developer</span></h1>
                     <p class="font-Open-sans mt-15 mb-28 leading-lh-35 down-lg:mt-2.5 down-lg:mb-23 down-lg:text-fs-15 down-lg:leading-lh-30">A full-stack developer handles both the front-end (user interface) and back-end (server-side logic) of web development, using languages like HTML, CSS, JavaScript, and frameworks such as React, Angular, Laravel, or Node.js. They're involved in designing, coding, testing, and deploying web applications.</p>
                     <div id="link-about" class="button cursor-pointer overflow-hidden inline-block leading-lh-1.4 rounded-30 text-ellipsis text-center align-middle select-none transition-all duration-250 ease-in-out uppercase no-underline relative z-10 py-16 pr-70 pl-35 text-fs-15 font-semibold text-white bg-transparent outline-0 before:absolute before:-z-10 before:left-0 before:right-0 before:top-0 before:bottom-0 before:translate-x-full hover:before:translate-x-0 before:transition before:duration-300 before:ease-out">
                        <span class="relative z-20 text-white">more about me</span>
                        <span class="absolute -right-px bottom-0 w-55 h-55 flex items-center justify-center rounded-full text-white text-fs-19 fa fa-arrow-right bg-accent"></span>
                     </div>
                     
                     <!-- Informations Ends -->
                  </div>
               </div>
            </div>
         </div>
         <!-- Home Ends -->
         <!-- About Starts -->
         <div class="page" id="about">
            <div class="w-full">
              <!-- Section Title Starts -->
               <div class="mx-auto w-full relative py-80 text-center xs:px-25 xs:pt-16 xs:pb-14 xs:bg-black-3 xs:border-b xs:border-black-4 xs:fixed xs:left-0 xs:right-0 xs:top-0 xs:z-20">
                  <h2 class="text-fs-56 font-black font-Poppins uppercase text-white m-0 xs:text-fs-26 xs:text-left xs:leading-lh-1.2">
                     about <span class="text-accent">me</span>
                  </h2>
                  <span class="text-fs-110 absolute left-0 right-0 top-1/2 tracking-10 leading-lh-0.7 font-extrabold text-muted -translate-y-1/2 uppercase xs:hidden">resume</span>
               </div>
               <!-- Section Title Ends -->
               <div class="xl:max-w-1140 custom-md-3:max-w-[calc(100%-195px)] lg:max-w-960 md:max-w-720 sm:max-w-540 xs:max-w-full mx-auto">
                  <div class="flex flex-row down-lg:flex-col">
                    <!-- Personal Informations Starts -->
                     <div class="xl:basis-1/2 lg:basis-5/12 down-lg:basis-full">
                        <h3 class="uppercase text-fs-26 xs:text-fs-21 pb-22 text-white font-semibold">
                           personal infos
                        </h3>
                        <img class="hidden xs:block rounded-full border-4 border-solid border-black-3 w-230 h-230 mb-25 mx-auto" src="assets/img/my_self_dark.jpg" alt="">
                        <div class="flex justify-between xs:justify-start font-Open-sans capitalize">
                           <div class="basis-1/2 [&>div]:pb-20 [&>div:last-child]:pb-0 text-fs-15 xs:text-fs-14">
                              <div>
                                 <span class="opacity-80">
                                 Full name :
                                 </span>
                                 <span class="xs:block custom-md-2:block font-semibold">
                                 Premkumar Natarajan
                                 </span>
                              </div>
                            
                              <div>
                                 <span class="opacity-80">
                                 age :
                                 </span>
                                 <span class="xs:block custom-md-2:block font-semibold">
                                 26 years
                                 </span>
                              </div>
                              <div>
                                 <span class="opacity-80">
                                 nationality :
                                 </span>
                                 <span class="xs:block custom-md-2:block font-semibold">
                                 Hindu
                                 </span>
                              </div>
                              <div>
                                 <span class="opacity-80">
                                 freelance :
                                 </span>
                                 <span class="xs:block custom-md-2:block font-semibold">
                                 available
                                 </span>
                              </div>
                           </div>
                           <div class="basis-1/2 [&>div]:pb-20 [&>div:last-child]:pb-0 text-fs-15 xs:text-fs-14">
                              <div>
                                 <span class="opacity-80">
                                 address :
                                 </span>
                                 <span class="xs:block custom-md-2:block font-semibold">
                                 Trichy,Tamilnadu.
                                 </span>
                              </div>
                              <div>
                                 <span class="opacity-80">
                                 phone :
                                 </span>
                                 <span class="xs:block custom-md-2:block font-semibold">
                                 +91 9361169849
                                 </span>
                              </div>
                              <div>
                                 <span class="opacity-80">
                                 email :
                                 </span>
                                 <span class="xs:block custom-md-2:block font-semibold">
                                 premkumarcse1998@gmail.com
                                 </span>
                              </div>
                              <div>
                                 <span class="opacity-80">
                                 skype :
                                 </span>
                                 <span class="xs:block custom-md-2:block font-semibold">
                                  live:.cid.d35e231a53729a
                                 </span>
                              </div>
                              <div>
                                 <span class="opacity-80">
                                 Languages :
                                 </span>
                                 <span class="xs:block custom-md-2:block font-semibold">
                                 Tamil, English,Telugu
                                 </span>
                              </div>
                           </div>
                        </div>
                        <a class="button mt-30 overflow-hidden inline-block leading-lh-1.4 rounded-30 text-ellipsis text-center align-middle select-none transition-all duration-250 ease-in-out uppercase no-underline relative z-10 py-16 pr-70 pl-35 text-fs-15 font-semibold text-white bg-transparent outline-0 before:absolute before:-z-10 before:left-0 before:right-0 before:top-0 before:bottom-0 before:translate-x-full hover:before:translate-x-0 before:transition before:duration-300 before:ease-out" href="assets/resume/premkumar_resume.pdf" download>
                        <span class="relative z-20 text-white">download cv</span>
                        <span class="absolute -right-px bottom-0 w-55 h-55 flex items-center justify-center rounded-full text-white text-fs-19 fa fa-download bg-accent"></span>
                        </a>
                     </div>
                     <!-- Personal Informations Ends -->
                     <!-- Facts Starts -->
                     <div class="xl:basis-1/2 lg:basis-7/12 down-lg:basis-full down-lg:mt-50">
                        <div class="flex down-lg:-mx-15 flex-wrap">
                           <div class="w-1/2 px-15">
                              <div class="pt-20 xs:pt-15 pr-30 xs:pr-20 pb-25 xs:pb-20 pl-40 xs:pl-25 border border-black-3 rounded-5 mb-30 xs:mb-25">
                                 <h3 class="relative inline-block font-bold text-fs-50 xs:text-fs-40 text-accent leading-lh-1.2 after:content-['+'] after:absolute after:-right-24 after:text-fs-33 after:font-light after:top-2">
                                    4
                                 </h3>
                                 <p class="relative xs:text-fs-14 uppercase pl-45 xs:pl-0 xs:before:hidden font-Open-sans font-medium before:absolute before:left-0 before:top-13 before:w-30 before:h-1 before:bg-black-5">
                                    years of <span class="block">experience</span>
                                 </p>
                              </div>
                           </div>
                           <div class="w-1/2 px-15">
                              <div class="pt-20 xs:pt-15 pr-30 xs:pr-20 pb-25 xs:pb-20 pl-40 xs:pl-25 border border-black-3 rounded-5 mb-30 xs:mb-25">
                                 <h3 class="relative inline-block font-bold text-fs-50 xs:text-fs-40 text-accent leading-lh-1.2 after:content-['+'] after:absolute after:-right-24 after:text-fs-33 after:font-light after:top-2">
                                    8
                                 </h3>
                                 <p class="relative xs:text-fs-14 uppercase pl-45 xs:pl-0 xs:before:hidden font-Open-sans font-medium before:absolute before:left-0 before:top-13 before:w-30 before:h-1 before:bg-black-5">
                                    completed <span class="block">projects</span>
                                 </p>
                              </div>
                           </div>
                      <!-- <div class="w-1/2 px-15">
                              <div class="pt-20 xs:pt-15 pr-30 xs:pr-20 pb-25 xs:pb-20 pl-40 xs:pl-25 border border-black-3 rounded-5">
                                 <h3 class="relative inline-block font-bold text-fs-50 xs:text-fs-40 text-accent leading-lh-1.2 after:content-['+'] after:absolute after:-right-24 after:text-fs-33 after:font-light after:top-2">
                                    10
                                 </h3>
                                 <p class="relative xs:text-fs-14 uppercase pl-45 xs:pl-0 xs:before:hidden font-Open-sans font-medium before:absolute before:left-0 before:top-13 before:w-30 before:h-1 before:bg-black-5">
                                    happy <span class="block">customers</span>
                                 </p>
                              </div>
                           </div>
                           <div class="w-1/2 px-15">
                              <div class="pt-20 xs:pt-15 pr-30 xs:pr-20 pb-25 xs:pb-20 pl-40 xs:pl-25 border border-black-3 rounded-5">
                                 <h3 class="relative inline-block font-bold text-fs-50 xs:text-fs-40 text-accent leading-lh-1.2 after:content-['+'] after:absolute after:-right-24 after:text-fs-33 after:font-light after:top-2">
                                    15
                                 </h3>
                                 <p class="relative xs:text-fs-14 uppercase pl-45 xs:pl-0 xs:before:hidden font-Open-sans font-medium before:absolute before:left-0 before:top-13 before:w-30 before:h-1 before:bg-black-5">
                                    awards <span class="block">won</span>
                                 </p>
                              </div>
                           </div> -->
                        </div>
                     </div>
                     <!-- Facts Ends -->
                  </div>
                  <hr class="border-t border-solid border-t-black-3 mx-auto max-w-40prcent mt-70 mb-55">
                  <h3 class="uppercase text-fs-26 xs:text-fs-21 pb-48 text-white font-semibold text-center">
                     my skills
                  </h3>
                  <!-- Skills Starts -->
                  <div class="flex w-full flex-wrap">
                     <div class="w-1/4 mb-48 down-sm:w-1/2 xs:mb-16">
                        <div class="c100 p85 float-none mx-auto bg-black-3">
                           <span>85%</span>
                           <div class="slice">
                              <div class="bar"></div>
                              <div class="fill"></div>
                           </div>
                        </div>
                        <h6 class="uppercase font-Open-sans text-center mt-24 xs:mt-8">html</h6>
                     </div>
                     <div class="w-1/4 mb-48 down-sm:w-1/2 xs:mb-16">
                        <div class="c100 p85 float-none mx-auto bg-black-3">
                           <span>85%</span>
                           <div class="slice">
                              <div class="bar"></div>
                              <div class="fill"></div>
                           </div>
                        </div>
                        <h6 class="uppercase font-Open-sans text-center mt-24 xs:mt-8">css</h6>
                     </div>
                     <div class="w-1/4 mb-48 down-sm:w-1/2 xs:mb-16">
                        <div class="c100 p45 float-none mx-auto bg-black-3">
                           <span>45%</span>
                           <div class="slice">
                              <div class="bar"></div>
                              <div class="fill"></div>
                           </div>
                        </div>
                        <h6 class="uppercase font-Open-sans text-center mt-24 xs:mt-8">sass</h6>
                     </div>
                     <div class="w-1/4 mb-48 down-sm:w-1/2 xs:mb-16">
                        <div class="c100 p80 float-none mx-auto bg-black-3">
                           <span>80%</span>
                           <div class="slice">
                              <div class="bar"></div>
                              <div class="fill"></div>
                           </div>
                        </div>
                        <h6 class="uppercase font-Open-sans text-center mt-24 xs:mt-8">Bootstrap 5</h6>
                     </div>
                     <div class="w-1/4 mb-48 down-sm:w-1/2 xs:mb-16">
                        <div class="c100 p80 float-none mx-auto bg-black-3">
                           <span>80%</span>
                           <div class="slice">
                              <div class="bar"></div>
                              <div class="fill"></div>
                           </div>
                        </div>
                        <h6 class="uppercase font-Open-sans text-center mt-24 xs:mt-8">javascript</h6>
                     </div>
                     <div class="w-1/4 mb-48 down-sm:w-1/2 xs:mb-16">
                        <div class="c100 p90 float-none mx-auto bg-black-3">
                           <span>90%</span>
                           <div class="slice">
                              <div class="bar"></div>
                              <div class="fill"></div>
                           </div>
                        </div>
                        <h6 class="uppercase font-Open-sans text-center mt-24 xs:mt-8">jquery</h6>
                     </div>
                     <div class="w-1/4 mb-48 down-sm:w-1/2 xs:mb-16">
                        <div class="c100 p85 float-none mx-auto bg-black-3">
                           <span>85%</span>
                           <div class="slice">
                              <div class="bar"></div>
                              <div class="fill"></div>
                           </div>
                        </div>
                        <h6 class="uppercase font-Open-sans text-center mt-24 xs:mt-8">php</h6>
                     </div>
                     <div class="w-1/4 mb-48 down-sm:w-1/2 xs:mb-16">
                        <div class="c100 p95 float-none mx-auto bg-black-3">
                           <span>95%</span>
                           <div class="slice">
                              <div class="bar"></div>
                              <div class="fill"></div>
                           </div>
                        </div>
                        <h6 class="uppercase font-Open-sans text-center mt-24 xs:mt-8">Laravel</h6>
                     </div>
                     <div class="w-1/4 mb-48 down-sm:w-1/2 xs:mb-16">
                        <div class="c100 p80 float-none mx-auto bg-black-3">
                           <span>80%</span>
                           <div class="slice">
                              <div class="bar"></div>
                              <div class="fill"></div>
                           </div>
                        </div>
                        <h6 class="uppercase font-Open-sans text-center mt-24 xs:mt-8">Restful Api</h6>
                     </div>
                     <div class="w-1/4 mb-48 down-sm:w-1/2 xs:mb-16">
                        <div class="c100 p95 float-none mx-auto bg-black-3">
                           <span>95%</span>
                           <div class="slice">
                              <div class="bar"></div>
                              <div class="fill"></div>
                           </div>
                        </div>
                        <h6 class="uppercase font-Open-sans text-center mt-24 xs:mt-8">Postman Api Tool</h6>
                     </div>
                     <div class="w-1/4 mb-48 down-sm:w-1/2 xs:mb-16">
                        <div class="c100 p60 float-none mx-auto bg-black-3">
                           <span>60%</span>
                           <div class="slice">
                              <div class="bar"></div>
                              <div class="fill"></div>
                           </div>
                        </div>
                        <h6 class="uppercase font-Open-sans text-center mt-24 xs:mt-8">angular</h6>
                     </div>
                     <div class="w-1/4 mb-48 down-sm:w-1/2 xs:mb-16">
                        <div class="c100 p45 float-none mx-auto bg-black-3">
                           <span>45%</span>
                           <div class="slice">
                              <div class="bar"></div>
                              <div class="fill"></div>
                           </div>
                        </div>
                        <h6 class="uppercase font-Open-sans text-center mt-24 xs:mt-8">react</h6>
                     </div>
                  </div>
                  <!-- Skills Ends -->
                  <hr class="border-t border-solid border-t-black-3 mx-auto max-w-40prcent mt-35 mb-55">
                  <h3 class="uppercase text-fs-26 xs:text-fs-21 pb-48 text-white font-semibold text-center">
                     experience & education
                  </h3>
                  <!-- Resume Starts -->
                  <div class="flex down-sm:flex-col from-sm:mb-40">
                    <!-- Experience Starts -->
                     <div class="w-1/2 down-sm:w-full">
                        <ul>
                           <li class="relative pr-20 pl-60 mb-50 after:absolute after:top-0 after:left-20 after:bg-black-4 after:w-1 after:h-full">
                              <div class="bg-accent w-40 h-40 absolute left-0 leading-lh-40 text-center z-10 rounded-full text-white">
                                 <i class="fa fa-briefcase"></i>
                              </div>
                              <span class="text-white text-fs-12 py-1 px-10 inline-block mb-12 rounded-20 font-semibold bg-black-3 opacity-80 font-Open-sans uppercase">
                              2024 - Present
                              </span>
                              <h5 class="uppercase text-fs-18 mt-7 mb-10">
                                 software engineer
                                 <span class="opacity-80 font-semibold text-fs-15 relative pl-26 font-Open-sans before:absolute before:w-10 before:h-2 before:bg-white before:left-7 before:top-9 before:opacity-80">
                                 gi tech i game india private limited
                                 </span>
                              </h5>
                              <p class="font-Open-sans text-light-grey text-fs-14">
                                Impressive! With 2 years of Laravel experience and 5 projects under your belt, you've likely mastered PHP, Laravel's MVC, Eloquent ORM, and integrating front-end frameworks like Angular or React. 
                              </p>
                           </li>
                           <li class="relative pr-20 pl-60 mb-50 after:absolute after:top-0 after:left-20 after:bg-black-4 after:w-1 after:h-full">
                              <div class="bg-accent w-40 h-40 absolute left-0 leading-lh-40 text-center z-10 rounded-full text-white">
                                 <i class="fa fa-briefcase"></i>
                              </div>
                              <span class="text-white text-fs-12 py-1 px-10 inline-block mb-12 rounded-20 font-semibold bg-black-3 opacity-80 font-Open-sans uppercase">
                              2021 - 2022
                              </span>
                              <h5 class="uppercase text-fs-18 mt-7 mb-10">
                                 Junior Software Engineer
                                 <span class="opacity-80 font-semibold text-fs-15 relative pl-26 font-Open-sans before:absolute before:w-10 before:h-2 before:bg-white before:left-7 before:top-9 before:opacity-80">
                                 Qr Solutions India Pvt ltd.-
                                 </span>
                              </h5>
                              <p class="font-Open-sans text-light-grey text-fs-14">
                              I'm a full-stack developer with expertise in Laravel, Angular, and PHP. I have a year of hands-on experience in building dynamic web applications, managing databases, and creating engaging user interfaces. I'm passionate about solving complex problems and delivering high-quality solutions 
                              </p>
                           </li>
                           <li class="relative pr-20 pl-60 mb-50 after:absolute after:top-0 after:left-20 after:bg-black-4 after:w-1 after:h-full">
                              <div class="bg-accent w-40 h-40 absolute left-0 leading-lh-40 text-center z-10 rounded-full text-white">
                                 <i class="fa fa-briefcase"></i>
                              </div>
                              <span class="text-white text-fs-12 py-1 px-10 inline-block mb-12 rounded-20 font-semibold bg-black-3 opacity-80 font-Open-sans uppercase">
                              02/2020 - 07/2020
                              </span>
                              <h5 class="uppercase text-fs-18 mt-7 mb-10">
                              Customer Support Associative
                                 <span class="opacity-80 font-semibold text-fs-15 relative pl-26 font-Open-sans before:absolute before:w-10 before:h-2 before:bg-white before:left-7 before:top-9 before:opacity-80">
                                 Tech Mahindra Pvt Ltd –Chennai
                                 </span>
                              </h5>
                              <p class="font-Open-sans text-light-grey text-fs-14">
                                 I'm a customer support associate with a focus on providing excellent service and solving problems efficiently. I have experience in handling customer inquiries, resolving issues, and ensuring customer satisfaction. 
                              </p>
                           </li>
                        </ul>
                     </div>
                     <!-- Experience Ends -->
                     <!-- Education Starts -->
                     <div class="w-1/2 down-sm:w-full">
                        <ul>
                           <li class="relative pr-20 pl-60 mb-50 after:absolute after:top-0 after:left-20 after:bg-black-4 after:w-1 after:h-full">
                              <div class="bg-accent w-40 h-40 absolute left-0 leading-lh-40 text-center z-10 rounded-full text-white">
                                 <i class="fa fa-graduation-cap"></i>
                              </div>
                              <span class="text-white text-fs-12 py-1 px-10 inline-block mb-12 rounded-20 font-semibold bg-black-3 opacity-80 font-Open-sans uppercase">
                              2019
                              </span>
                              <h5 class="uppercase text-fs-18 mt-7 mb-10">
                                Computer Science And Engineering
                                 <span class="opacity-80 font-semibold text-fs-15 relative pl-26 font-Open-sans before:absolute before:w-10 before:h-2 before:bg-white before:left-7 before:top-9 before:opacity-80">
                                 Anna Univercity
                                 </span>
                              </h5>
                              <p class="font-Open-sans text-light-grey text-fs-14">
                              Indra Ganesan College Of Engineering
                              </p>
                           </li>
                           <li class="relative pr-20 pl-60 mb-50 after:absolute after:top-0 after:left-20 after:bg-black-4 after:w-1 after:h-full">
                              <div class="bg-accent w-40 h-40 absolute left-0 leading-lh-40 text-center z-10 rounded-full text-white">
                                 <i class="fa fa-graduation-cap"></i>
                              </div>
                              <span class="text-white text-fs-12 py-1 px-10 inline-block mb-12 rounded-20 font-semibold bg-black-3 opacity-80 font-Open-sans uppercase">
                              2015
                              </span>
                              <h5 class="uppercase text-fs-18 mt-7 mb-10">
                                 HSC
                                 <span class="opacity-80 font-semibold text-fs-15 relative pl-26 font-Open-sans before:absolute before:w-10 before:h-2 before:bg-white before:left-7 before:top-9 before:opacity-80">
                                  Thuvakudi
                                 </span>
                              </h5>
                              <p class="font-Open-sans text-light-grey text-fs-14">
                              Government Higher secondary school - Trichy. 
                              </p>
                           </li>
                           <li class="relative pr-20 pl-60 mb-50 after:absolute after:top-0 after:left-20 after:bg-black-4 after:w-1 after:h-full">
                              <div class="bg-accent w-40 h-40 absolute left-0 leading-lh-40 text-center z-10 rounded-full text-white">
                                 <i class="fa fa-graduation-cap"></i>
                              </div>
                              <span class="text-white text-fs-12 py-1 px-10 inline-block mb-12 rounded-20 font-semibold bg-black-3 opacity-80 font-Open-sans uppercase">
                              2013
                              </span>
                              <h5 class="uppercase text-fs-18 mt-7 mb-10">
                                 SSLC
                                 <span class="opacity-80 font-semibold text-fs-15 relative pl-26 font-Open-sans before:absolute before:w-10 before:h-2 before:bg-white before:left-7 before:top-9 before:opacity-80">
                                 Thuvakudi
                                 </span>
                              </h5>
                              <p class="font-Open-sans text-light-grey text-fs-14">
                                  Government Higher secondary school - Trichy.
                              </p>
                           </li>
                        </ul>
                        
                     </div>
                     <!-- Education Ends -->
                    
                  </div>
                  <!-- Resume Ends -->
               </div>
            </div>
         </div>
         <!-- About Ends -->
         <!-- Portfolio Starts -->
         <div class="page" id="portfolio">
            <div class="w-full">
              <!-- Section Title Starts -->
               <div class="mx-auto w-full relative py-80 text-center xs:px-25 xs:pt-16 xs:pb-14 xs:bg-black-3 xs:border-b xs:border-black-4 xs:fixed xs:left-0 xs:right-0 xs:top-0 xs:z-20">
                  <h2 class="text-fs-56 font-black font-Poppins uppercase text-white m-0 xs:text-fs-26 xs:text-left xs:leading-lh-1.2">
                     my <span class="text-accent">portfolio</span>
                  </h2>
                  <span class="text-fs-110 absolute left-0 right-0 top-1/2 tracking-10 leading-lh-0.7 font-extrabold text-muted -translate-y-1/2 uppercase xs:hidden">works</span>
               </div>
               <!-- Section Title Ends -->
               <!-- Portfolio Items Starts -->
               <div class="-mt-15 pb-60 xs:pb-20 portfolio">
                  <div id="grid-gallery" class="xl:max-w-1140 custom-md-3:max-w-[calc(100%-195px)] md:max-w-720 sm:max-w-540 xs:max-w-full mx-auto">
                      <!-- Portfolio Grid Starts -->
                     <div class="grid-wrap mx-auto mb-25">
                        <ul class="gridlist">
                          <!-- Portfolio Grid Item Starts -->
                           <li class="w-1/3 down-lg:w-1/2 xs:w-full float-left cursor-pointer p-15 xs:px-0">
                              <figure class="transition duration-300 rounded-5 relative overflow-hidden">
                                 <img class="block relative w-full rounded-5 transition duration-300" src="assets/img/projects/Appretail.png" alt="">
                                 <div class="absolute w-full h-full flex items-center justify-center bg-accent">
                                    <span class="uppercase text-fs-18 text-white">
                                    Appretail
                                    </span>
                                 </div>
                              </figure>
                           </li>
                           <!-- Portfolio Grid Item Ends -->
                             <!-- Portfolio Grid Item Starts -->
                             <li class="w-1/3 down-lg:w-1/2 xs:w-full float-left cursor-pointer p-15 xs:px-0">
                              <figure class="transition duration-300 rounded-5 relative overflow-hidden">
                                 <img class="block relative w-full rounded-5 transition duration-300" src="assets/img/projects/appRevenue-Email-Marketing-Automation-Tool.png" alt="">
                                 <div class="absolute w-full h-full flex items-center justify-center bg-accent">
                                    <span class="uppercase text-fs-18 tex-white">
                                       AppRevenue
                                    </span>
                                 </div>
                              </figure>
                           </li>
                           <!-- Portfolio Grid Item Ends -->
                           <!-- Portfolio Grid Item Starts -->
                           <li class="w-1/3 down-lg:w-1/2 xs:w-full float-left cursor-pointer p-15 xs:px-0">
                              <figure class="transition duration-300 rounded-5 relative overflow-hidden">
                                 <img class="block relative w-full rounded-5 transition duration-300" src="assets/img/projects/GoFleet.png" alt="">
                                 <div class="absolute w-full h-full flex items-center justify-center bg-accent">
                                    <span class="uppercase text-fs-18 tex-white">
                                       GoFleet
                                    </span>
                                 </div>
                              </figure>
                           </li>
                           <!-- Portfolio Grid Item Ends -->
                           <!-- Portfolio Grid Item Starts -->
                           <li class="w-1/3 down-lg:w-1/2 xs:w-full float-left cursor-pointer p-15 xs:px-0">
                              <figure class="transition duration-300 rounded-5 relative overflow-hidden">
                                 <img class="block relative w-full rounded-5 transition duration-300" src="assets/img/projects/cares.png" alt="">
                                 <div class="absolute w-full h-full flex items-center justify-center bg-accent">
                                    <span class="uppercase text-fs-18 tex-white">
                                      Cares ICICI
                                    </span>
                                 </div>
                              </figure>
                           </li>
                           <!-- Portfolio Grid Item Ends -->
                           <!-- Portfolio Grid Item Starts -->
                           <li class="w-1/3 down-lg:w-1/2 xs:w-full float-left cursor-pointer p-15 xs:px-0">
                              <figure class="transition duration-300 rounded-5 relative overflow-hidden">
                                 <img class="block relative w-full rounded-5 transition duration-300" src="assets/img/projects/AiExam.png" alt="">
                                 <div class="absolute w-full h-full flex items-center justify-center bg-accent">
                                    <span class="uppercase text-fs-18 tex-white">
                                        Ai Exam
                                    </span>
                                 </div>
                              </figure>
                           </li>
                           <!-- Portfolio Grid Item Ends -->
                           <!-- Portfolio Grid Item Starts -->
                           <li class="w-1/3 down-lg:w-1/2 xs:w-full float-left cursor-pointer p-15 xs:px-0">
                              <figure class="transition duration-300 rounded-5 relative overflow-hidden">
                                 <img class="block relative w-full rounded-5 transition duration-300" src="assets/img/projects/armsofttech.png" alt="">
                                 <div class="absolute w-full h-full flex items-center justify-center bg-accent">
                                    <span class="uppercase text-fs-18 tex-white">
                                    Armsoft-tech
                                    </span>
                                 </div>
                              </figure>
                           </li>
                           <!-- Portfolio Grid Item Ends -->
                           <!-- Portfolio Grid Item Starts -->
                           <li class="w-1/3 down-lg:w-1/2 xs:w-full float-left cursor-pointer p-15 xs:px-0">
                              <figure class="transition duration-300 rounded-5 relative overflow-hidden">
                                 <img class="block relative w-full rounded-5 transition duration-300" src="assets/img/projects/DB-Report-Manager.png" alt="">
                                 <div class="absolute w-full h-full flex items-center justify-center bg-accent">
                                    <span class="uppercase text-fs-18 tex-white">
                                    DB Report Manager
                                    </span>
                                 </div>
                              </figure>
                           </li>
                           <!-- Portfolio Grid Item Ends -->
                           <!-- Portfolio Grid Item Starts -->
                           <li class="w-1/3 down-lg:w-1/2 xs:w-full float-left cursor-pointer p-15 xs:px-0">
                              <figure class="transition duration-300 rounded-5 relative overflow-hidden">
                                 <img class="block relative w-full rounded-5 transition duration-300" src="assets/img/projects/Soulmatez.png" alt="">
                                 <div class="absolute w-full h-full flex items-center justify-center bg-accent">
                                    <span class="uppercase text-fs-18 tex-white">
                                    SoulMatez
                                    </span>
                                 </div>
                              </figure>
                           </li>
                           <!-- Portfolio Grid Item Ends -->
                           <!-- Portfolio Grid Item Starts -->
                           <li class="w-1/3 down-lg:w-1/2 xs:w-full float-left cursor-pointer p-15 xs:px-0">
                              <figure class="transition duration-300 rounded-5 relative overflow-hidden">
                                 <img class="block relative w-full rounded-5 transition duration-300" src="assets/img/projects/EDUPOINT.png" alt="">
                                 <div class="absolute w-full h-full flex items-center justify-center bg-accent">
                                    <span class="uppercase text-fs-18 tex-white">
                                      EDUPOINT
                                    </span>
                                 </div>
                              </figure>
                           </li>
                           <!-- Portfolio Grid Item Ends -->
                         
                        </ul>
                     </div>
                     <!-- Portfolio Grid Ends -->
                     <!-- Portfolio Details Starts -->
                     <div class="slideshow">
                        <ul>
                           <!-- Portfolio Item Detail Starts -->
                           <li class="w-660 absolute left-1/2 top-1/2 -mt-280 -ml-330 invisible">
                              <figure class="w-full h-full bg-black-3 p-30 overflow-auto rounded-10">
                                 <!-- Project Details Starts -->
                                 <figcaption class="mb-15">
                                    <h3 class="uppercase leading-lh-1.2 text-accent pt-10 pb-28 font-bold text-center text-fs-33">Appretail Project Details</h3>
                                    <div class="flex flex-wrap font-Open-sans text-fs-15">
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-file-text-o pr-8"></i><span class="project-label">Project </span>: <span class="font-semibold">Caravon Showroom</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-user-o pr-8"></i><span class="project-label">Client </span>: <span class="font-semibold">Von Bibra -Australia</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-code pr-8"></i><span class="project-label">Technologies </span>: <span class="font-semibold">Angular,Laravel</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-external-link pr-8"></i><span class="project-label">Preview </span>: <span class="font-semibold"><a class="underline text-accent" href="https://vonbibra.appretail.io/login" target="_blank">https://vonbibra.appretail.io/</a></span>
                                       </div>
                                    </div>
                                 </figcaption>
                                 <!-- Project Details Ends -->
                                 <!-- Main Project Content Starts -->
                                 <img class="block w-full rounded-5" src="assets/img/projects/Appretail.png" alt="Portolio Image">
                                 <!-- Main Project Content Ends -->
                              </figure>
                           </li>
                           <!-- Portfolio Item Detail Ends -->

                            <!-- Portfolio Item Detail Starts -->
                            <li class="w-660 absolute left-1/2 top-1/2 -mt-280 -ml-330 invisible">
                              <figure class="w-full h-full bg-black-3 p-30 overflow-auto rounded-10">
                                 <!-- Project Details Starts -->
                                 <figcaption class="mb-15">
                                    <h3 class="uppercase leading-lh-1.2 text-accent pt-10 pb-28 font-bold text-center text-fs-33">Apprevenue Project Details</h3>
                                    <div class="flex flex-wrap font-Open-sans text-fs-15">
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-file-text-o pr-8"></i><span class="project-label">Project </span>: <span class="font-semibold">Email-Marketing Automation</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-user-o pr-8"></i><span class="project-label">Client </span>: <span class="font-semibold">Von Bibra -Australia</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-code pr-8"></i><span class="project-label">Technologies </span>: <span class="font-semibold">Angular,Laravel</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-external-link pr-8"></i><span class="project-label">Preview </span>: <span class="font-semibold"><a class="underline text-accent" href="https://apprevenue.io/" target="_blank">https://apprevenue.io/</a></span>
                                       </div>
                                    </div>
                                 </figcaption>
                                 <!-- Project Details Ends -->
                                 <!-- Main Project Content Starts -->
                                 <img class="block w-full rounded-5" src="assets/img/projects/appRevenue-Email-Marketing-Automation-Tool.png" alt="Portolio Image">
                                 <!-- Main Project Content Ends -->
                              </figure>
                           </li>
                           <!-- Portfolio Item Detail Ends -->

                           <!-- Portfolio Item Detail Starts -->
                           <li class="w-660 absolute left-1/2 top-1/2 -mt-280 -ml-330 invisible">
                               <figure class="w-full h-full bg-black-3 p-30 overflow-auto rounded-10">
                                 <!-- Project Details Starts -->
                                 <figcaption class="mb-15">
                                    <h3 class="uppercase leading-lh-1.2 text-accent pt-10 pb-28 font-bold text-center text-fs-33">Fleet Project Details</h3>
                                    <div class="flex flex-wrap font-Open-sans text-fs-15">
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-file-text-o pr-8"></i><span class="project-label">Project </span>: <span class="font-semibold">Fleet Management</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-user-o pr-8"></i><span class="project-label">Client </span>: <span class="font-semibold">Hassana Nuha Transport.</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-code pr-8"></i><span class="project-label">Technologies </span>: <span class="font-semibold">Bootstrap 5,Laravel</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-external-link pr-8"></i><span class="project-label">Preview </span>: <span class="font-semibold"><a class="underline text-accent" href="http://gofleet.in/dashboard-login" target="_blank">http://gofleet.in</a></span>
                                       </div>
                                    </div>
                                 </figcaption>
                                 <!-- Project Details Ends -->
                                 <!-- Main Project Content Starts -->
                                 <img class="block w-full rounded-5" src="assets/img/projects/GoFleet.png" alt="Portolio Image">
                                 <!-- Main Project Content Ends -->
                              </figure>
                           </li>
                           <!-- Portfolio Item Detail Ends -->
                           <!-- Portfolio Item Detail Starts -->
                           <li class="w-660 absolute left-1/2 top-1/2 -mt-280 -ml-330 invisible">
                               <figure class="w-full h-full bg-black-3 p-30 overflow-auto rounded-10">
                                 <!-- Project Details Starts -->
                                 <figcaption class="mb-15">
                                    <h3 class="uppercase leading-lh-1.2 text-accent pt-10 pb-28 font-bold text-center text-fs-33">Cares Project Details</h3>
                                    <div class="flex flex-wrap font-Open-sans text-fs-15">
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-file-text-o pr-8"></i><span class="project-label">Project </span>: <span class="font-semibold">Cares Management</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-user-o pr-8"></i><span class="project-label">Client </span>: <span class="font-semibold">ICICI Bank.</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-code pr-8"></i><span class="project-label">Technologies </span>: <span class="font-semibold">Bootstrap 5,Laravel</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-external-link pr-8"></i><span class="project-label">Preview </span>: <span class="font-semibold"><a class="underline text-accent" href="https://cares.armsoft-tech.com/login" target="_blank">https://cares.armsoft-tech.com</a></span>
                                       </div>
                                    </div>
                                 </figcaption>
                                 <!-- Project Details Ends -->
                                 <!-- Main Project Content Starts -->
                                 <img class="block w-full rounded-5" src="assets/img/projects/cares.png" alt="Portolio Image">
                                 <!-- Main Project Content Ends -->
                              </figure>
                           </li>
                           <!-- Portfolio Item Detail Ends -->
                           <!-- Portfolio Item Detail Starts -->
                           <li class="w-660 absolute left-1/2 top-1/2 -mt-280 -ml-330 invisible">
                              <figure class="w-full h-full bg-black-3 p-30 overflow-auto rounded-10">
                                 <!-- Project Details Starts -->
                                 <figcaption class="mb-15">
                                    <h3 class="uppercase leading-lh-1.2 text-accent pt-10 pb-28 font-bold text-center text-fs-33">AI Exam Project Details</h3>
                                    <div class="flex flex-wrap font-Open-sans text-fs-15">
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-file-text-o pr-8"></i><span class="project-label">Project </span>: <span class="font-semibold">AI-Driven Question Gen</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-user-o pr-8"></i><span class="project-label">Client </span>: <span class="font-semibold">GiTech Gaming</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-code pr-8"></i><span class="project-label">Technology </span>: <span class="font-semibold">Bootstrap 5,Laravel</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-external-link pr-8"></i><span class="project-label">Preview </span>: <span class="font-semibold"><a class="underline text-accent" href="http://182.19.57.152:8008/" target="_blank">Ai Exam</a></span>
                                       </div>
                                    </div>
                                 </figcaption>
                                 <!-- Project Details Ends -->
                                 <!-- Main Project Content Starts -->
                                 <img class="block w-full rounded-5" src="assets/img/projects/AiExam.png" alt="Portolio Image">
                                 <!-- Main Project Content Ends -->
                              </figure>
                           </li>
                           <!-- Portfolio Item Detail Ends -->
                           <!-- Portfolio Item Detail Starts -->
                           <li class="w-660 absolute left-1/2 top-1/2 -mt-280 -ml-330 invisible">
                              <figure class="w-full h-full bg-black-3 p-30 overflow-auto rounded-10">
                                 <!-- Project Details Starts -->
                                 <figcaption class="mb-15">
                                    <h3 class="uppercase leading-lh-1.2 text-accent pt-10 pb-28 font-bold text-center text-fs-33">Armsoft-tech Project Details</h3>
                                    <div class="flex flex-wrap font-Open-sans text-fs-15">
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-file-text-o pr-8"></i><span class="project-label">Project </span>: <span class="font-semibold">Company site</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-user-o pr-8"></i><span class="project-label">Client </span>: <span class="font-semibold">Armsoft-tech</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-code pr-8"></i><span class="project-label">Technologies </span>: <span class="font-semibold">HTML, CSS, Javascript,Laravel</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-external-link pr-8"></i><span class="project-label">Preview </span>: <span class="font-semibold"><a class="underline text-accent" href="https://www.armsoft-tech.com/" target="_blank">https://www.armsoft-tech.com</a></span>
                                       </div>
                                    </div>
                                 </figcaption>
                                 <!-- Project Details Ends -->
                                 <!-- Main Project Content Starts -->
                                 <img class="block w-full rounded-5" src="assets/img/projects/armsofttech.png" alt="Portolio Image">
                                 <!-- Main Project Content Ends -->
                              </figure>
                           </li>
                           <!-- Portfolio Item Detail Ends -->
                           <!-- Portfolio Item Detail Starts -->
                           <li class="w-660 absolute left-1/2 top-1/2 -mt-280 -ml-330 invisible">
                              <figure class="w-full h-full bg-black-3 p-30 overflow-auto rounded-10">
                                 <!-- Project Details Starts -->
                                 <figcaption class="mb-15">
                                    <h3 class="uppercase leading-lh-1.2 text-accent pt-10 pb-28 font-bold text-center text-fs-33">Data Analysis Project Details</h3>
                                    <div class="flex flex-wrap font-Open-sans text-fs-15">
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-file-text-o pr-8"></i><span class="project-label">Project </span>: <span class="font-semibold">DB Report Manager</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-user-o pr-8"></i><span class="project-label">Client </span>: <span class="font-semibold">Gitech Games</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-code pr-8"></i><span class="project-label">Technologies </span>: <span class="font-semibold">Bootstrap5, Laravel</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-external-link pr-8"></i><span class="project-label">Preview </span>: <span class="font-semibold"><a class="underline text-accent" href="http://220.225.104.133:8080/db_report_manager/public/login" target="_blank">DB Report Manager</a></span>
                                       </div>
                                    </div>
                                 </figcaption>
                                 <!-- Project Details Ends -->
                                 <!-- Main Project Content Starts -->
                                 <img class="block w-full rounded-5" src="assets/img/projects/DB-Report-Manager.png" alt="Portolio Image">
                                 <!-- Main Project Content Ends -->
                              </figure>
                           </li>
                           <!-- Portfolio Item Detail Ends -->
                           <!-- Portfolio Item Detail Starts -->
                           <li class="w-660 absolute left-1/2 top-1/2 -mt-280 -ml-330 invisible">
                              <figure class="w-full h-full bg-black-3 p-30 overflow-auto rounded-10">
                                 <!-- Project Details Starts -->
                                 <figcaption class="mb-15">
                                    <h3 class="uppercase leading-lh-1.2 text-accent pt-10 pb-28 font-bold text-center text-fs-33">Dating App</h3>
                                    <div class="flex flex-wrap font-Open-sans text-fs-15">
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-file-text-o pr-8"></i><span class="project-label">Project </span>: <span class="font-semibold">Soulmatez</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-user-o pr-8"></i><span class="project-label">Client </span>: <span class="font-semibold">Gitech</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-code pr-8"></i><span class="project-label">Technologies </span>: <span class="font-semibold">Bootstrap5, Javascript,Laravel</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-external-link pr-8"></i><span class="project-label">Preview </span>: <span class="font-semibold"><a class="underline text-accent" href="http://192.168.1.68:8007/user/login" target="_blank">Soulmatez</a></span>
                                       </div>
                                    </div>
                                 </figcaption>
                                 <!-- Project Details Ends -->
                                 <!-- Main Project Content Starts -->
                                 <img class="block w-full rounded-5" src="assets/img/projects/Soulmatez.png" alt="Portolio Image">
                                 <!-- Main Project Content Ends -->
                              </figure>
                           </li>
                           <!-- Portfolio Item Detail Ends -->
                           <!-- Portfolio Item Detail Starts -->
                           <li class="w-660 absolute left-1/2 top-1/2 -mt-280 -ml-330 invisible">
                              <figure class="w-full h-full bg-black-3 p-30 overflow-auto rounded-10">
                                 <!-- Project Details Starts -->
                                 <figcaption class="mb-15">
                                    <h3 class="uppercase leading-lh-1.2 text-accent pt-10 pb-28 font-bold text-center text-fs-33">Education Management</h3>
                                    <div class="flex flex-wrap font-Open-sans text-fs-15">
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-file-text-o pr-8"></i><span class="project-label">Project </span>: <span class="font-semibold">EDUPOINT</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-user-o pr-8"></i><span class="project-label">Client </span>: <span class="font-semibold">Gitech</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-code pr-8"></i><span class="project-label">Technologies </span>: <span class="font-semibold">Bootstrap5, Javascript,Laravel</span>
                                       </div>
                                       <div class="w-1/2 xs:w-full mb-8">
                                          <i class="fa fa-external-link pr-8"></i><span class="project-label">Preview </span>: <span class="font-semibold"><a class="underline text-accent" href="http://192.168.1.68:8009/login" target="_blank">EDUPOINT</a></span>
                                       </div>
                                    </div>
                                 </figcaption>
                                 <!-- Project Details Ends -->
                                 <!-- Main Project Content Starts -->
                                 <img class="block w-full rounded-5" src="assets/img/projects/EDUPOINT.png" alt="Portolio Image">
                                 <!-- Main Project Content Ends -->
                              </figure>
                           </li>
                           <!-- Portfolio Item Detail Ends -->
                         
                        </ul>
                        <!-- Portfolio Navigation Starts -->
                        <nav class="down-lg:fixed down-lg:top-0 down-lg:w-full down-lg:h-102 down-lg:bg-black-3 down-lg:z-10 down-lg:border-b down-lg:border-solid down-lg:border-b-black-4 xs:h-62">
                           <span class="nav-prev fixed cursor-pointer py-200 px-30 top-1/2 down-lg:top-35 from-lg:-translate-y-1/2 from-lg:left-0 down-lg:left-30 xs:w-20 xs:top-21"><img class="block" src="assets/img/projects/navigation/left-arrow.png" alt="previous"></span>
                           <span class="nav-next fixed cursor-pointer py-200 px-30 top-1/2 down-lg:top-35 from-lg:-translate-y-1/2 from-lg:right-0 down-lg:right-30 xs:w-20 xs:top-21"><img class="block" src="assets/img/projects/navigation/right-arrow.png" alt="next"></span>
                           <span class="nav-close fixed cursor-pointer from-lg:top-30 down-lg:top-35 from-lg:right-30 down-lg:left-0 down-lg:right-0 down-lg:mx-auto down-lg:block down-lg:w-32 xs:w-20 xs:top-21"><img class="block" src="assets/img/projects/navigation/close-button.png" alt="close"> </span>
                        </nav>
                        <!-- Portfolio Navigation Ends -->
                     </div>
                     <!-- Portfolio Details Ends -->
                  </div>
               </div>
               <!-- Portfolio Items Ends -->
            </div>
         </div>
         <!-- Portfolio Ends -->
         <!-- Contact Starts -->
         <div class="page" id="contact">
            <div class="w-full">
              <!-- Section Title Starts -->
               <div class="mx-auto w-full relative py-80 text-center xs:px-25 xs:pt-16 xs:pb-14 xs:bg-black-3 xs:border-b xs:border-black-4 xs:fixed xs:left-0 xs:right-0 xs:top-0 xs:z-20">
                  <h2 class="text-fs-56 font-black font-Poppins uppercase text-white m-0 xs:text-fs-26 xs:text-left xs:leading-lh-1.2">
                     get in <span class="text-accent">touch</span>
                  </h2>
                  <span class="text-fs-110 absolute left-0 right-0 top-1/2 tracking-10 leading-lh-0.7 font-extrabold text-muted -translate-y-1/2 uppercase xs:hidden">contact</span>
               </div>
               <!-- Section Title Ends -->
               <div class="xl:max-w-1140 custom-md-3:max-w-[calc(100%-195px)] lg:max-w-960 md:max-w-720 sm:max-w-540 xs:max-w-full mx-auto">
                  <div class="flex down-lg:flex-col">
                    <!-- Contact Details Starts -->
                     <div class="w-1/3 down-lg:w-full px-16 xs:px-0">
                        <h3 class="text-fs-26 xs:text-fs-21 mb-16 font-semibold uppercase">don't be shy !</h3>
                        <p class="mb-16 font-Open-sans text-fs-15 xs:text-fs-14">
                           Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.
                        </p>
                        <div class="relative font-Open-sans font-semibold pl-50 pt-5 leading-lh-21 text-fs-15 xs:text-fs-14 mb-16">
                           <i class="fa fa-envelope-open absolute left-0 top-10 text-fs-33 text-accent"></i>
                           <span class="block opacity-80 uppercase font-normal">
                           mail me
                           </span>
                           premkumarcse1998@gmail.com
                        </div>
                        <div class="relative font-Open-sans font-semibold pl-50 pt-5 leading-lh-21 text-fs-15 xs:text-fs-14 mb-16">
                           <i class="fa fa-phone-square absolute left-0 top-10 text-fs-39 text-accent"></i>
                           <span class="block opacity-80 uppercase font-normal">
                           call me
                           </span>
                           +91 9361169849
                        </div>
                        <ul class="-ml-5 pt-4 mb-48">
                           <li class="inline-block">
                              <a href="https://www.linkedin.com/in/premkumar-natarajan-681122173/" target="_blank" class="social-item inline-block h-40 w-40 leading-lh-42 text-center text-white transition duration-300 text-fs-17 mx-6 bg-black-2 rounded-full">
                              <i class="fa fa-linkedin"></i>
                              </a>
                           </li>
                           <li class="inline-block">
                              <a href="#" class="social-item inline-block h-40 w-40 leading-lh-42 text-center text-white transition duration-300 text-fs-17 mx-6 bg-black-2 rounded-full">
                              <i class="fa fa-twitter"></i>
                              </a>
                           </li>
                           <li class="inline-block">
                              <a href="#" class="social-item inline-block h-40 w-40 leading-lh-42 text-center text-white transition duration-300 text-fs-17 mx-6 bg-black-2 rounded-full">
                              <i class="fa fa-youtube"></i>
                              </a>
                           </li>
                           <li class="inline-block">
                              <a href="#" class="social-item inline-block h-40 w-40 leading-lh-42 text-center text-white transition duration-300 text-fs-17 mx-6 bg-black-2 rounded-full">
                              <i class="fa fa-dribbble"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <!-- Contact Details Ends -->
                     <div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
  
                     <!-- Contact Form Starts -->
                     <div class="w-2/3 down-lg:w-full px-16 down-lg:px-0">
                        <form id="contactform" class="contactform" method="post" action="https://slimhamdi.net/tunis-tailwind/demos/assets/php/process-form.php">
                           @csrf
                           <div class="flex flex-wrap font-normal">
                              <div class="from-sm:w-1/3 down-sm:w-full px-16 xs:px-0">
                                 <input autocomplete="off" class="w-full bg-black-3 text-fs-15 text-white border border-solid border-black py-11 px-26 mb-30 rounded-30 outline-0 transition duration-300 placeholder:text-placeholder field-form" type="text" name="name" placeholder="YOUR NAME">
                              </div>
                              <div class="from-sm:w-1/3 down-sm:w-full px-16 xs:px-0">
                                 <input autocomplete="off" class="w-full bg-black-3 text-fs-15 text-white border border-solid border-black py-11 px-26 mb-30 rounded-30 outline-0 transition duration-300 placeholder:text-placeholder field-form" type="email" name="email" placeholder="YOUR EMAIL">
                              </div>
                              <div class="from-sm:w-1/3 down-sm:w-full px-16 xs:px-0">
                                 <input autocomplete="off" class="w-full bg-black-3 text-fs-15 text-white border border-solid border-black py-11 px-26 mb-30 rounded-30 outline-0 transition duration-300 placeholder:text-placeholder field-form" type="text" name="subject" placeholder="YOUR SUBJECT">
                              </div>
                              <div class="w-full px-16 xs:px-0">
                                 <textarea  class="bg-black-3 w-full text-white border border-solid border-black h-160 py-12 px-26 overflow-hidden rounded-30 outline-0 transition duration-300 field-form placeholder:text-placeholder" name="message" placeholder="YOUR MESSAGE"></textarea>
                              </div>
                              <div class="w-full px-16 xs:px-0 mt-30">
                                 <button type="submit" class="button overflow-hidden inline-block leading-lh-1.4 rounded-30 text-ellipsis text-center align-middle select-none transition-all duration-250 ease-in-out uppercase no-underline relative z-10 py-16 pr-70 pl-35 text-fs-15 font-semibold text-white bg-transparent outline-0 before:absolute before:-z-10 before:left-0 before:right-0 before:top-0 before:bottom-0 before:translate-x-full hover:before:translate-x-0 before:transition before:duration-300 before:ease-out">
                                 <span class="relative z-20 text-white">send message</span>
                                 <span class="absolute -right-px bottom-0 w-55 h-55 flex items-center justify-center rounded-full text-white text-fs-19 fa fa-send bg-accent"></span>
                                 </button>
                              </div>
                              <div class="w-full px-16 xs:px-0">
                                 <span id="message" class="output_message h-0 text-center leading-lh-46 rounded-30 text-white block [&.success]:h-46 [&.success]:bg-success [&.error]:h-46 [&.error]:bg-error mt-30 mb-60"></span>
                              </div>
                              
                           </div>
                        </form>
                     </div>
                     <!-- Contact Form Ends -->
                  </div>
               </div>
            </div>
         </div>
         <!-- Contact Ends -->

         <!-- Blog Starts -->
         <div class="page" id="blog">
            <div class="w-full">
              <!-- Section Title Starts -->
               <div class="mx-auto w-full relative py-80 text-center xs:px-25 xs:pt-16 xs:pb-14 xs:bg-black-3 xs:border-b xs:border-black-4 xs:fixed xs:left-0 xs:right-0 xs:top-0 xs:z-20">
                  <h2 class="text-fs-56 font-black font-Poppins uppercase text-white m-0 xs:text-fs-26 xs:text-left xs:leading-lh-1.2">
                     my <span class="text-accent">blog</span>
                  </h2>
                  <span class="text-fs-110 absolute left-0 right-0 top-1/2 tracking-10 leading-lh-0.7 font-extrabold text-muted -translate-y-1/2 uppercase xs:hidden">posts</span>
               </div>
               <!-- Section Title Ends -->
               <div class="xl:max-w-1140 lg:max-w-960 md:max-w-720 sm:max-w-540 xs:max-w-full mx-auto">
                 <!-- Blog Posts Starts -->
                  <div class="flex flex-wrap down-sm:flex-col">
                    <!-- Blog Post Starts -->
                     <div class="w-1/3 down-xl:w-1/2 down-sm:w-full px-16 xs:px-0 mb-30">
                        <div class="h-full bg-black-3 rounded-5">
                           <div class="rounded-t-5 cursor-pointer post-thumb">
                              <a href="{{route('gofleet-blog')}}" class="rounded-t-5 relative overflow-hidden block group outline-0 transition-all duration-300">
                              <img class="rounded-t-5 transition-all duration-300 group-hover:scale-125" src="assets/img/blog/blog-post-1.jpg" alt="">
                              </a>
                           </div>
                           <div class="bg-black-3 pt-20 px-25 pb-25 rounded-b-5">
                              <a href="{{route('gofleet-blog')}}" class="leading-lh-26 text-fs-20 font-semibold text-accent-hover transition duration-300">
                              How to Own Your Audience by Creating an Email List
                              </a> 
                              <p class="mt-15 mb-5 font-Open-sans">
                                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- Blog Post Ends -->
                     <!-- Blog Post Starts -->
                     <div class="w-1/3 down-xl:w-1/2 down-sm:w-full px-16 xs:px-0 mb-30">
                        <div class="h-full bg-black-3 rounded-5">
                           <div class="rounded-t-5 cursor-pointer post-thumb">
                              <a href="blog-post-dark.html" class="rounded-t-5 relative overflow-hidden block group outline-0 transition-all duration-300">
                              <img class="rounded-t-5 transition-all duration-300 group-hover:scale-125" src="assets/img/blog/blog-post-2.jpg" alt="">
                              </a>
                           </div>
                           <div class="bg-black-3 pt-20 px-25 pb-25 rounded-b-5">
                              <a href="blog-post-dark.html" class="leading-lh-26 text-fs-20 font-semibold text-accent-hover transition duration-300">
                              Top 10 Toolkits for Deep Learning in 2020
                              </a> 
                              <p class="mt-15 mb-5 font-Open-sans">
                                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- Blog Post Ends -->
                     <!-- Blog Post Starts -->
                     <div class="w-1/3 down-xl:w-1/2 down-sm:w-full px-16 xs:px-0 mb-30">
                        <div class="h-full bg-black-3 rounded-5">
                           <div class="rounded-t-5 cursor-pointer post-thumb">
                              <a href="blog-post-dark.html" class="rounded-t-5 relative overflow-hidden block group outline-0 transition-all duration-300">
                              <img class="rounded-t-5 transition-all duration-300 group-hover:scale-125" src="assets/img/blog/blog-post-3.jpg" alt="">
                              </a>
                           </div>
                           <div class="bg-black-3 pt-20 px-25 pb-25 rounded-b-5">
                              <a href="blog-post-dark.html" class="leading-lh-26 text-fs-20 font-semibold text-accent-hover transition duration-300">
                              Everything You Need to Know About Web Accessibility
                              </a> 
                              <p class="mt-15 mb-5 font-Open-sans">
                                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- Blog Post Ends -->
                     <!-- Blog Post Starts -->
                     <div class="w-1/3 down-xl:w-1/2 down-sm:w-full px-16 xs:px-0 mb-30">
                        <div class="h-full bg-black-3 rounded-5">
                           <div class="rounded-t-5 cursor-pointer post-thumb">
                              <a href="blog-post-dark.html" class="rounded-t-5 relative overflow-hidden block group outline-0 transition-all duration-300">
                              <img class="rounded-t-5 transition-all duration-300 group-hover:scale-125" src="assets/img/blog/blog-post-4.jpg" alt="">
                              </a>
                           </div>
                           <div class="bg-black-3 pt-20 px-25 pb-25 rounded-b-5">
                              <a href="blog-post-dark.html" class="leading-lh-26 text-fs-20 font-semibold text-accent-hover transition duration-300">
                              How to Inject Humor & Comedy Into Your Brand
                              </a> 
                              <p class="mt-15 mb-5 font-Open-sans">
                                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- Blog Post Ends -->
                     <!-- Blog Post Starts -->
                     <div class="w-1/3 down-xl:w-1/2 down-sm:w-full px-16 xs:px-0 mb-30">
                        <div class="h-full bg-black-3 rounded-5">
                           <div class="rounded-t-5 cursor-pointer post-thumb">
                              <a href="blog-post-dark.html" class="rounded-t-5 relative overflow-hidden block group outline-0 transition-all duration-300">
                              <img class="rounded-t-5 transition-all duration-300 group-hover:scale-125" src="assets/img/blog/blog-post-5.jpg" alt="">
                              </a>
                           </div>
                           <div class="bg-black-3 pt-20 px-25 pb-25 rounded-b-5">
                              <a href="blog-post-dark.html" class="leading-lh-26 text-fs-20 font-semibold text-accent-hover transition duration-300">
                              Women in Web Design: How To Achieve Success
                              </a> 
                              <p class="mt-15 mb-5 font-Open-sans">
                                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- Blog Post Ends -->
                     <!-- Blog Post Starts -->
                     <div class="w-1/3 down-xl:w-1/2 down-sm:w-full px-16 xs:px-0 mb-30">
                        <div class="h-full bg-black-3 rounded-5">
                           <div class="rounded-t-5 cursor-pointer post-thumb">
                              <a href="blog-post-dark.html" class="rounded-t-5 relative overflow-hidden block group outline-0 transition-all duration-300">
                              <img class="rounded-t-5 transition-all duration-300 group-hover:scale-125" src="assets/img/blog/blog-post-6.jpg" alt="">
                              </a>
                           </div>
                           <div class="bg-black-3 pt-20 px-25 pb-25 rounded-b-5">
                              <a href="blog-post-dark.html" class="leading-lh-26 text-fs-20 font-semibold text-accent-hover transition duration-300">
                              Evergreen versus topical content: An overview
                              </a> 
                              <p class="mt-15 mb-5 font-Open-sans">
                                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore...
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- Blog Post Ends -->
                  </div>
                  <!-- Blog Posts Ends -->
                  <!-- Blog Pagination Starts -->
                  <nav class="mt-24">
                     <ul class="flex justify-center from-sm:mb-100 down-sm:mb-60">
                        <li>
                           <a class="w-43 h-43 transition-all duration-300 text-center block leading-lh-45 bg-black-3 bg-accent-hover rounded-full mx-5" href="#">
                           1
                           </a>
                        </li>
                        <li>
                           <a class="w-43 h-43 transition-all duration-300 text-center block leading-lh-45 bg-accent bg-accent-hover rounded-full mx-5" href="#">
                           2
                           </a>
                        </li>
                        <li>
                           <a class="w-43 h-43 transition-all duration-300 text-center block leading-lh-45 bg-black-3 bg-accent-hover rounded-full mx-5" href="#">
                           3
                           </a>
                        </li>
                        <li>
                           <a class="w-43 h-43 transition-all duration-300 text-center block leading-lh-45 bg-black-3 bg-accent-hover rounded-full mx-5" href="#">
                           4
                           </a>
                        </li>
                     </ul>
                  </nav>
                  <!-- Blog Pagination Ends -->
               </div>
            </div>
         </div>
         <!-- Blog Ends -->
      </div>
      <!-- Main Content Ends -->
   
      @include('layout.script')

      <script>
         $('#contactform').on('submit',function(e){
            e.preventDefault();

           var formData = $(this).serializeArray();
            console.log(formData,'formData');
           $.ajax({
                     type: "POST",
                     url: "{{route('submitForm')}}",
                     data: formData,
                     _token: "{{ csrf_token() }}",
                     dataType: "json",
                     encode: true,
                  }).done(function (data) {
                     console.log(data);
                  });
                  
         });
         </script>

   </body>

<!-- Mirrored from slimhamdi.net/tunis-tailwind/demos/dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2024 12:49:15 GMT -->
</html>