<!-- Rotas/ chamada de métodos-->

<?php

require_once('./controllers/clientsController.php');

$action = !empty($_GET['a']) ? $_GET['a'] : 'getALL';

$controller = new clientsController();
$controller->{$action}();










?>