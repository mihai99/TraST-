<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <?php
            include_once 'header.php';
            foreach ($_SESSION as $key => $item) {
                echo '<p>$_SESSION[\'' . $key . '\'] = ';
                print_r($item);
                echo '</p>';
            }
        ?>

    </body>
</html>