<?php
$config = require('config.php');
$db = new Database($config['database']);

$currentUserId = 1;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $params = [
        ':body' => $_POST['body'],
        ':user_id' => $currentUserId
    ];
    $note = $db->query("INSERT INTO note (body, user_id) VALUES(:body, :user_id);", $params);
}


$heading = 'Create Note';
require 'views/note-create.view.php';
