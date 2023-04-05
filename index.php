<?php
require("urlFunction.php");
//require("router.php");
$config = require('config.php');
require("Database.php");
$db = new Database($config['database']);

// $id = $_GET["id"];
// $data = $db->Query("select * from post where id = " . $id)->fetchAll();

$id = $_GET["id"];
$query = "select * from post where id = :id";
$data = $db->Query($query, [":id" => $id])->fetch();
dd($data);
