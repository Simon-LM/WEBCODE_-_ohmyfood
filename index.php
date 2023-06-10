<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=1 interactive-widget=overlays-content">
    <title>ohmyfood</title>
    <meta name="description" content="Commandez vos repas en ligne avec ohmyfood. Composez vos propres menus et reservez un horaire dans notre selection de restaurant gastronomiques. Rapide et simple, vos plats seront déja préparés et cela vous fera économiser du temps.">
    <META NAME="robots" CONTENT="index, follow">
    <link rel="stylesheet" href="./sass/main.css">    
    <base target="_parent">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  </head>
  <body> 
    
  


    <!-- <header class="visual-identity"> 
      <div class="visual-identity__master-logo">
        <img  src="./assets/images/logo/ohmyfood@2x.svg" alt="logo de ohmyfood">
      </div>
      <nav class="visual-identity__back-arrow">
        <a href="#" title="Page d'aceui"><i class="fa-solid fa-arrow-left"></i></a>
      </nav>
    </header> -->


<!-- 
<?php 
include "./objects/header.php"
?>
 -->




    <aside class="loader">
      <div class="loader__background">
        <div class="loader__background-top"></div>
        <div class="loader__background-middle">
          <div class="loader__background-middle-left"></div>
          <div class="loader__background-middle-center">
            <img src="./assets/images/restaurants/jay-wennington-N_Y88TWmGwA-unsplash.jpg" alt="">
            <div class="loader__progress-bar"></div> 
            <img  class="nocolor" src="./assets/images/logo/ohmyfood_nocolor@2x.svg" alt="logo de ohmyfood">
          </div>  
          <div class="loader__background-middle-right"></div>
        </div>
        <div class="loader__background-bottom"></div> 
      </div>
    </aside>
             

    <main>
      <section class="find-a-place">
          <div class="balloon-dot">
          <span class="balloon-dot__1">.</span><span class="balloon-dot__2">.</span><span class="balloon-dot__3">.</span><span class="balloon-dot__4">.</span><span class="balloon-dot__5">.</span><span class="balloon-dot__6">.</span><span class="balloon-dot__7">.</span><span class="balloon-dot__8">.</span><span class="balloon-dot__9">.</span><span class="balloon-dot__10">.</span><span class="balloon-dot__11">.</span><span class="balloon-dot__12">.</span>
          </div>
        <form method="get" action="/action_file.php">
          <label class="find-a-place__location-icon" title="Pressez-moi !"><span class="location"><i class="fa-solid fa-location-dot"></span></i></label>
          <span class="research-1"><span class="research-2"><span class="research-3"><span class="research-4"><input class="find-a-place__research" type="search" name="ville" id="rechercher"  title="&#x2190; Pressez l'icône !" placeholder="Quartier, ville" autofocus required></span></span></span></span>
        </form>
      </section>
      <section class="discovery"> 
        <h1 class="discovery__title">Réservez le menu qui vous convient</h1>
        <p class="discovery__subtitle">Découvrez des restaurants d'exception, sélectionnés par nos soins.</p>
        <button class="order-btn">Explorer nos restaurants</button>
      </section>
      <section class="explanation">
        <h2 class="explanation__title">Fonctionnement</h2> 
        <div class="explanation__all-cards">
          <div class="explanation__card">
            <span class="explanation__circle">1</span>
            <i class="fa-solid fa-mobile-screen-button"></i>
            <p class="explanation__text">Choississez un restaurant</p>
          </div>
          <div class="explanation__card">
            <span class="explanation__circle">2</span>
            <i class="fa-solid fa-list-ul"></i>
            <p class="explanation__text">Composez votre menu</p>
          </div>
          <div class="explanation__card">
            <span class="explanation__circle">3</span>
            <i class="fa-sharp fa-solid fa-store"></i>
            <p class="explanation__text">Dégustez au restaurant</p>
          </div>
        </div>
      </section>
      <section class="restaurants">
        <h2 class="restaurants__title">Restaurants</h2>
        <div class="restaurants__all-cards">
          <article class="restaurants__card">
            <span class="restaurants__thumbnail-new">Nouveau</span>
            <a>
              <img src="./assets/images/restaurants/jay-wennington-N_Y88TWmGwA-unsplash.jpg" alt="">
              <div class="restaurants__card-comment">
                <div class="restaurants__card-text">
                  <h4 class="restaurants__card-title">La palette du goût</h4>
                  <p class="restaurants__card-subtitle">Ménilmontant</p>
                </div>
              </div>
             
              <div class="restaurants__heart-like">
                <span class="restaurants__circle"></span> 
                <input type="checkbox" name="heart" id="like_la-palette-du-gout" class="restaurants__like"> 
                <label for="like_la-palette-du-gout" class="heart">
                <i class="restaurants__heart fa-regular fa-heart"></i>
                </label>
              </div> 
              
            </a> 
          </article>
          <article class="restaurants__card">
            <span class="restaurants__thumbnail-new">Nouveau</span>
            <a>
              <img src="./assets/images/restaurants/stil-u2Lp8tXIcjw-unsplash.jpg" alt="">
              <div class="restaurants__card-comment">
                <div class="restaurants__card-text">
                  <h4 class="restaurants__card-title">La note enchantée</h4>
                  <p class="restaurants__card-subtitle">Charonne</p>
                </div>
              </div>
              
              <div class="restaurants__heart-like"> 
                <span class="restaurants__circle"></span>              
                <input type="checkbox" name="heart" id="like_la-note-enchantee" class="restaurants__like"> 
                <label for="like_la-note-enchantee" class="heart">
                <i class="restaurants__heart fa-regular fa-heart"></i>
                </label>
              </div>   
             
            </a>      
          </article>
          <article class="restaurants__card">
              
            <a>
              <img src="./assets/images/restaurants/toa-heftiba-DQKerTsQwi0-unsplash.jpg" alt="">
              <div class="restaurants__card-comment">
                <div class="restaurants__card-text">
                  <h4 class="restaurants__card-title">À la française</h4>
                  <p class="restaurants__card-subtitle">Cité Rouge</p>
                </div>
              </div>
              
              <div class="restaurants__heart-like">    
                <span class="restaurants__circle"></span>           
                <input type="checkbox" name="heart" id="like_a-la-francaise" class="restaurants__like"> 
                <label for="like_a-la-francaise" class="heart">
                <i class="restaurants__heart fa-regular fa-heart"></i>
                </label>
              </div>   
              
            </a>
          </article>
          <article class="restaurants__card">
           
            <a>  
              <img src="./assets/images/restaurants/louis-hansel-shotsoflouis-qNBGVyOCY8Q-unsplash.jpg" alt="">
              <div class="restaurants__card-comment">
                <div class="restaurants__card-text">
                  <h4 class="restaurants__card-title">Le délice des sens</h4>
                  <p class="restaurants__card-subtitle">Folie-Méricourt</p>
                </div>
              </div>
             
              <div class="restaurants__heart-like">     
                <span class="restaurants__circle"></span>          
                <input type="checkbox" name="heart" id="like_le-delice-des-sens" class="restaurants__like"> 
                <label for="like_le-delice-des-sens" class="heart">
                  <i class="restaurants__heart fa-regular fa-heart"></i>
                </label>
              </div>   
             
            </a>    
          </article>



        </div>
      </section>
    </main>



  <!--   <?php 
    include "./objects/footer.php"
    ?>
     -->


    <!-- <footer class="auxiliary-menu">
      <h3 class="auxiliary-menu__title">ohmyfood</h3>
      <nav>
        <ul class="auxiliary-menu__all">
          <div class="auxiliary-menu__partnership">
            <li><a class="auxiliary-menu__link" href="#" target="_blank" rel="noreferrer" ref="noopener"><i class="auxiliary-menu__icon fa-solid fa-utensils"></i>Proposer un restaurant</a></li>
            <li><a class="auxiliary-menu__link" href="#" target="_blank" rel="noreferrer" ref="noopener"><i class="auxiliary-menu__icon fa-solid fa-handshake-angle"></i>Devenir partenaire</a></li>
          </div>
          <div class="auxiliary-menu__support">  
            <li><a class="auxiliary-menu__link" href="#" target="_blank" rel="noreferrer" ref="noopener">Mentions légales</a></li>
            <li><a class="auxiliary-menu__link" href="mailto:simon.lm.dev@pm.me?subject=Contact%20depuis%20ohmyfood&body=Message%20predefini" target="_blank" rel="noreferrer" ref="noopener">Contact</a></li>
          </div>
        </ul>
      </nav>
    </footer> -->
   
  </body>
</html>
 