<?php
class Database
{
    private PDO $pdo;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=php-mvc;charset=utf8mb4";
        $this->pdo = new PDO($dsn, 'root');
    }

    public function query($sql)
    {

        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $posts;
    }
}
