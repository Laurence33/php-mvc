<?php
$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1000 characters is required';
    }

    if (empty($errors)) {

        $params = [
            ':body' => $_POST['body'],
            ':user_id' => $currentUserId
        ];
        $note = $db->query("INSERT INTO note (body, user_id) VALUES(:body, :user_id);", $params);
    }
}

view('/notes/create.view.php', [
    'heading' => 'Create Note',
    'errors' => $errors
]);
