<?php

$config = require('config.php');
$db = new Database($config['database']);

$params = [
    ':id' => $_GET['id']
];
$note = $db->query("SELECT * FROM note where id = :id", $params)->fetch();
$heading = 'Note';
require 'views/note.view.php';
