<?php
require 'components/header.php';


$slug = $_GET['slug'];
$url = 'https://ophim1.com/phim/' . $slug;
$response = file_get_contents($url);
$data = json_decode($response, true);

$episodeCount = count($data['episodes'][0]['server_data']);

// echo '<pre>';
// print_r($data);
// echo '</pre>';
?>


<div class="progress-bar" id="progress-bar">
     <a href="#" id="progress-val">
          <ion-icon name="logo-foursquare"></ion-icon>
     </a>
</div>

<div class="container">
     <div class="nav bg-color">
          <a href="index.php" class="logo">
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


<!-- SECTIONS -->

<section class="movie-banner">
     <div class="hero-wrapper">
          <div class="movie-banner-item">
               <img src="<?php echo $data['movie']['poster_url']; ?>" alt="">
          </div>

          <div class="movie-card">
               <img src="<?php echo $data['movie']['thumb_url']; ?>" alt="raya">

               <div class="movie-card-content">
                    <h2><?php echo  $data['movie']['name']; ?></h2>

                    <ul class="movie-card-btns">
                         <?php
                         if (isset($data['movie']['category']) && is_array($data['movie']['category'])) {
                              foreach ($data['movie']['category'] as $category) {
                                   if (isset($category['name'])) {
                                        echo "<li class='movie-card-btn'>" . htmlspecialchars($category['name']) . "</li>";
                                   }
                              }
                         }
                         ?>
                    </ul>

                    <p class="movie-card-description">
                         <?php echo  $data['movie']['content']; ?>
                    </p>

                    <h3 style="margin-top: 5%;">screen shot</h3>
                    <div class="movie-casts">
                         <div class="movie-cast-item">
                              <img src="<?php echo $data['movie']['thumb_url']; ?>" alt="cast1">
                         </div>
                         <div class="movie-cast-item">
                              <img src="<?php echo $data['movie']['poster_url']; ?>" alt="cast1">
                         </div>
                    </div>
               </div>
          </div>

     </div>
</section>


<section class="international-trailer">
     <div class="trailer-title">
          <h3>Episodes</h3>
     </div>
     <div class="international-vid">

          <nav class="pagination-outer" aria-label="Page navigation">
               <ul class="pagination">
                    <?php
                    for ($i = 1; $i <= $episodeCount; $i++) { 
                         echo "<li class='page-item'><a class='page-link' href='watch.php?slug=" . htmlspecialchars($slug) . "&espi=$i'>$i</a></li>";
                    }
                    ?>
               </ul>
          </nav>
     </div>
</section>

<section class="international-trailer  margin">
     <div class="trailer-title">
          <h3>official trailer</h3>
     </div>
     <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/1VIZ89FEjYI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>

<!-- <section class="international-trailer margin">
          <div class="trailer-title">
                 <h3>teaser trailer</h3>
          </div>
          <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/9BPMTr-NS9s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </section> -->

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

     .margin {
          margin: -34rem auto 0;
     }
</style>