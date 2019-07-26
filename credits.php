<?php
session_start();
include('./controllers/getLastBoss.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Credits</title>
</head>
<body id="backgroundCredit">
    <?php include('./templates/header.html'); ?>
    <main>
        <section>
             <div id="creditGame">
                <p class="fadeIn txtOne">Félicitations, après avoir parcouru toutes sortes de monstres et divers paysages vous venez de prendre la place .... de votre père!</p>
                <p class="fadeIn txtTwo">Qui l'eut cru ?</p>
                <p class="fadeIn txtThree">Un site dont vous êtes le héros par : Corentin Richard-Vitton, Wesley Klein, Jérôme Moulin, Thibaut Surrel</p>
                <div class="buttonRestart fadeInBtn btnFour">
                    <a class="restart" href="/">Recommencer</a>
                </div>
             </div>
        </section>
    </main>    
</body>
</html>