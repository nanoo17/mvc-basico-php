<?php
require('Model/connection.php');
$con = new connection();
$usuarios = $con->getUsers();
require('Views/V_verUsuarios.php');
