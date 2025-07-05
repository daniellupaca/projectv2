<?php
require_once 'src/Model/User.php';
require_once 'src/Model/AdminUser.php';
require_once 'src/Controller/UserController.php';
require_once 'src/Utils/Helper.php';

session_start();
$user = new User('Ana', 'ana@example.com');
$controller = new UserController();
$controller->register(['name' => 'Ana', 'email' => 'ana@example.com', 'roles' => ['admin']]);
