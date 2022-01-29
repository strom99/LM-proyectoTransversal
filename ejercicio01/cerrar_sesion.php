<?php

session_start();
session_destroy();

header('Location: http://localhost:3008/ejercicio01/inicio_sesion.php');
exit;
