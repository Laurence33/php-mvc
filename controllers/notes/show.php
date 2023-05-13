<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;
$params = [
    ':id' => $_GET['id']
];
$note = $db->query("SELECT * FROM note where id = :id", $params)->findOrFail();

authorize($note['user_id'] === $currentUserId);

view('/notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note
]);
