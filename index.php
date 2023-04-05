<?php
require("urlFunction.php");
//require("router.php");
$config = require('config.php');
require("Database.php");
$db = new Database($config['database']);
$data = $db->Query("select * from post")->fetchAll();

foreach ($data as $item) {
    echo '<br>';
    echo ($item["title"]);
}
die();
