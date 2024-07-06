<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Flix | Movie web</title>

     <link rel="shortcut icon" href="./assets/img/Images/logo-foursquare.svg">
     
     <!-- CSS -->
     <link rel="stylesheet" href="./assets/component.css">
     <link rel="stylesheet" href="./assets/style.css">
     <link rel="stylesheet" href="./assets/grid.css">

     <!-- GOOGLE FONTS -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
          
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Open+Sans:ital,wght@0,400;1,300&family=Playfair+Display:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&family=Shizuru&display=swap" rel="stylesheet">

     <!-- LINK CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">



     <!-- BOX ICON  -->
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="./assets/fontawesome-free-5.15.4-web/css/all.min.css">
     <link rel="stylesheet" href="./themify-icons/themify-icons.css">
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
     <!-- NAV -->

          <div class="menu-tablet" id="menu-tablet">
               <ul class="menu-tb-list">
                    <li><a href="#">
                         home
                    </a></li>
                    <li><a href="#">
                         Movies
                    </a></li>
                    <li><a href="#">
                         tv series
                    </a></li>
                    <li><a href="#">
                         Genre
                    </a></li>
                    <li><a href="#">
                         setting
                    </a></li>

                    <li><a href="#">
                         Account
                    </a></li>

               </ul>
          </div>


          <div class="navigation">
               <ul>
                    <li class="item active">
                         <a >
                              <span class="icon"><i class='bx bx-home-circle'></i></span>
                              <span class="text">Home</span>
                         </a>
                    </li>
                   
     
                    <li class="item">
                         <a >
                              <span class="icon"><ion-icon name="film-outline"></ion-icon></span>
                              <span class="text">Movie</span>
                         </a>
                    </li>
     
                    <li class="item">
                         <a >
                              <span class="icon"><ion-icon name="tv-outline"></ion-icon></i></span>
                              <span class="text">TVSeries</span>
                         </a>
                    </li>
                    
                    <li class="item">
                         <a >
                              <span class="icon"><i class='bx bx-user'></i></span>
                              <span class="text">Profile</span>
                         </a>
                    </li>

                    <li class="item">
                         <a >
                              <span class="icon"><i class='bx bx-cog'></i></span>
                              <span class="text">Settings</span>
                         </a>
                    </li>
                    <div class="indicator"></div>
               </ul>
          </div>
          

          <div class="progress-bar" id="progress-bar">
               <a href="#" id="progress-val">
                    <ion-icon name="logo-foursquare"></ion-icon>
               </a>  
          </div>

          <div class="container">
               <div class="nav">
                    <a href="#" class="logo">
                         <i style="margin-right: 10px;" class='bx bx-movie-play bx-tada main-color'></i>Fl<span class="main-color">i</span>x
                    </a>
                    
                    <form action="" class="search-box">
                         <input type="text" name="search" placeholder="Search Your Movie ....." class="nav-search">
                         <button type="password">
                              <i class='bx bx-search-alt'></i>
                         </button>
                    </form>
     
                    <div class="nav-sign">
                         <a href="#" class="btn btn-hover">
                              <span>Sign in</span>
                         </a>
                    
                    </div>
                    <div class="menu-toggle">
                         <ion-icon name="menu-outline" class="open"></ion-icon>
                         <ion-icon name="close-outline" class="close"></ion-icon>

                       
                    </div>
               </div>   
          </div>


          <div class="nav-wrapper">
                <ul class="nav-menu" id="nav-menu">
                    <li class="nav-item active">
                         <a href="#">
                              <span class="nav-icon"><ion-icon name="home-outline"></ion-icon></span>
                              Home
                         </a>
                    </li>
                   
                    <li class="nav-item">
                         <a href="#latest-section">
                              <span class="nav-icon"><ion-icon name="film-outline"></ion-icon></span>
                              Movies   
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="#section-tv">
                              <span class="nav-icon"><ion-icon name="tv-outline"></ion-icon></span>
                              Tv Series  
                         </a>
                    </li>

                    <li class="nav-item">
                         <a href="#">
                              <span class="nav-icon"><ion-icon name="grid-outline"></ion-icon></span>
                              Genre
                         </a>
                    </li>
                   
                    <li class="nav-item">
                         <a href="#">
                              <span class="nav-icon"><ion-icon name="settings-outline"></ion-icon></span>
                              setting    
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="#">
                              <span class="nav-icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
                              messages  
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="#">
                              <span class="nav-icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                              about
                         </a>
                    </li>

                    <li class="nav-item">
                         <a href="#">
                              <span class="nav-icon"><ion-icon name="person-outline"></ion-icon></span>
                              Account
                         </a>
                    </li>
                    
               </ul>
          </div>

     <!--END NAV -->

     <!-- SLIDE SECTION -->
          <div class="big-section" id="big-section">
               <!-- BIG SLIDES -->
               <div class="slide-container" id="big-slider">

                    <div class="big-slide-item active">
                         <img src="./assets/img/Images/p-2.jpg" alt="Poster">

                         <div class="big-slide-item-content">
                              <div class="item-content-wrapper">
                                   <div class="item-content-title">
                                        Pirate caribbean
                                   </div>

                                   <div class="movies-infors">
                                        <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span>9.5</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span>120 mins</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span>FHD</span>
                                        </div>
                                   </div>

                                   <div class="item-content-description ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                                        laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                                        facere ab suscipit.
                                    </div>
                              </div>
                         </div>

                         <div class="play-movies">
                              <div class="ring"></div>
                              <a href="https://www.youtube.com/watch?v=Hgeu5rhoxxY&t=10s">
                                   <i class='bx bxs-right-arrow'></i>
                              </a>
                              <div class="btn-watch">
                                   <span>watch trailer</span>
                              </div>
                         </div>
                    </div>

                    <div class="big-slide-item">
                         <img src="./assets/img/Images/p-6.jpg" alt="Poster">

                         <div class="big-slide-item-content">
                              <div class="item-content-wrapper">
                                   <div class="item-content-title ">
                                        black widow
                                   </div>

                                   <div class="movies-infors">
                                        <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span>9.5</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span>120 mins</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span>FHD</span>
                                        </div>
                                   </div>

                                   <div class="item-content-description ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                                        laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                                        facere ab suscipit.
                                    </div>
                              </div>
                         </div>

                         <div class="play-movies ">
                              <div class="ring"></div>
                             <a href="https://www.youtube.com/watch?v=ybji16u608U">
                                   <i class='bx bxs-right-arrow'></i>
                             </a>
                             <div class="btn-watch">
                                   <span>watch trailer</span>
                              </div>
                         </div>
                    </div>

                   <div class="big-slide-item">
                         <img src="./assets/img/Images/transformer-banner.jpg" alt="Poster">

                         <div class="big-slide-item-content">
                              <div class="item-content-wrapper">
                                   <div class="item-content-title">
                                        Transformer
                                   </div>

                                   <div class="movies-infors ">
                                        <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span>9.5</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span>120 mins</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span>FHD</span>
                                        </div>
                                   </div>

                                   <div class="item-content-description  ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                                        laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                                        facere ab suscipit.
                                    </div>
                              </div>
                         </div>

                         <div class="play-movies ">
                              <div class="ring"></div>
                              <a href="https://www.youtube.com/watch?v=Q3VKie4pChs">
                                    <i class='bx bxs-right-arrow'></i>
                              </a>
                              <div class="btn-watch">
                                   <span>watch trailer</span>
                              </div>
                         </div>
                    </div>
                  
                    <div class="big-slide-item">
                         <img src="./assets/img/Images/p-3.jpg" alt="Poster">

                         <div class="big-slide-item-content">
                              <div class="item-content-wrapper">
                                   <div class="item-content-title ">
                                        bloodShot
                                   </div>

                                   <div class="movies-infors">
                                        <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span>9.5</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span>120 mins</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span>FHD</span>
                                        </div>
                                   </div>

                                   <div class="item-content-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                                        laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                                        facere ab suscipit.
                                    </div>
                              </div>
                         </div>

                         <div class="play-movies ">
                              <div class="ring"></div>
                              <a href="https://www.youtube.com/watch?v=vOUVVDWdXbo">
                                    <i class='bx bxs-right-arrow'></i>
                              </a>
                              <div class="btn-watch">
                                   <span>watch trailer</span>
                              </div>
                         </div>
                    </div> 
                    
                    <ul class="slide-control">
                         <li class="slide-prev">
                              <ion-icon name="chevron-back-outline"></ion-icon>
                         </li>

                         <li class="slide-next">
                              <ion-icon name="chevron-forward-outline"></ion-icon>
                         </li>
                    </ul>

               </div>
          </div>

     <!--END SLIDE SECTION -->


     <!-- LATEST SECTION -->
          <div class="section" id="latest-section">
              <div class="section-wrapper" id="section-wrapper">
                    <div class="section-header">
                         Trending movies
                    </div>
                  
                    <div class="movies-slide row">
                         
                         <a href="component.php" class="movie-item col-3-5 m-5 s-11 to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/raya1.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             raya and the last dragon

                                        </div>

                                        <div class="movies-infors-card">
                                             <div class="movies-infor">
                                                  <ion-icon name="bookmark-outline"></ion-icon>
                                                  <span>9.0</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="time-outline"></ion-icon>
                                                  <span>120 mins</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="cube-outline"></ion-icon>
                                                  <span>FHD</span>
                                             </div>
                                        </div>    
                                   </div>
                              </div>
                              <div class="movie-item-overlay">
                              </div>
                              <div class="movie-item-act" >
                                   <!-- <div class="ring"></div> -->
                                   <i class='bx bxs-right-arrow'></i>

                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                         </a>

                         <a href="#" class="movie-item col-3-5 m-5 s-11 to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/p-4.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             venon: let there be carnage
                                        </div>

                                   <div class="movies-infors-card">
                                        <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span>9.0</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span>120 mins</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span>FHD</span>
                                        </div>
                                        
                                   </div>
                              </div>
                                   <div class="movie-item-overlay">
                              </div>
                              <div class="movie-item-act">
                                   <!-- <div class="ring"></div> -->
                                   <i class='bx bxs-right-arrow'></i>
                                   
                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                              </div>
                         </a>

                         <a href="#" class="movie-item col-3-5 m-5 s-11  to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/p-5.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             dealpool 2
                                        </div>

                                   <div class="movies-infors-card">
                                        <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span>9.0</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span>120 mins</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span>FHD</span>
                                        </div>
                                        
                                   </div>
                              </div>

                              <div class="movie-item-overlay"></div>

                              <div class="movie-item-act">
                                   <!-- <div class="ring"></div> -->
                                   <i class='bx bxs-right-arrow'></i>
                                   
                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                              </div>
                         </a>

                         <a href="#" class="movie-item col-3-5 m-5 s-11  to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/post-2.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             The tomorrow war
                                        </div>

                                   <div class="movies-infors-card">
                                        <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span>9.0</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span>120 mins</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span>FHD</span>
                                        </div>
                                        
                                   </div>
                              </div>

                              <div class="movie-item-overlay"></div>

                              <div class="movie-item-act">
                                   <!-- <div class="ring"></div> -->
                                   <i class='bx bxs-right-arrow'></i>
                                   
                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                              </div>
                         </a>

                         <a href="#" class="movie-item col-3-5 m-5 s-11  to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/post-3.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             jungle cruise
                                        </div>

                                   <div class="movies-infors-card">
                                        <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span>9.0</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span>120 mins</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span>FHD</span>
                                        </div>
                                        
                                   </div>
                              </div>

                              <div class="movie-item-overlay"></div>

                              <div class="movie-item-act">
                                   <!-- <div class="ring"></div> -->
                                   <i class='bx bxs-right-arrow'></i>
                                   
                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                              </div>
                         </a>

                         <a href="#" class="movie-item col-3-5 m-5 s-11  to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/post-4.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             dune
                                        </div>

                                   <div class="movies-infors-card">
                                        <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span>9.0</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span>120 mins</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span>FHD</span>
                                        </div>
                                        
                                   </div>
                              </div>

                              <div class="movie-item-overlay"></div>

                              <div class="movie-item-act">
                                   <!-- <div class="ring"></div> -->
                                   <i class='bx bxs-right-arrow'></i>
                                   
                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                              </div>
                         </a>

                         <a href="#" class="movie-item col-3-5 m-5 s-11  to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/post-5.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             The suicide squad
                                        </div>

                                   <div class="movies-infors-card">
                                        <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span>9.0</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span>120 mins</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span>FHD</span>
                                        </div>
                                        
                                   </div>
                              </div>

                              <div class="movie-item-overlay"></div>

                              <div class="movie-item-act">
                                   <!-- <div class="ring"></div> -->
                                   <i class='bx bxs-right-arrow'></i>
                                   
                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                              </div>
                         </a>

                         <a href="#" class="movie-item col-3-5 m-5 s-11  to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/post-6.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             no time to die
                                        </div>

                                   <div class="movies-infors-card">
                                        <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span>9.0</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span>120 mins</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span>FHD</span>
                                        </div>
                                        
                                   </div>
                              </div>

                              <div class="movie-item-overlay"></div>

                              <div class="movie-item-act">
                                   <!-- <div class="ring"></div> -->
                                   <i class='bx bxs-right-arrow'></i>
                                   
                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                              </div>
                         </a>

                         <a href="#" class="movie-item col-3-5 m-5 s-11 to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/post-10.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             prisoner of the ghostland
                                        </div>

                                   <div class="movies-infors-card">
                                        <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span>9.0</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span>120 mins</span>
                                        </div>
                                        <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span>FHD</span>
                                        </div>
                                        
                                   </div>
                              </div>

                              <div class="movie-item-overlay"></div>

                              <div class="movie-item-act">
                                   <!-- <div class="ring"></div> -->
                                   <i class='bx bxs-right-arrow'></i>
                                   
                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                              </div>
                         </a> 
                        
                         <div class="btn-load btn-load-tb">
                              <span>load more</span>
                         </div>
                         
                    </div>

                
                 
              </div>
          </div>

     <!-- END LATEST SECTION -->

     <!-- TV SERIES -->
           <div class="section-tv" id="section-tv">  
               <div class="section-wrapper">
                    <div class="section-header">
                         <span> tv Series</span>
                         <!-- <div class="btn-load-2">
                              <span>load more</span>
                         </div> -->
                    </div>

                    <div class="movies-slide row" id="tv-slider">
                         <a href="#" class="movie-item col-3-5  m-5 s-11 to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/post-9.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             wanda Vision

                                        </div>

                                        <div class="movies-infors-card">
                                             <div class="movies-infor">
                                                  <ion-icon name="bookmark-outline"></ion-icon>
                                                  <span>9.0</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="time-outline"></ion-icon>
                                                  <span>120 mins</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="cube-outline"></ion-icon>
                                                  <span>FHD</span>
                                             </div>
                                        </div>    
                                   </div>
                              </div>
                              <div class="movie-item-overlay">
                              </div>
                              <div class="movie-item-act">
                                   <i class='bx bxs-right-arrow'></i>

                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                         </a>

                         <a href="#" class="movie-item col-3-5  m-5 s-11 to-top show-on-scroll ">
                              <div>
                                   <img src="./assets/img/Images/post-8.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             rumble
                                        </div>

                                        <div class="movies-infors-card">
                                             <div class="movies-infor">
                                                  <ion-icon name="bookmark-outline"></ion-icon>
                                                  <span>9.0</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="time-outline"></ion-icon>
                                                  <span>120 mins</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="cube-outline"></ion-icon>
                                                  <span>FHD</span>
                                             </div>
                                        </div>    
                                   </div>
                              </div>
                              <div class="movie-item-overlay">
                              </div>
                              <div class="movie-item-act">
                                   <i class='bx bxs-right-arrow'></i>

                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                         </a>

                         <a href="#" class="movie-item col-3-5  m-5 s-11 to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/post-1.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                         venon
                                        </div>

                                        <div class="movies-infors-card">
                                             <div class="movies-infor">
                                                  <ion-icon name="bookmark-outline"></ion-icon>
                                                  <span>9.0</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="time-outline"></ion-icon>
                                                  <span>120 mins</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="cube-outline"></ion-icon>
                                                  <span>FHD</span>
                                             </div>
                                        </div>    
                                   </div>
                              </div>
                              <div class="movie-item-overlay">
                              </div>
                              <div class="movie-item-act">
                                   <i class='bx bxs-right-arrow'></i>

                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                         </a>

                         <a href="#" class="movie-item col-3-5  m-5 s-11 to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/post-11.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                         luca
                                        </div>

                                        <div class="movies-infors-card">
                                             <div class="movies-infor">
                                                  <ion-icon name="bookmark-outline"></ion-icon>
                                                  <span>9.0</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="time-outline"></ion-icon>
                                                  <span>120 mins</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="cube-outline"></ion-icon>
                                                  <span>FHD</span>
                                             </div>
                                        </div>    
                                   </div>
                              </div>
                              <div class="movie-item-overlay">
                              </div>
                              <div class="movie-item-act">
                                   <i class='bx bxs-right-arrow'></i>

                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                         </a>

                         <a href="#" class="movie-item col-3-5  m-5 s-11 to-top show-on-scroll">
                              <div>
                                   <img src="./assets/img/Images/post-12.jpg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                         annette
                                        </div>

                                        <div class="movies-infors-card">
                                             <div class="movies-infor">
                                                  <ion-icon name="bookmark-outline"></ion-icon>
                                                  <span>9.0</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="time-outline"></ion-icon>
                                                  <span>120 mins</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="cube-outline"></ion-icon>
                                                  <span>FHD</span>
                                             </div>
                                        </div>    
                                   </div>
                              </div>
                              <div class="movie-item-overlay">
                              </div>
                              <div class="movie-item-act">
                                   <i class='bx bxs-right-arrow'></i>

                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                         </a>

                         <a href="#" class="movie-item col-3-5  m-5 s-11 to-top show-on-scroll ">
                              <div>
                                   <img src="./assets/img/Images/start-trek.jpeg" alt="">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             star trek Discovery
                                        </div>

                                        <div class="movies-infors-card">
                                             <div class="movies-infor">
                                                  <ion-icon name="bookmark-outline"></ion-icon>
                                                  <span>9.0</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="time-outline"></ion-icon>
                                                  <span>120 mins</span>
                                             </div>
                                             <div class="movies-infor">
                                                  <ion-icon name="cube-outline"></ion-icon>
                                                  <span>FHD</span>
                                             </div>
                                        </div>    
                                   </div>
                              </div>

                              <div class="movie-item-overlay">
                              </div>
                              
                              <div class="movie-item-act">
                                   <i class='bx bxs-right-arrow'></i>
                                   
                                   <div>
                                        <i class='bx bxs-share-alt' ></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical' ></i>
                                   </div>
                              </div>
                              
                         </a>
                         

                         <div class="btn-load ">
                              <span>load more</span>
                         </div>
                         
                    </div>
               </div>
          </div> 



     <!-- TV SERIES -->

     <!-- SPECIAL MOVIES -->
     <div class="special">
          <div class="section-wrapper">
               <div class="section-header">
                    hot movie
                </div>
               <div class="big-slide-item special-movie active to-top show-on-scroll">
                    <img src="./assets/img/Images/black-banner.png" alt="Poster">

                    <div class="big-slide-item-content">
                         <div class="item-content-wrapper">
                              <div class="item-content-title ">
                                   black Panther
                              </div>

                              <div class="movies-infors">
                                   <div class="movies-infor">
                                        <ion-icon name="bookmark-outline"></ion-icon>
                                        <span>9.5</span>
                                   </div>
                                   <div class="movies-infor">
                                        <ion-icon name="time-outline"></ion-icon>
                                        <span>120 mins</span>
                                   </div>
                                   <div class="movies-infor">
                                        <ion-icon name="cube-outline"></ion-icon>
                                        <span>FHD</span>
                                   </div>
                              </div>

                              <div class="item-content-description ">
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                   Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                                   laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                                   facere ab suscipit.
                               </div>
                         </div>
                    </div>

                    <div class="play-movies ">
                         <div class="ring"></div>
                        <a href="https://www.youtube.com/watch?v=qZuQc-GvRlk">
                              <i class='bx bxs-right-arrow'></i>
                        </a>
                        <div class="btn-watch">
                              <span>watch trailer</span>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <!--END SPECIAL MOVIES -->



    
     <footer class="footer ">
          <div class="section-wrapper">
               <div class="row ">
                   <div class="col-6 footer-header">
                         <a href="#" class="logo">
                              <i style="margin-right: 10px;" class='bx bx-movie-play bx-tada main-color'></i>Fl<span class="main-color">i</span>x
                         </a>

                         <p class="description">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                              Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                              laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                              facere ab suscipit.
                         </p>
                         <div class="social-list">
                              <a href="#" class="social-item">
                                   <i class="bx bxl-facebook"></i>
                              </a>
                              <a href="#" class="social-item">
                                   <i class="bx bxl-instagram"></i>
                              </a>
                              <a href="#" class="social-item">
                                   <i class="bx bxl-twitter"></i>
                              </a>
                         </div>
                   </div>

                   <div class="col-12 footer-item">
                         <div class="row">
                              <div class="col-4 align-items-center">
                                   <div class="content">
                                        <p class="main-color" style="font-size: 1.2rem;"><b>Flix</b></p>
                                        <ul class="footer-menu">
                                            <li><a href="#"> About us</a></li>
                                            <li><a href="#"> My profile</a></li>
                                            <li><a href="#"> Pricing plans</a></li>
                                            <li><a href="#"> Contacts</a></li>
                                        </ul>
                                     </div>
                              </div>


                              <div class="col-4 align-items-center">
                                   <div class="content">
                                        <p class="main-color" style="font-size: 1.2rem;"><b>Browse</b></p>
                                        <ul class="footer-menu">
                                            <li><a href="#">Live TV</a></li>
                                            <li><a href="#">Live Movies</a></li>
                                            <li><a href="#">Live Series</a></li>
                                            <li><a href="#">Streaming Library</a></li>
                                        </ul>
                                     </div>
                              </div>

                              <div class="col-4 align-items-center">
                                   <div class="content">
                                        <p class="main-color" style="font-size: 1.2rem;"><b>Help</b></p>
                                        <ul class="footer-menu">
                                            <li><a href="#">Account & Billing</a></li>
                                            <li><a href="#">Plans & Pricing</a></li>
                                            <li><a href="#">Supported devices</a></li>
                                            <li><a href="#">Accessibility</a></li>
                                        </ul>
                                     </div>
                              </div>

                            
                         </div>
                   </div>
               </div>


          
          </div>
      </footer>


     <script src="main.js"></script>
</body>
</html>