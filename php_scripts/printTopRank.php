<?php
    $sql = "SELECT username, round((chestionare_t + chestionare_c*4 + intrebari_invatare*5)/10,2) as score FROM users
            JOIN user_progress up ON users.id = up.user_id
            ORDER BY score DESC, intrebari_invatare DESC, username ASC LIMIT 10";

    require_once 'DatabaseConnectionManager.php';
    $req = DatabaseConnectionManager::get_conn()->query($sql);
    $result = $req->fetchAll();
    foreach ($result as $index => $value) {
        echo '<tr>';
        echo '<td>' . ($index + 1) . '</td>';
        echo '<td>' . $value['username'] . '</td>';
        echo '<td>' . $value['score'] . '</td>';
        echo '</tr>';
    }