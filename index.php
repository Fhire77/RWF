<?php require 'assets/inc/header.php' ?>

   <!-- Section bandeau================================================== -->

 <div class="bandeau">
   <img src="assets/img/bandeauV4.PNG" alt="RWF-Bandeau" id="img-bandeau">
 </div>

   <!-- Caroussel================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="assets/img/1.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="assets/img/2.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="assets/img/3.jpeg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!-- Section Présentation
   ================================================== -->

   <div class="article">
     <div class="content">
       <h1>La «Rural Web Factory», c’est quoi ?</h1>
       <p>C’est une école innovante de codage, 100% gratuite, basée à Aubeterre-sur-Dronne, à destination des demandeurs d’emploi et/ou des bénéficiaires de minimas sociaux, jeunes ou séniors, hommes ou femmes.
        <br>
        <br> C’est une formation courte et intensive de 6 mois qui vise, par des méthodes pédagogiques nouvelles, à apprendre à développer des sites Internet et des applications mobiles pour devenir développeur web, développeur nouvelles technologies ou informaticien de développement.
        <br>
        <br> La « Rural Web Factory » bénéficie du label Grande Ecole du Numérique délivré par l’Etat, lui conférant une reconnaissance nationale.</p>
      </div>
   </div>


   <div class="article">
     <div class="content">
       <h1>Comment s’inscrire ?</h1>
       <p>La formation est ouverte à une promotion de 24 apprenants. Pour y accéder, vous devez remplir le formulaire d’inscription en cliquant <a href="#">ICI</a>.
       <br> Vous devez également vous inscrire obtenir sur le site www.codecademy.fr et obtenir 20 « badges » minimum (10 badges sur le parcours « Html et CSS » et 10 badges sur le parcours et « PHP ».
       <br>
       <br> Vous pouvez télécharger le tuto d’utilisation de la plateforme codecademy en cliquant <a href="#">ICI</a>.
       <br> Si vous réussissez ces tests, un entretien d’entrée vous sera proposé.
       <br>
       <br> Les candidatures sont ouvertes du 21 juin au 31 juillet 2017 à minuit.
       <br> Plus d’infos sur <a href="#">simplon.co/comment-candidater</a>.</p>
   </div>
   </div>

   <!-- Section logo e-learning
   ================================================== -->
   <section class="row" id="accescours">
       <div class="col-md-12">
         <h1>Catalogue de cours e-learning</h1>
         <p class="hidden-lg">Voici les différents thèmes des vidéos d'e-learning : </p>
       <a href="#" ><img id="html" src="assets/img/html5-logo-EF92D240D7-seeklogo.com.png"/></a>
       <a href="#" ><img id="css" src="assets/img/CSS3.png"/></a>
       <a href="#" ><img id="javascript" src="assets/img/js3.png"/></a>
       <a href="#" ><img id="php" src="assets/img/logo_php.png"/></a>
       <a href="#" ><img id="python" src="assets/img/Python-Logo-PNG-Image.png"/></a>
       </div>
    </section>

   <!-- Section Partenaire
   ================================================== -->
   <section class="row " id="partenaire">
       <div class="col-md-12">
         <h1>Partenaires</h1>
       </div>

       <div class="col-lg-12" id="p1">
       <a href="#"><img src="assets/img/logo_simplon.png"/></a>
       <a href="#"><img src="assets/img/logo-aaisc-300x263.jpeg"/></a>
       <a href="#"><img src="assets/img/capemploi.png"/></a>
       </div>

       <div class="col-lg-12" id="p2">
       <a href="#"><img src="assets/img/Charente_(16)_logo_2012.png"/></a>
       <a href="#"><img src="assets/img/logo-ENSC.png"/></a>
       <a href="#"><img src="assets/img/logo-mission-locale-300x227.png"/></a>
       </div>

       <div class="col-lg-12" id="p3">
       <a href="#"><img src="assets/img/logo-pole-emploi.gif139x90.png"/></a>
       <a href="#"><img src="assets/img/logo_NA-horizontal_Coul-300x129.png"/></a>
       <a href="#"><img src="assets/img/Logo_TD_fd_transparent2.png"/></a>
       </div>

       <div class="hidden-lg col-sm-12" id="p4">
       <a href="#"><img src="assets/img/logo_simplon.png"/></a>
       <a href="#"><img src="assets/img/logo-aaisc-300x263.jpeg"/></a>
       <a href="#"><img src="assets/img/capemploi.png"/></a>
       <a href="#"><img src="assets/img/Charente_(16)_logo_2012.png"/></a>
       <a href="#"><img src="assets/img/logo-ENSC.png"/></a>
       <a href="#"><img src="assets/img/logo-mission-locale-300x227.png"/></a>
       <a href="#"><img src="assets/img/logo-pole-emploi.gif139x90.png"/></a>
       <a href="#"><img src="assets/img/logo_NA-horizontal_Coul-300x129.png"/></a>
       <a href="#"><img src="assets/img/Logo_TD_fd_transparent2.png"/></a>
       </div>
    </section>

     <!-- Footer
   ================================================== -->
<?php require 'assets/inc/footer.php' ?>

          <!-- Scripts
   ================================================== -->

   <!-- jQuery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <!-- Javascript de Bootstrap -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

   <script>

       $('body').scrollspy({ target: '.navbar' });
       $('li>a').on('click', function(e) {
         e.preventDefault();
         var hash = this.hash;
         $('html, body').animate({
           scrollTop: $(this.hash).offset().top
         }, 1000, function(){
           window.location.hash = hash;
         });
       });

   </script>
 </body>

</html>
