<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

// $params = [
// ':id' => $_GET['id']
// ];
$notes = $db->query("SELECT * FROM note where user_id = 1")->findAll();

view('/notes/index.view.php', [
    'heading' => 'Notes',
    'notes' => $notes
]);
