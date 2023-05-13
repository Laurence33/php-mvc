<?php
require('functions.php');
// require('router.php');
require('Database.php');


$config = require('config.php');
$db = new Database($config['database']);

$params = [
    ':id' => $_GET['id']
];
$posts = $db->query("SELECT * FROM posts where id = :id", $params)->fetchAll();
dd($posts);
