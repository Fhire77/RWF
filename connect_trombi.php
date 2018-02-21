<?php
    $host_name = "localhost";
    $database = "rwf_trombi"; 
    $user_name = "root"; 
    $password = ""; 
    $connect = mysqli_connect($host_name, $user_name, $password, $database);
    if(mysqli_connect_errno()){
    echo '<p>La connexion au serveur MySQL a échoué: '.mysqli_connect_error().'</p>';
    }
?>