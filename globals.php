<?php

session_start();

// Criando variáveis GLOBAIS

$BASE_URL = "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"] . "?") . "/";
