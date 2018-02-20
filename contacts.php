<?php include('assets/inc/header.php'); ?>

     <!-- Para #1
   ================================================== -->
   <section class="row" id="candidature">
       <div class="col-lg-12" id="para1">
         <h1>Adresse de l'école</h1>
         <p>Rural web factory <br>rue moignard <br> 16390 Aubeterre-sur-dronne</p>
       </div>


     <!-- Para #2
   ================================================== -->

       <div class="col-lg-12" id="para2">
         <h1>Mini map de localité</h1>
       </div>

     <!--Para #3
   ================================================== -->

       <div class="col-lg-12" id="para3">
         <h1>Formulaire de contact</h1>
         <br /><br />
        <form name="contact" method="post" action="mailto:" enctype="text/plain">

         <input type="text" name="nom" placeholder="Nom" style="width:450px;height:3em;"/>  <br/><br/>
         <input type="text" name="prenom"  placeholder="Prénom" style="width:450px;height:3em;"/>
          <br/><br/>
         <input type="text" name="email"  placeholder="Email" style="width:450px;height:3em;"/>
          <br/><br/>
         <input type="text" name="tel"  placeholder="Téléphone" style="width:450px;height:3em;"/>
          <br/><br/>
         <textarea id="message" name="user_message" placeholder="Message " style="width:600px;height:12em;"></textarea>
          <br/><br/>

         <div class="button">
          <button type="submit" style="margin-left:300px;">Envoyer </button>
         </div>

        </form>
       </div>


     <!-- Para #4
   ================================================== -->

       <div class="col-lg-12" id="para4">
         <h1>éventuelle adresse mail dédiée</h1>
         <p></p>
       </div>
   </section>

<?php include('assets/inc/footer.php'); ?>
