<?php
    require_once "config.php";

   $id = $database->insert("items", [
        "text" => $_POST["message"],      
    ]);

    if ($id) {
        die("success");
    }