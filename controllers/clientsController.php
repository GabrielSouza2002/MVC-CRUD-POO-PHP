<?php

require_once('./models/Client.php');

class clientsController{
    private $model;

    function __construct()
    {
        $this->model = new ClientModel();

    }

    function getALL()
    {
        $resultData = $this->model->getALL();
        //print_r($resultData);
        require_once('./views/index.php');
    }

}








?>