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

                
                //beter thank in line
                function fillter($arrayBook){
                    $arrayFilltered = [];
                        foreach ($arrayBook as $book) {
                                if($book["name"] === "author name one"){
                                    array_push($arrayFilltered, $book);
                                }
                        }
                    return $arrayFilltered;
                }
                //better than above, more dynamic
                function fillterByAuthorName($arrayBook,$authorName){
                    $arrayFilltered = [];

                        foreach ($arrayBook as $book) {
                                if($book["name"] === $authorName){
                                    array_push($arrayFilltered, $book);
                                }
                        }
                    return $arrayFilltered;
                }
                // more flexible thank two above
                function fillterByKeyAndValue($arrayBook,$key,$value){
                    $arrayFilltered = [];
                        foreach ($arrayBook as $book) {
                                if($book[$key] === $value){
                                    array_push($arrayFilltered, $book);
                                }
                        }
                    return $arrayFilltered;
                }

                //the best one it by openai
                function filterArray($array, $keyword) {
                        $filteredArray = array_filter($array, function($book) use ($keyword) {
                            return (strpos($book['name'], $keyword) !== false || strpos($book['book'], $keyword) !== false);
                        });
                        return $filteredArray;
                    }
                //strpos() is a PHP function that stands for "string position". It searches for the first occurrence of a string (called the "needle") inside another string (called the "haystack"), and returns the position of the first character of the needle in the haystack. If the needle is not found, it returns false.
                // Here's an example usage of strpos():
                // $haystack = 'The quick brown fox jumps over the lazy dog.';
                // $needle = 'brown';

                // $position = strpos($haystack, $needle);

                // if ($position !== false) {
                //     echo "The needle was found at position $position in the haystack.";
                // } else {
                //     echo "The needle was not found in the haystack.";
                // }
                // This would output:
                // The needle was found at position 10 in the haystack.

            ?>
            this in line filter result
            <ul>
                <?php foreach ($arrayBook as $book) : ?>
                    <?php if($book["name"] === "author name one"): ?>
                    <li>
                        <a href="<?php echo $book["link"] ?>" target="_blank">
                            <?php echo  $book["name"] ." ". $book["book"] ?>
                        </a>
                    </li>
                  <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        
            fuction fillter resulst
            <ul>
                <?php foreach (fillter($arrayBook) as $book) : ?>
                    
                    <li>
                        <a href="<?php echo $book["link"] ?>" target="_blank">
                            <?php echo  $book["name"] ." ". $book["book"] ?>
                        </a>
                    </li>
                  
                <?php endforeach; ?>
            </ul>

            fuction fillter resulst
            <ul>
                <?php foreach (fillterByAuthorName($arrayBook,"author name one") as $book) : ?>
                    
                    <li>
                        <a href="<?php echo $book["link"] ?>" target="_blank">
                            <?php echo  $book["name"] ." ". $book["book"] ?>
                        </a>
                    </li>
                  
                <?php endforeach; ?>
            </ul>

            fuction fillter resulst
            <ul>
                <?php foreach (fillterByKeyAndValue($arrayBook,"name","author name one") as $book) : ?>
                    <li>
                        <a href="<?php echo $book["link"] ?>" target="_blank">
                            <?php echo  $book["name"] ." ". $book["book"] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            fuction fillter resulst
            <ul>
                <?php foreach (filterArray($arrayBook,"author name one") as $book) : ?>
                    <li>
                        <a href="<?php echo $book["link"] ?>" target="_blank">
                            <?php echo  $book["name"] ." ". $book["book"] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            
    </body>
</html>