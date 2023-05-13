<?php

$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Wear',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Wear',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com'
    ]
];

// Similar with array_filter implementation
function filter($items, $fn)
{
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
};

$filteredBooks = filter(
    $books,
    function ($book) {
        return $book['author'] === 'Andy Wear';
    }
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h1>
        Recommended Books
    </h1>
    <ul>
        <?php
        foreach ($filteredBooks as $book) { ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']  ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</body>

</html>