<?php

    require_once './php_scripts/DatabaseConnectionManager.php';

    class tableModel
    {

        private $table_name;

        public function __construct($name)
        {
            $this->table_name = $name;
        }

        public function getTableData()
        {
            if ($this->table_name == 'ch-table') { //tabelul pentru top chestionare
                $sql = "SELECT username, chestionare_t, chestionare_c FROM users
                        JOIN user_progress ON users.ID=user_progress.user_id
                        ORDER BY chestionare_c DESC";
                $req = DatabaseConnectionManager::get_conn()->query($sql);
                return $req->fetchAll();
            } else if ($this->table_name == 'inv-table') { //tabelul pentru top invatare
                $sql = "SELECT username, intrebari_invatare FROM users
                        JOIN user_progress ON users.ID=user_progress.user_id
                        ORDER BY intrebari_invatare DESC";
                $req = DatabaseConnectionManager::get_conn()->query($sql);
                return $req->fetchAll();
            }
        }

    }