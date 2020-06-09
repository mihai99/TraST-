<!DOCTYPE html>
<html lang="ro" dir="ltr">

    <head>
        <title>TraST</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/invatare/invatare.css">
    </head>

    <body>
        <?php
            include_once 'header.php';
        ?>
        <div class="body-wrapper">
            <div class="container-intrebari">
                <div class="container-intrebari-left">
                    <h2>Mediu de invatare al intrebarilor pentru obtinerea permisului</h2>
                    <p class="tab semne-desc-txt">
                        Acesta este mediul de invatare al intrebarilor, identice cu cele din cadrul
                        chestionarului de examinare teoretic pentru obtinerea permisului auto cat. B, si pentru a te
                        pregati mai bine pentru rezolvarea chestionarelor.
                    </p>
                </div>
                <div class="container-intrebari-right">
                    <?php
                        if (!isset($_SESSION['username'])) {
                            echo '<div class="not-logged">Nu sunteti logat! Logati-va pentru a putea parcurge intrebarile.</div>';
                        } else {
                            if ($_SESSION['progres'] == $_SESSION['intrebari_totale']) {
                                echo '<div class="completed">Felicitari! Ati parcurs toate intrebarile!.</div>';
                            } else {
                                echo '<a href="invatare-intrebari.php"> Click aici pentru a incepe sa raspunzi la intrebari </a>';
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="container-semne-circulatie">
                <div class="semne-info">
                    <h2>Semne de circulatie, explicate</h2>
                    <br>
                    <br>
                    <div class="semne-desc-txt">
                        <p>
                            Orice detinator de permis de conducere, indiferent de categoria pe care o detine,
                            trebuie sa cunoasca semnificatia indicatoarelor rutiere pentru a putea circula in
                            siguranta pe drumurile publice si pentru a nu pune in pericol participantii la
                            trafic.
                        </p>
                        <br>
                        <p> Majoritatea indicatoarelor rutiere sunt montate pe partea dreapta sensului de mers, dar
                            nu
                            este
                            o
                            regula. Acestea pot fi montate de asemenea si pe partea stanga, deasupra sensului de
                            mers
                            sau
                            chiar
                            dupa intersectii in cazul indicatoarelor de dirijare a acestora, instalarea
                            indicatoarelor
                            depinzand
                            in mare parte de asigurarea conditiilor in care acestea sa poata fi observate.
                        </p>
                        <br>
                        <p> Pentru a putea fi vazute usor si pentru a se putea face rapid diferenta de semnificatie
                            dintre
                            ele,
                            semnele de circulatie au forme si culori distincte in functie de categoria din care fac
                            parte.
                        </p>
                    </div>
                </div>
                <div class="semne-circulatie">
                    <ul>
                        <li>
                            <a href="pages/invatare-semne/indicatoare-prioritate.php">
                                <img alt="" src="images/invatare/semne%20circulatie/icons/prioritate-icon.png">
                                Indicatoare rutiere de prioritate
                            </a>
                        </li>
                        <li>
                            <a href="pages/invatare-semne/indicatoare-interzicere.php">
                                <img alt="" src="images/invatare/semne%20circulatie/icons/interzis-icon.png">
                                Indicatoare de interzicere sau restrictie
                            </a>
                        </li>
                        <li>
                            <a href="pages/invatare-semne/indicatoare-obligare.php">
                                <img alt="" src="images/invatare/semne%20circulatie/icons/obligare-icon.png">
                                Indicatoare rutiere de obligare
                            </a>
                        </li>
                        <li>
                            <a href="pages/invatare-semne/indicatoare-avertizare.php">
                                <img alt="" src="images/invatare/semne%20circulatie/icons/avertizare-icon.png">
                                Indicatoare rutiere de avertizare
                            </a>
                        </li>
                        <li>
                            <a href="pages/invatare-semne/indicatoare-informare.php">
                                <img alt="" src="images/invatare/semne%20circulatie/icons/informare-icon.png">
                                Indicatoare rutiere de informare
                            </a>
                        </li>
                        <li>
                            <a href="pages/invatare-semne/indicatoare-orientare.php">
                                <img alt="" src="images/invatare/semne%20circulatie/icons/orientare-icon.png">
                                Indicatoare rutiere de orientare
                            </a>
                        </li>
                        <li>
                            <a href="pages/invatare-semne/indicatoare-lucrari.php">
                                <img alt="" src="images/invatare/semne%20circulatie/icons/lucrari-icon.png">
                                Indicatoare semnalizare lucrari pe carosabil
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-legislatie">
                <div class="legislatie-info">
                    <h2>Codul rutier - <strong>ACTUALIZAT 2018</strong></h2><br>
                    <p><strong>ORDONANȚA DE URGENȚĂ</strong> nr. 195/2002 privind circulația pe drumurile publice,
                        Republicată și
                        Actualizată 2018</p><br>
                    <span>Actualizată prin:</span>
                    <ul>
                        <li>
                            <span>Ordonanța de urgență 41/2016 privind stabilirea unor măsuri de simplificare la nivelul
                                administrației publice centrale și pentru modificarea și completarea unor acte normative
                                (publ. în M.Of. nr.490 din 30.06.2016)</span>
                        </li>
                        <li>
                            <span>Legea 93/2016 pentru modificarea art. 33 alin. (2) din Ordonanța de urgență a
                                Guvernului nr. 195/2002 privind circulația pe drumurile publice (publ. în M.Of. nr.369
                                din 13.05.2016)</span>
                        </li>
                    </ul>
                    <img alt="" src="images/invatare/cod_rutier.jpg" id="cod-rutier">
                </div>
                <div class="legislatie-optiuni">
                    <h3>Capitole:</h3>
                    <ul class="inv-list">
                        <li>
                            <a href="pages/invatare-legislatie/cap1.php">I.Dispozitii generale</a>
                        </li>
                        <li>
                            <a href="pages/invatare-legislatie/cap2.php">II.Vehiculele</a>
                        </li>
                        <li>
                            <a href="pages/invatare-legislatie/cap3.php">III.Conducatorii de vehicule</a>
                        </li>
                        <li>
                            <a href="pages/invatare-legislatie/cap4.php">IV.Semnalizarea rutiera</a>
                        </li>
                        <li>
                            <a href="pages/invatare-legislatie/cap5.php">V.Reguli de circulatie</a>
                        </li>
                        <li>
                            <a href="pages/invatare-legislatie/cap6.php">VI.Infractiuni si pedepse</a>
                        </li>
                        <li>
                            <a href="pages/invatare-legislatie/cap7.php">VII.Raspunderea contraventionala</a>
                        </li>
                        <li>
                            <a href="pages/invatare-legislatie/cap8.php">VIII.Cai de atac impotriva procesului-verbal de
                                contestare a contraventiei
                            </a>
                        </li>
                        <li>
                            <a href="pages/invatare-legislatie/cap9.php">IX.Atributii ale unor ministere si ale altor
                                autoritati ale administratiei publice</a>
                        </li>
                        <li>
                            <a href="pages/invatare-legislatie/cap10.php">X.Dispozitii finale</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
            include_once 'footer.php';
        ?>
    </body>
</html>
