<?php

require_once('./models/Client.php');

class clientsController{
    private $model;

    function __construct()
    {
        $this->model = new ClientModel;

    }

    function getALL()
    {
        $resultData = $this->model->getALL();
    }

}








?>