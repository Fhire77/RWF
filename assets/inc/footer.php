<<<<<<< HEAD
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

</script>
</body>

</html>
=======
<footer class="row text-center">
    <p>Copyright Rural Web Factory - 2017- <a href="#">Mentions légales</a></p>
</footer>

</div> <!-- Fermeture container-fluid -->
>>>>>>> bandeau-la-galere
