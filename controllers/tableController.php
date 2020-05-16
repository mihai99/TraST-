<?php

    require_once './models/tableModel.php';
    require_once './views/tableView.php';

    class tableController
    {
        private $table_name;
        private $model;
        private $view;

        public function __construct($table_name)
        {
            $this->table_name = $table_name;
            $this->model = new tableModel($this->table_name);
        }

        public function displayTable()
        {
            $data = $this->model->getTableData();

            $this->view = new tableView($data, $this->table_name);
            $this->view->getTableDisplay();
        }
    }