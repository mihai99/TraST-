<?php
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="clasament.csv"');
    require_once 'php_scripts/DatabaseConnectionManager.php';
    $sql = "SELECT username, intrebari_invatare, chestionare_t, chestionare_c FROM users
                        JOIN user_progress ON users.ID=user_progress.user_id
                        ORDER BY intrebari_invatare DESC, username ASC";
    $req = DatabaseConnectionManager::get_conn()->query($sql);

    $title = array('Username',
        'Intrebari parcurse in mediul de invatare',
        'Chestionare rezolvate in total',
        'Chestionare rezolvate corect');
    $content = $req->fetchAll(PDO::FETCH_ASSOC);

    $fp = fopen('php://output', 'wb');

    fputcsv($fp, $title, ',');
    foreach ($content as $item) {
        fputcsv($fp, $item, ',');
    }
    fclose($fp);