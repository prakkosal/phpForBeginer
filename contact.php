<?php

$arrayBook = [
    [
        "name" => "author name one",
        "book" => "Book name one",
        "link" => "https://www.pdfdrive.com/learning-php-mysql-javascript-css-html5-a-step-by-step-guide-to-creating-dynamic-websites-e158606918.html",
    ],
    [
        "name" => "author name two",
        "book" => "Book name two",
        "link" => "https://www.pdfdrive.com/learning-php-mysql-javascript-css-html5-a-step-by-step-guide-to-creating-dynamic-websites-e158606918.html",
    ],
    [
        "name" => "author name three",
        "book" => "Book name three",
        "link" => "https://www.pdfdrive.com/learning-php-mysql-javascript-css-html5-a-step-by-step-guide-to-creating-dynamic-websites-e158606918.html",
    ],
    [
        "name" => "author name four",
        "book" => "Book name four",
        "link" => "https://www.pdfdrive.com/learning-php-mysql-javascript-css-html5-a-step-by-step-guide-to-creating-dynamic-websites-e158606918.html",
    ]
];

function filterArray($array, $keyword)
{
    return array_filter($array, function ($book) use ($keyword) {
        return (strpos($book['name'], $keyword) !== false || strpos($book['book'], $keyword) !== false);
    });
}
$books = filterArray($arrayBook, "author name one");
require "contact.view.php";
