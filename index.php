<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>

    <body>
            <?php
            $arrayBook= [
                    [
                        "name"=>"author name one",
                        "book"=>"Book name one",
                        "link"=>"https://www.pdfdrive.com/learning-php-mysql-javascript-css-html5-a-step-by-step-guide-to-creating-dynamic-websites-e158606918.html",
                    ],
                    [
                        "name"=>"author name two",
                        "book"=>"Book name two",
                        "link"=>"https://www.pdfdrive.com/learning-php-mysql-javascript-css-html5-a-step-by-step-guide-to-creating-dynamic-websites-e158606918.html",
                    ],
                    [
                        "name"=>"author name three",
                        "book"=>"Book name three",
                        "link"=>"https://www.pdfdrive.com/learning-php-mysql-javascript-css-html5-a-step-by-step-guide-to-creating-dynamic-websites-e158606918.html",
                    ],
                    [
                        "name"=>"author name four",
                        "book"=>"Book name four",
                        "link"=>"https://www.pdfdrive.com/learning-php-mysql-javascript-css-html5-a-step-by-step-guide-to-creating-dynamic-websites-e158606918.html",
                    ]
                ];
                
                function filterArray($array, $keyword) {
                      return array_filter($array, function($book) use ($keyword) {
                            return (strpos($book['name'], $keyword) !== false || strpos($book['book'], $keyword) !== false);
                        });
                    }
                $books = filterArray($arrayBook,"author name one");
            ?>
            <ul>
                <?php foreach ($books as $book) : ?>
                    <li>
                        <a href="<?php echo $book["link"] ?>" target="_blank">
                            <?php echo  $book["name"] ." ". $book["book"] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            
    </body>
</html>