<?php
    header('Content-type: text/xml');

    $count = 10;
    if (isset($_GET['count'])) {
        $count = intval($_GET['count']);
        if ($count < 1)
            $count = 1;
        if ($count > 10)
            $count = 10;
    }

    echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
        <rss version=\"2.0\">
            <channel>
                <title>TraST | Top utilizatori</title>
                <description>Top " . $count . " cei mai harnici utilizatori ai site-ului TraST</description>
                 <link>/</link>";

    require_once 'php_scripts/DatabaseConnectionManager.php';
    $sql = "SELECT username, intrebari_invatare, chestionare_t, chestionare_c FROM users
                        JOIN user_progress ON users.ID=user_progress.user_id
                        ORDER BY intrebari_invatare DESC, username ASC LIMIT " . $count;
    $req = DatabaseConnectionManager::get_conn()->query($sql);

    $content = $req->fetchAll();

    foreach ($content as $item) {
        echo "<item>";
        $title = $item['username'];
        $link = 'localhost/profile.php?' . $item['username'];
        $description = 'Chestionare rezolvate in total: ' . $item['chestionare_t'] . PHP_EOL;
        $description .= 'Chestionare rezolvate corect: ' . $item['chestionare_c'] . PHP_EOL;
        $description .= 'Intrebari parcurse: ' . $item['intrebari_invatare'];

        echo '<title>' . $title . '</title>';
        echo '<link>' . $link . '</link>';
        echo '<description>' . $description . '</description>';

        echo "</item>";
    }

    echo "  </channel>
        </rss>";



