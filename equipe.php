<?php
    include("connect_trombi.php");
    $sql = 'SELECT * FROM apprenants ORDER BY nom_appr';
    $req = $connect->query($sql);
    while($dato = mysqli_fetch_assoc($req)){
        $tablo[]=$dato;
        $nbcol=6;
        $nbligne=3;
    }
?>

<?php include('assets/inc/header.php'); ?>
<div class="container-fluid">
<!-- Section #1 ================================================== -->
            <section class="row" id="para1">
                <h1><strong>L'équipe</strong></h1>

<!-- ------------------------------------------------------ Les apprenants ------------------------------------------------------------>
                <h2><strong>Première promo (2017/2018):</strong> Les apprenants</h2>
                <div id=container>
                    <?php
// on affiche les resultats
                        echo '<table>';
                    $nb=count($tablo);
                    for($i=0;$i<$nb;$i++){
                        $donnees1=$tablo[$i]['photo_appr'];
                        $donnees2=$tablo[$i]['nom_appr'];

                        if($i%$nbcol==0)
                        echo '<tr>';

                        echo"<td class=\"appr\"><img src=".$donnees1." width='100%'><p>$donnees2</p></td>";
                        if($i%$nbcol==($nbcol-1))
                        echo '</tr>';
                    }

                    echo'</table>';

// Libération des résultats
                    $req->free();
                    ?>
                </div>

<!------------------------------------------------------ Les apprenants - fin -------------------------------------------------------->
<!--------------------------------------------------------- Les formateurs ----------------------------------------------------------->
                <h2>Les formateurs</h2>
                <div id=container>
                    <?php
                    include("connect_trombi.php");
                    $sql = 'SELECT * FROM formateurs ORDER BY nom_formateur';
                    $req = $connect->query($sql);
                    while($dato = mysqli_fetch_assoc($req)){
                        $tablo2[]=$dato;
                        $nbcol=6;
                        $nbligne=2;
                    }
// on affiche les resultats
                        echo '<table>';
                    $nb=count($tablo2);
                    for($i=0;$i<$nb;$i++){
                        $donnees1=$tablo2[$i]['photo_formateur'];
                        $donnees2=$tablo2[$i]['nom_formateur'];

                        if($i%$nbcol==0)
                        echo '<tr>';
                        ?>

                        <?php
                        echo"<div class=\"test\"><td class=\"format\"><p class=\"nom\"><img src=".$donnees1."><br/>$donnees2</p></td></div>";
                        if($i%$nbcol==($nbcol-1))
                        echo '</tr>';
                    }

                    echo'</table>';

// Libération des résultats
                    $req->free();
                    ?>
                </div>

<!------------------------------------------------------ Les formateurs - fin -------------------------------------------------------->


<!-- Section #2 ================================================== -->


            </section>

        </div>
        <?php include('assets/inc/footer.php'); ?>
    </body>

</html>
