<?php
    require 'components/header.php';
    $slug = $_GET['slug'];
    $espi = $_GET['espi'];

    $url = 'https://ophim1.com/phim/' . $slug;
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    foreach($data['episodes'][0]['server_data'] as $movie){
        if($movie['name'] == $espi || $movie['name'] == "Full"){
            $movieUrl = $movie['link_embed'] ;
        }
    }

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





<section class="international-trailer  margin">
     <div class="trailer-title">
          <h3>Episode: <?php echo  $espi; ?></h3>
     </div>
     <iframe width="560" height="315" src="<?php echo $movieUrl ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>
