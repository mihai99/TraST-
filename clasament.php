<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TraST</title>
        <link rel="stylesheet" href="styles/clasament.css">
        <link rel="alternate" href="/clasament_rss.php" title="TraST | RSS Top utilizatori" type="application/rss+xml"/>
    </head>
    <body>
        <?php
            include_once 'header.php';
        ?>
         <div class="rss-container">
             <p>Descarca fisierul RSS</p>
             <a href="clasament_rss.php">
                 <img id="rss-img" alt="" src="images/rss_icon.png">
             </a>
         </div>
        <div class="tables-body body-wrapper">
            <div class="left-table">
                <table id="table1">
                    <caption>Topul utilizatorilor in functie de numarul de chestionare rezolvate</caption>
                    <thead>
                    <tr>
                        <th>Loc</th>
                        <th>Username</th>
                        <th>Chestionare rezolvate</th>
                        <th>Chestionare rezolvate corect</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                        require_once 'controllers/tableController.php';
                        $tableController = new tableController('ch-table');
                        $tableController->displayTable();
                    ?>

                    </tbody>
                </table>
            </div>
            <div class="right-table">
                <table id="table2">
                    <caption>Topul utilizatorilor in functie de numarul de intrebari parcurse</caption>
                    <thead>
                    <tr>
                        <th>Loc</th>
                        <th>Username</th>
                        <th>Progres mediu de invatare</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        require_once 'controllers/tableController.php';
                        $tableController = new tableController('inv-table');
                        $tableController->displayTable();
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
      
    </body>
</html>
