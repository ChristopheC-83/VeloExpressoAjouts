<div class="pageAccueil">



    <div class="slider">
        <i class="fa-solid fa-circle-left btn-slider" id="previous"></i>
        <i class="fa-solid fa-circle-right btn-slider" id="next"></i>

        <?php foreach ($photos_slider as $photo) : ?>

       
            <img src="<?= URL ?>public/assets/images/slider/<?= $photo['image'] ?>.jpg" alt="" class="img-slider <?= $photo['id'] == 1 ? "" : "dnone" ?>">

        <?php endforeach ?>

        
    </div>


    <h1>Vélo Expresso vous souhaite la bienvenue !</h1>
    <h2>Le magasin de vélo dans la vaunage à votre écoute.</h2>
    <h2>Une équipe, une famille à la disposition de votre (futur ?) vélo !</h2>

    <div class="separateur"></div>

    <h2>Nos marques partenaires</h2>

    <div class="partenaires">

        <a href="https://www.lapierrebikes.com/fr-fr/" class="partenaire-ext" target="_blank">
            <div class="bgc-rotate">
            </div>
            <img src="public/assets/images/partenaires/lapierre.png" alt="">
        </a>
        <a href="https://kellysbike.com/fr/" class="partenaire-ext" target="_blank">
            <div class="bgc-rotate">
            </div>
            <img src="public/assets/images/partenaires/kellys.png" alt="">
        </a>
        <a href="https://www.commencal-store.com/" class="partenaire-ext" target="_blank">
            <div class="bgc-rotate">
            </div>
            <img src="public/assets/images/partenaires/commencal.png" alt="">
        </a>
        <a href="https://www.ibiscycles.com/" class="partenaire-ext" target="_blank">
            <div class="bgc-rotate">
            </div>
            <img src="public/assets/images/partenaires/ibis.png" alt="">
        </a>
        <a href="https://www.transitionbikes.com/" class="partenaire-ext" target="_blank">
            <div class="bgc-rotate">
            </div>
            <img src="public/assets/images/partenaires/transition.png" alt="">
        </a>
        <a href="https://www.rotwild.com/fr" class="partenaire-ext" target="_blank">
            <div class="bgc-rotate">
            </div>
            <img src="public/assets/images/partenaires/rotwild.png" alt="">
        </a>
    </div>

    <div class="separateur"></div>

    <div class="container-reseaux">
        <h2>Pour nous suivre ...?</h2>
        <h3>Essaye si tu peux ! &#x1F61C; </h3>

        <div class="reseaux-logo">
            <a href="https://www.facebook.com/V%C3%A9lo-Expresso-2148219022113845" target="_blank"><img src="<?= URL ?>public/assets/images/accueil/facebook.png" alt="logo facebook" class="img1"></a>
            <a href="https://www.instagram.com/velo_expresso/" target="_blank"><img src="<?= URL ?>public/assets/images/accueil/instagram.png" alt="logo instagram" class="img2"></a>
            <a href="https://www.strava.com/clubs/833016" target="_blank"><img src="<?= URL ?>public/assets/images/accueil/strava.png" alt="logo strava" class="img3"></a>
        </div>


    </div>


    <div class="separateur"></div>

    <div class="container-maps">
        <div class="texte-maps">
            <h2 class="maps">Nous trouver ? C'est ici !</h2>
            <p class="maps"><u>Adresse :</u> 2 Chem. du Pesquier, 30111 Congénies</p>
            <br>
            <p class="maps"><u>Mail : </u>velo-expresso@orange.fr</p>
            <br>
            <p class="maps"><u>Téléphone :</u> 04.66.95.17.09</p>
        </div>
        <div class="carte">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11523.92893993284!2d4.1581525!3d43.7732276!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcccb132f487e1fde!2sV%C3%A9lo%20expresso!5e0!3m2!1sfr!2sfr!4v1656179531515!5m2!1sfr!2sfr" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>




</div>