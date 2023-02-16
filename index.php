<!-- Rotas/ chamada de métodos-->

<?php

require_once('./controllers/clientsController.php');


$controller = new clientsController();

$action = !empty($_GET['a']) ? $_GET['a'] : 'getALL';

$controller->{$action};










?>