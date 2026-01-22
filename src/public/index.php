<?php
declare(strict_types=1);
/*
 * PHP Simple File Manager
 * Copyright Daniel Wojtak (etherneco)
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../class/lib.php';
require_once __DIR__ . '/../controller/controller.php';
require_once __DIR__ . '/../controller/main.controller.php';

$mainController = new MainController();
$mainController->index();
