<?php
    require 'components/header.php';
    $page = $_GET['page'] ?? 1;
    $url = 'https://ophim1.com/danh-sach/phim-moi-cap-nhat?page=' . $page;
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    
    ?>
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
                         <a href="Login.php" class="btn btn-hover">
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
                    <!-- <li class="nav-item">
                         <a href="#section-tv">
                              <span class="nav-icon"><ion-icon name="tv-outline"></ion-icon></span>
                              Tv Series  
                         </a>
                    </li> -->

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
                    <?php
                         foreach ($data['items'] as $movie) {
                         $title = htmlspecialchars($movie['name']);
                         $origin_name = htmlspecialchars($movie['origin_name']);
                         $year = htmlspecialchars($movie['year']);
                         $thumb_url = htmlspecialchars($data['pathImage'] . $movie['thumb_url']);
                         $poster_url = htmlspecialchars($data['pathImage'] . $movie['poster_url']);
                         $slug = htmlspecialchars($movie['slug']);
                         $rating = isset($movie['tmdb']['vote_average']) ? htmlspecialchars($movie['tmdb']['vote_average']) : 'N/A';
                         $duration = '120 mins'; // Assuming duration is static; replace with actual value if available
                         $quality = 'FHD'; // Assuming quality is static; replace with actual value if available
                         ?>

                         <a href="component.php?slug=<?php echo $slug; ?>" class="movie-item col-3-5 m-5 s-11 to-top show-on-scroll">
                              <div>
                                   <img src="<?php echo $thumb_url; ?>" alt="<?php echo $title; ?>">
                                   <div class="movie-item-content">
                                        <div class="movie-item-title">
                                             <?php echo $title; ?>
                                        </div>

                                        <div class="movies-infors-card">
                                             <div class="movies-infor">
                                             <ion-icon name="bookmark-outline"></ion-icon>
                                             <span><?php echo $rating; ?></span>
                                             </div>
                                             <div class="movies-infor">
                                             <ion-icon name="time-outline"></ion-icon>
                                             <span><?php echo $duration; ?></span>
                                             </div>
                                             <div class="movies-infor">
                                             <ion-icon name="cube-outline"></ion-icon>
                                             <span><?php echo $quality; ?></span>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="movie-item-overlay">
                              </div>
                              <div class="movie-item-act">
                                   <!-- <div class="ring"></div> -->
                                   <i class='bx bxs-right-arrow'></i>
                                   <div>
                                        <i class='bx bxs-share-alt'></i>
                                        <i class='bx bxs-heart'></i>
                                        <i class='bx bx-plus-medical'></i>
                                   </div>
                              </div>
                         </a>

                         <?php
                         }
                         ?>

                         <div class="btn-load btn-load-tb">
                         <div class="demo">
                         <?php
                         $currentPage = $data['pagination']['currentPage'];
                         $totalPage = $data['pagination']['totalPages'];
                         $maxPagesToShow = 5;
                         $startPage = max(1, $currentPage - 2);
                         $endPage = min($totalPage, $startPage + $maxPagesToShow - 1);

                         if ($endPage - $startPage < $maxPagesToShow - 1) {
                         $startPage = max(1, $endPage - $maxPagesToShow + 1);
                         }
                         ?>
                         <nav class="pagination-outer" aria-label="Page navigation">
                         <ul class="pagination">
                              <li class="page-item<?php if ($currentPage == 1) echo ' disabled'; ?>">
                                   <a href="" class="page-link" data-page="<?php echo max(1, $currentPage - 1); ?>" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                   </a>
                              </li>
                              <?php
                              if ($startPage > 1) {
                                   echo "<li class='page-item'><a class='page-link' href='' data-page='1'>1</a></li>";
                                   if ($startPage > 2) {
                                        echo "<li class='page-item disabled'><a class='page-link' href=''>...</a></li>";
                                   }
                              }
                              
                              for ($i = $startPage; $i <= $endPage; $i++) {
                                   echo "<li class='page-item";
                                   if ($i == $currentPage) echo " active";
                                   echo "'><a class='page-link' href='' data-page='$i'>$i</a></li>";
                              }

                              if ($endPage < $totalPage) {
                                   if ($endPage < $totalPage - 1) {
                                        echo "<li class='page-item disabled'><a class='page-link' href=''>...</a></li>";
                                   }
                                   echo "<li class='page-item'><a class='page-link' href='' data-page='$totalPage'>$totalPage</a></li>";
                              }
                              ?>
                              <li class="page-item<?php if ($currentPage == $totalPage) echo ' disabled'; ?>">
                                   <a href="" class="page-link" data-page="<?php echo min($totalPage, $currentPage + 1); ?>" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                   </a>
                              </li>
                         </ul>
                         </nav>


                         </div>
                         </div>
                         
                    </div>

                
                 
              </div>
          </div>

                         
     <?php
    include 'components/footer.php';
    ?>

<style>
     .pagination-outer {
          text-align: center;
     }

     .pagination {
          font-family: 'Poppins', sans-serif;
          display: inline-flex;
          position: relative;
     }

     .pagination li a.page-link {
          color: #42372c;
          background: transparent;
          font-size: 18px;
          font-weight: 500;
          text-align: center;
          line-height: 31px;
          height: 33px;
          width: 33px;
          padding: 0;
          margin: 0 4px;
          border: 1px solid #555;
          border-radius: 0;
          display: block;
          position: relative;
          z-index: 0;
          transition: all 0.1s ease 0s;
     }

     .pagination li:first-child a.page-link,
     .pagination li:last-child a.page-link {
          font-size: 30px;
          line-height: 30px;
     }

     .pagination li a.page-link:hover,
     .pagination li a.page-link:focus,
     .pagination li.active a.page-link:hover,
     .pagination li.active a.page-link {
          color: #870079;
          background: transparent;
          border-color: #870079;
     }

     .pagination li a.page-link:before {
          content: '';
          background-color: #870079;
          height: 30%;
          width: 50%;
          opacity: 0;
          transform: translateX(-50%);
          position: absolute;
          left: 50%;
          bottom: 0;
          z-index: -1;
          transition: all 0.3s ease 0s;
          clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
     }

     .pagination li:first-child a.page-link:before,
     .pagination li:last-child a.page-link:before {
          display: none;
     }

     .pagination li a.page-link:hover:before,
     .pagination li a.page-link:focus:before,
     .pagination li.active a.page-link:hover:before,
     .pagination li.active a.page-link:before {
          opacity: 1;
          bottom: 100%;
     }

     @media only screen and (max-width: 480px) {
          .pagination {
               font-size: 0;
               display: inline-block;
          }

          .pagination li {
               display: inline-block;
               vertical-align: top;
               margin: 0 0 15px;
          }
     }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Lấy tất cả các liên kết phân trang
    var paginationLinks = document.querySelectorAll('.pagination a.page-link');

    // Thêm sự kiện click cho từng liên kết
    paginationLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Ngăn chặn hành động mặc định của liên kết
            var page = this.getAttribute('data-page'); // Lấy số trang từ thuộc tính data-page
            updatePage(page); // Gọi hàm để lấy dữ liệu trang mới
        });
    });

    function updatePage(page) {
        // Cập nhật URL và reload lại trang
        var newUrl = 'index.php?page=' + page;
        window.location.href = newUrl;
    }

});
</script>