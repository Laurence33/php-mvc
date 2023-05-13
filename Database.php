<?php
class Database
{
    private PDO $pdo;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');
        $this->pdo = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($sql)
    {

        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        return $statement;
    }
}
