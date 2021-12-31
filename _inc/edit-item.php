<?php
require_once "config.php";


$id = $database->update("items",
    [   "text" => $_POST["message"] ],
    [   "id" => $_POST["id"] ],
);

if ($id) {
    header("location: $site_url/index.php");
    die("success");
}
