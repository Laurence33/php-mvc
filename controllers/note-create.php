<?php
$config = require('config.php');
$db = new Database($config['database']);

$currentUserId = 1;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (strlen($_POST['body']) === 0) {
        $errors['body'] = 'A body is required';
    }

    if (strlen($_POST['body']) > 1000) {
        $errors['body'] = 'The body can not be more than 1000 characters.';
    }

    if (empty($errors)) {

        $params = [
            ':body' => $_POST['body'],
            ':user_id' => $currentUserId
        ];
        $note = $db->query("INSERT INTO note (body, user_id) VALUES(:body, :user_id);", $params);
    }
}


$heading = 'Create Note';
require 'views/note-create.view.php';
