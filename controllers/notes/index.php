<?php

$config = require('config.php');
$db = new Database($config['database']);

// $params = [
// ':id' => $_GET['id']
// ];
$notes = $db->query("SELECT * FROM note where user_id = 1")->findAll();

$heading = 'Notes';
require 'views/notes/index.view.php';