<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TraST</title>
        <link rel="stylesheet" href="styles/clasament.css">
    </head>
    <body>
        <?php
            include_once 'header.php';
        ?>
        <h1>Topul celor mai sarguinciosi</h1>
        <div class="tables-body">
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
            <div style="clear: both"></div>
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
        <?php
            include_once 'footer.php';
        ?>
    </body>
</html>