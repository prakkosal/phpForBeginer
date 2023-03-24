<?php
require("urlFunction.php");
//require("router.php");
require("Database.php");
$db = new Database();
$data = $db->Query()->fetch_all(MYSQLI_ASSOC);
foreach ($data as $item) {
    echo '<br>';
    echo ($item["title"]);
}
die();
