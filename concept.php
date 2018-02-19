<!DOCTYPE html>
<html>

 <head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Rural Web Factory</title>
   <meta name="description" content="Rural Web Factory">
   <link rel="stylesheet" type="text/css" href="style.css">
   <!--<link rel="stylesheet" href="MaquetteV2.css" media="screen" /> -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



 </head>

 <body data-spy="scroll" data-target=".navbar">

 <div class="container-fluid">

       <!-- En-tête logo
   ================================================== -->
   <div class="row" id="header">
         <a href="index(1).html"><img src="assets/img/logo-rwf.png" alt="" id="rwf"/></a>
         <a id="reseauxsociaux1" class="btn btn-default" href="https://fr-fr.facebook.com/RuralWebFactory/"><i class="fa fa-facebook fa-2x"></i></a>
         <a id="reseauxsociaux2" class="btn btn-default" href="https://twitter.com/ruralwebfactory"><i class="fa fa-twitter fa-2x"></i></a>
   </div>
   <!-- Navigation
   ================================================== -->
   <section class="row">
   <nav class="navbar navbar-inverse" role="navigation">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="index(1).html">Accueil</a>
     </div>

     <div class="collapse navbar-collapse">
       <ul class="nav navbar-nav">
         <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="qui.html">Qui sommes-nous ?<span class="caret"></span></a>
           <ul class="dropdown-menu">
               <li><a href="concept.html">Concept</a></li>
               <li><a href="faq.html">FAQ</a></li>
           </ul>
         </li>
         <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="ecole.html">L'école<span class="caret"></span></a>
           <ul class="dropdown-menu">
               <li><a href="projets.html">Projets</a></li>
               <li><a href="equipe.html">L'équipe</a></li>
               <li><a href="formation.html">La formation</a></li>
           </ul>
         </li>
         <li> <a href="#">E-learning</a> </li>
         <li> <a href="#">Espace membre</a> </li>
         <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="candidature.html">Candidatures<span class="caret"></span></a>
           <ul class="dropdown-menu">
               <li><a href="candidature1.html" id="interesse">La formation vous intéresse ?</a></li>
               <li><a href="candidature2.html" id="entreprise">Vous êtes une entreprise ?</a></li>
           </ul>
         </li>
         <li> <a href="contacts.html">Contacts</a> </li>
       </ul>
     </div>
   </nav>
   </section>

   <!-- Caroussel
   ================================================== -->
   <section class="row">
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>

          <div class="carousel-inner">
           <div class="item active"> <img class="img-responsive" src="assets/img/1.jpg" alt="RWF">
           </div>

           <div class="item"> <img class="img-responsive" src="assets/img/2.jpg" alt="RWF">
           </div>

           <div class="item"> <img class="img-responsive"src="assets/img/3.jpeg" alt="RWF">
           </div>
          </div><!-- Fermeture carousel-inner -->

           <a class="left carousel-control" href="#myCarousel" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left"></span>
             <span class="sr-only">Previous</span>
           </a>

           <a class="right carousel-control" href="#myCarousel" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right"></span>
             <span class="sr-only">Next</span>
           </a>


     </div> <!-- Fermeture carousel slide -->
   </section>

     <!-- Section #1
   ================================================== -->
   <section class="row jumbotron" id="">
       <div class="col-lg-12">
       <h1>Apprendre à coder à la campagne</h1>
       <p>Aujourd'hui la filière numérique est en plein essor et offre de nombreux débouchés en matière de développement web (potentiel de 30 000 développeurs en France).
       Or le territoire fait face à une carence de codeurs qualifités pour développer des projets web. C'est pourquoi, l'école Rural Web Factory propose un cursus de formation intensif et gratuit.
      Pendant 6 mois, les candidats retenus se concentreront sur l'apprentissage des différents langages informatiques indispensables à la création de sites web et de développement web. </p><br />
      <p>Rural Web Factory s'appuie sur l'expertise de simplo.co, fabrique sociale de codeurs basée à Montreuil pour les aspects pédagogiques.
        Le projet est fondé sur un partenariat avec Pôle Emploi, la Mission locale, la CDC et l'Espace numérique sur Charente.</p>
       </div>
   </section>

    <!-- Section #2
   ================================================== -->
   <section class="row jumbotron" id="">
     <div class="col-lg-12">
     <h1>Un espace propice à l'innovation</h1>
     <p>Le lieu de la formation est tout d'abord un endroit attractif : situé en pleine campagne dans le village d'Aubeterre-sur-Dronne, les stagiaires pourront profiter d'un cadre exceptionnel dans l'un des plus beaux villages de France.<br/>
     En lien avec simplon.co, la formation des codeurs ruraux sera dispensée dans l'école maternelle d'Aubeterre dans l'ancien centre de découvertes, dans un lieu propice à l'innovation et à la création puisqu'il comprend plusieurs salles en open-space, et d'un lieu de détente.</p>
     </div>
   </section>

    <!-- Section #3
   ================================================== -->
   <section class="row jumbotron" id="">
     <div class="col-lg-12">
    <h1>Un défi à relever</h1>
    <p>L'ancrage territorial doit permettre aux entreprises locales d'intervenir d'une façon ou d'une autre dans l'aventure Rural Web Factory :<br/>
      - en proposant des réalisations concrètes ax élèves, prennant la forme de projets tuteurés (refonte de sites déjà existants...)<br/>
      - en apportant leur savoir-faire / expérience lors d'ateliers thématiques : (voir les divers intervennants)<br/>
      - en repérant des profils intéressants pour développer leurs activités au sein de l'entreprise.</p>
    <p>Enfin expliquer que ce projet doit créer une dynamique dans les diverses communes adjacentes afin d'impulser, de susciter, de fomenter des initiatives numériques et de réunir ainsi des acteurs pilotes du développement amenés à rayonner à echelle départementale et régionale...</p>
     </div>
   </section>

     <!-- Footer
   ================================================== -->
   <footer class="row text-center">
       <p>Copyright Rural Web Factory - 2017- <a href="#">Mentions légales</a></p>
   </footer>

   </div> <!-- Fermeture container-fluid -->

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
     });
   </script>
 </body>

</html>
