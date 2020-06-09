<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <link rel="icon" href="./favicon.ico" type="image/ico">
        <link rel="stylesheet" type="text/css" href="styles/login-modal.css">
        <link rel="stylesheet" type="text/css" href="/styles/home-page.css">
        <script src="./javascript/page-loaders-utils.js"></script>
        <script src="./javascript/modal-handler.js"></script>
        <script src="./javascript/menu-handler.js"></script>
        <script src="./javascript/ajax/account-handler.js"></script>
        <script src="./javascript/cookies.js"></script>
        <title>TRaST</title>
    </head>

    <body>

        <?php
            include_once 'header.php';
        ?>

        <div id="content">
            <div class="row first">
                <div class="about">
                    <div class="description">
                        <p>
                            TraST este un serviciu Web pus la dispozitie pentru orice persoane care doreste sa se
                            pregateasca cat mai bine pentru partea teoretica a examenului auto.</p>
                        <p>
                            Prin informatiile puse
                            la dispozitie de aceasta aplicatie, utilizatorii pot invata cat mai repede si cat mai
                            eficient tot ce au nevoie pentru a trece examenul teoretic pentru obtinerea permisului auto.
                        </p>

                        <button class="main-button" onclick="location.href='register.php'">Get Started</button>
                        <button class="main-button" onclick="location.href='documentatie/user_manual.html'">
                            Manual utilizator
                        </button>
                        <button class="main-button" onclick="location.href='documentatie/app_arhitecture.html'">
                            Arhitectura aplicatiei
                        </button>
                    </div>
                    <div class="highscores-container">
                        <div class="highscores">
                            <p>Highscores</p>
                            <table>
                                <tr>
                                    <th>Rank</th>
                                    <th>Name</th>
                                    <th>Score</th>
                                </tr>
                                <?php
                                    include_once 'php_scripts/printTopRank.php';
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="gallery">
                    <img src="/images/gallery/image1.jpg" id="gallery-image-1" class="gallery-image show" alt="">
                </div>
            </div>
            <div class="row articles">
                <h3>Useful links:</h3>
                <article>
                    <img alt="" src="/images/articles/article1.jpg">
                    <div class="title">Anvelopele de vară. Recomandări pentru folosirea de pneuri aferente fiecărui
                        sezon
                    </div>
                    <div class="date">25 martie 2019</div>
                    <p>
                        Indiferent de ce maşină conduceţi, Dacia, BMW, Audi sau Toyota, cu propulsie, tracţiune sau
                        integrală,
                        pneurile sunt singurele elemente de contact cu suprafaţa de rulare. Prin urmare, tipul şi
                        starea
                        acestora sunt esenţiale pentru siguranţă. Din păcate, în România, legea nu sancţionează
                        decât lipsa
                        caciucurilor de iarnă, când drumul este acoperit cu zăpadă, gheaţă sau polei. Dar utilizarea
                        acestor
                        pneuri vara este la fel de periculoasă.
                    </p>
                    <a class="secondary-button"
                       href="https://chestionare.auto15.ro/utile/anvelopele-de-vara-recomandari-pentru-folosirea-de-pneuri-aferente-fiecarui"
                       target="_blank">Check it out</a>
                </article>
                <article>
                    <img alt="" src="/images/articles/article2.jpg">
                    <div class="title">De ce să folosești antigelul și vara?</div>
                    <div class="date">30 martie 2019</div>
                    <p>
                        Mecanicii îi sfătuiesc pe şoferi să nu renunţe vara la antigel dacă au cumva acest obicei.
                        Antigelul
                        protejează instalaţiile de rugină şi creşte temperatura de fierbere a lichidului de răcire.
                        Mecanicii spun că e bine ca antigelul, lichidul care asigură răcirea motorului, să fie
                        folosit pe toată
                        durata anului.
                        „E important de ştiut că există şi motoare cu răcire pe aer, însă acestea se întâlnesc mai
                        frecvent la
                        motociclete decât la maşini. Antigelul preia căldura degajată de motor şi o cedează mediului
                        înconjurător prin radiator. Antigelul este important pe tot parcursul anului”, spune
                        mecanicul consultat
                        de echipa blogului autoeconom.ro, citat de adevarul.ro.
                    </p>
                    <a class="secondary-button"
                       href="https://chestionare.auto15.ro/utile/de-ce-sa-folosesti-antigelul-si-vara"
                       target="_blank">Check it out</a>
                </article>
                <article>
                    <img alt="" src="/images/articles/article3.jpg">
                    <div class="title">ÎN TRAFIC. Cum evităm unghiurile moarte ale camioanelor</div>
                    <div class="date">22 martie 2020</div>
                    <p>
                        Multe persoane nu realizează că automobilele mari au puncte moarte pe fiecare parte a
                        vehiculului şi
                        presupun că şoferii de camion pot vedea toate autovehiculele de pe drum, deoarece stau la o
                        înălţime mai
                        mare. Această mentalitate, însă, poate duce la situaţii periculoase.
                        Din fericire, conducătorii de maşini mici se pot educa cu privire la aceste puncte oarbe ale
                        camioanelor
                        pentru a reduce riscul de coliziune. Pe de altă parte, şoferii de camioane pot reduce şi ei
                        posibilitatea accidentelor prin instalarea de oglinzi suplimentare care să le crească
                        vizibilitatea.
                    </p>
                    <a class="secondary-button"
                       href="https://chestionare.auto15.ro/utile/in-trafic-cum-evitam-unghiurile-moarte-ale-camioanelor"
                       target="_blank">Check it out</a>
                </article>
                <article>
                    <img alt="" src="/images/articles/article4.jpg">
                    <div class="title">Verifică-ți mașina! Dacă nu ai aceste obiecte în portbagaj, poți fi amendat
                    </div>
                    <div class="date">25 februarie 2019</div>
                    <p>
                        Codul Rutier stabileşte la articolul 8 că, pentru a fi condus pe drumurile publice, orice
                        autovehicul
                        trebuie dotat cu trusa medicală de prim ajutor, două triunghiuri reflectorizante şi un
                        stingător de
                        incendiu.
                        În cazul în care încalci această regulă, poţi fi sancţionat cu o amendă din clasa a ÎI-a (4
                        sau 5
                        puncte-amendă).
                        Din 2016, potrivit avocatnet.ro, un punct-amendă reprezintă valoric 10% din salariul minim
                        brut pe
                        economie, conform Codului rutier. Având în vedere că, în acest moment, salariul minim este
                        de 1.050 de
                        lei, un punct-amendă este egal cu 105 lei.
                        Aşadar, dacă nu ai autoturismul dotat cu trusa medicală, triunghiuri reflectorizante şi
                        extinctor poţi
                        fi amendat, în 2016, cu 420 sau cu 525 de lei. </p>
                    <a class="secondary-button"
                       href="https://chestionare.auto15.ro/utile/verifica-ti-masina-daca-nu-ai-aceste-obiecte-in-portbagaj-poti-fi-amendat"
                       target="_blank">Check it out</a>
                </article>
                <article>
                    <img alt="" src="/images/articles/articel5.jpg">
                    <div class="title">Cum pregătim mașina pentru primăvară. Verificați uleiul, frânele sau
                        direcția
                    </div>
                    <div class="date">10 ianuarie 2029</div>
                    <p>
                        Schimbarea anvelopelor, a uleiului de motor, verificarea plăcuţelor de frână sau a
                        sistemului de
                        direcţie sunt doar câteva dintre aspectele care trebuie luate în calcul la început de
                        primăvară.
                        Specialiştii spun că, pentru o bună întreţinere a maşinii, este obligatorie o revizie
                        tehnică. La maşină
                        nu trebuie să bată ori să troncăne nimic, totul trebuie să fie în parametrii.
                        Uleiul de motor trebuie schimbat deoarece unul cu o vâscozitate mai mare este mai bun pentru
                        sezonul
                        cald. Iar lichidul de parbriz de iarnă este necesar să fie înlocuit cu cel estival pentru că
                        acesta din
                        urmă are proprietăţi antistatice, antiaburire şi anticoroziune. Specialiştii recomandă
                        înlocuirea
                        uleiului şi a filtrelor la fiecare 5.000 de kilometri, explicaţia fiind că schimbarea
                        temperaturilor
                        poate determina formarea condensului şi apariţia acizilor în uleiul de motor. </p>
                    <a class="secondary-button"
                       href="https://chestionare.auto15.ro/utile/cum-pregatim-masina-pentru-primavara-verificati-uleiul-franele-sau-directia"
                       target="_blank">Check it out</a>
                </article>
                <article>
                    <img alt="" src="/images/articles/article6.jpg">
                    <div class="title">Cum să conduci pe geruri năprasnice. Câteva sfaturi practice</div>
                    <div class="date">15 martie 2019</div>
                    <p>
                        Mulţi dintre şoferi se gândesc de două ori dacă să plece la volan atunci când nige sau
                        atunci când
                        temperaturile de afară scad mult sub zero grade. Sfaturile de mai jos pot fi un suport real
                        în lupta
                        şoferilor cu gerul năprasnic care oricum va transforma destule maşini în blocuri inerte de
                        metal
                        îngheţat.
                        Testează cu un densimetru special punctul de îngheţ al antigelului, şi la nevoie
                        completează-l. Dacă pe
                        parcursul verii aţi avut pierderi de lichid de răcire şi aţi completat nivelul cu apă
                        distilată, este
                        posibil ca acesta să-şi fi micşorat densitatea. Ca să asigure un punct de congelare de -35
                        sau -40 de
                        grade C, densitatea acestuia trebuie corectată corespunzător la un atelier de service. Un
                        sfat de urmat
                        este să nu măsori cu testerul special imediat după ce ai completat întrucât rezultatul poate
                        fi
                        eronat. </p>
                    <a class="secondary-button"
                       href="https://chestionare.auto15.ro/utile/cum-sa-conduci-pe-geruri-naprasnice-cateva-sfaturi-practice"
                       target="_blank">Check it out</a>
                </article>
                <article class="hide-md">
                    <img alt="" src="/images/articles/article7.jpg">
                    <div class="title">S-a aprins becul la benzină! Câți kilometri mai poți merge „pe roșu”?</div>
                    <div class="date">30 martie 2019</div>
                    <p>
                        Sunt mulţi factori care pot influenţa distanţa pe care o mai poţi parcurge o dată ce s-a
                        aprins
                        indicatorul care te trimite la benzinărie: consumul maşinii, condiţiile meteo, tipul de
                        teren pe care te
                        afli şi stilul de condus.
                        Ca să poţi face o estimare, potrivit ProMotor, e suficient să-ţi cunoşti consumul mediu şi
                        capacitatea
                        rezervorului. Şoferii îşi cunosc de obicei consumul, asta în cazul în care nu au computer de
                        bord care
                        să-l afişeze, iar capacitatea rezervorului o poţi afla din talonul maşinii. În majoritatea
                        maşinilor,
                        becul indicatorului de combustibil se aprinde în jurul valorii de 10% din total. Atenţie,
                        această
                        valoare poate să varieze de la marcă la marcă, deci calculul este estimativ şi poate
                        prezenta
                        diferenţe. </p>
                    <a class="secondary-button"
                       href="https://chestionare.auto15.ro/utile/s-a-aprins-becul-la-benzina-cati-kilometri-mai-poti-merge-pe-rosu"
                       target="_blank">Check it out</a>
                </article>
                <article class="hide-md">
                    <img alt="" src="/images/articles/article8.jpg">
                    <div class="title">Cum să dezgheți eficient parbrizul?</div>
                    <div class="date">12 martie 2019</div>
                    <p>
                        Cea mai bună soluție pentru a dezgheța parbrizul iarna rămâne spray-ul special conceput
                        pentru
                        îndepărtarea cristalelor de gheață.
                        Totuși, dacă nu ai la îndemână un astfel de spray, poți folosi o soluție dintr-un litru de
                        apă și 300 de
                        mililitri de alcool sanitar. Toarnă soluția într-un recipient cu pulverizator și
                        pulverizează pe tot
                        parbrizul, în timp ce lași motorul pornit și aerul condiționat la maximum. În maxim trei
                        minute, gheața
                        este topită și poți curăța parbrizul cu o racletă fină. În loc de alcool sanitar, mai poți
                        folosi o
                        soluție din două părți oțet și o parte apă rece.
                        Există şi alte trucuri care vă pot ajuta să scăpați repede de neplăcerea geamurilor
                        îngheţate de la
                        maşină. Aveţi nevoie de un castron sau lighean în care amestecaţi apă rece cu puţin oţet,
                        apoi înmuiaţi
                        o cârpă în acest amestec şi ştergeţi parbrizul. </p>
                    <a class="secondary-button"
                       href="https://chestionare.auto15.ro/utile/cum-sa-dezgheti-eficient-parbrizul"
                       target="_blank">Check it out</a>
                </article>
            </div>
        </div>
        <?php
            include_once 'footer.php';
        ?>
        <?php

            if (isset($_SESSION['logged_in'])) {
                unset($_SESSION['logged_in']);
                echo '<div id="login-success"><p>V-ati logat cu succes!</p></div>';
            }
            if (isset($_SESSION['logged_out'])) {
                unset($_SESSION['logged_out']);
                echo '<div id="login-success"><p>V-ati delogat cu succes!</p></div>';
            }
            if (isset($_SESSION['registered'])) {
                unset($_SESSION['registered']);
                echo '<div id="login-success"><p>Ati fost inregistrat cu succes!</p></div>';
            }
        ?>
    </body>

</html>
