<?php

$config = require('config.php');
$db = new Database($config['database']);

$currentUserId = 1;
$params = [
    ':id' => $_GET['id']
];
$note = $db->query("SELECT * FROM note where id = :id", $params)->fetch();

if (!$note) {
    abort();
}

if ($note['user_id'] == $currentUserId) {
    abort(Response::FORBIDDEN);
}
$heading = 'Note';
require 'views/note.view.php';
