<?php


    class tableView
    {
        private $table_name;
        private $table_data;

        public function __construct($data_retrieved, $table_name)
        {
            $this->table_data = $data_retrieved;
            $this->table_name = $table_name;
        }

        public function getTableDisplay()
        {
            if (is_array($this->table_data)) {
                $i = 0;
                if ($this->table_name == 'ch-table') {
                    foreach ($this->table_data as $table_datum) {
                        if (isset($_SESSION['username']) && $_SESSION['username'] == $table_datum['username'])
                            echo '<tr style="background-color: #2ed573">';
                        else echo '<tr>';

                        $i++;
                        echo '<td>' . $i . '</td>';
                        echo '<td>' . $table_datum['username'] . '</td>';
                        echo '<td>' . $table_datum['chestionare_t'] . '</td>';
                        echo '<td>' . $table_datum['chestionare_c'] . '</td>';

                        echo '</tr>';
                    }
                } else if ($this->table_name == 'inv-table') {
                    foreach ($this->table_data as $table_datum) {
                        if (isset($_SESSION['username']) && $_SESSION['username'] == $table_datum['username'])
                            echo '<tr style="background-color: #2ed573">';
                        else echo '<tr>';

                        $i++;
                        echo '<td>' . $i . '</td>';
                        echo '<td>' . $table_datum['username'] . '</td>';
                        echo '<td>' . $table_datum['intrebari_invatare'] . '</td>';

                        echo '</tr>';
                    }
                }
            }
        }
    }