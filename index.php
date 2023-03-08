<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    $task = "task name";
    $isFinished = false;
    if ($isFinished) {
        $message = "datara have finished " . $task;
    } else {
        $message = "datara have not yet finished " . $task;
    }
    ?>
    <h1>
        <?php
        echo $message;
        ?>
    </h1>

</body>

</html>