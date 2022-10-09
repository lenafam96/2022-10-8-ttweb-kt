<?php
require_once 'lecongminh_Connect.php';

$action = $_GET['action'] ?? 'home';
switch ($action) {
    case 'home':
        require_once 'lecongminh_home.php';
        break;
    case 'create':
        require 'lecongminh_create.php';
        break;
    case 'store':
        require 'lecongminh_store.php';
        break;
    case 'edit':
        require 'lecongminh_edit.php';
        break;
    case 'update':
        require 'lecongminh_update.php';
        break;
    case 'delete':
        require 'lecongminh_delete.php';
        break;
}
