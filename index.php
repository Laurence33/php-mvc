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

require 'views/index.view.php';
