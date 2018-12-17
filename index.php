<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 5 exercice 4</title>
    </head>
    <body>
        <div align="center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 align="center">PHP Partie 5 exercice 4</h1>
                    </div>
                </div>
                <div align="center">
                    <p class="text">Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
                    <li>Janvier</li>
                    <li>Février</li>
                    <li>Mars</li>
                    <li>Avril</li>
                    <li>Mai</li>
                    <li>Juin</li>
                    <li>Juillet</li>
                    <li>Aout</li>
                    <li>Septembre</li>
                    <li>Octobre</li>
                    <li>Novembre</li>
                    <li>Décembre</li>
                </div>
                <?php
                $months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
                $remp = str_replace('Aout', 'Août', $months[7]);
                echo '<p>Voici la valeur de la 5em ligne du tableau : ' . $remp . '.</p>';
                ?>
            </div>
        </div>
    </div>
</body>
</html>
