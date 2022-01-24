<?php

session_start();
session_destroy();

header('Location: http://localhost:3009/ejercicio01/inicio_sesion.php');
exit;
