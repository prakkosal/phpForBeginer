<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>

    <body>
            <?php
            $arrayBook= [
                " name of the book one",
                "name of the book two", 
                "name of the book three",
                "name of the book four"
                ];
            ?>
            <ul>
                <?php foreach ($arrayBook as $key=> $value) : ?>
                    <li>
                        <?php echo  ($key+1).", ".$value?>
                    </li>
                <?php endforeach; ?>
            </ul>
    </body>

</html>