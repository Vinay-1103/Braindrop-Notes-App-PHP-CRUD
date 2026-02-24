<?php
require_once __DIR__ . "/config/Database.php";
require_once __DIR__ . "/controllers/NoteController.php";

$database = new Database();
$db = $database->connect();
$controller = new NoteController($db);

$insert = false;
$update = false;
$delete = false;

// DELETE
if (isset($_GET["delete"])) {
    $controller->delete($_GET["delete"]);
    $delete = true;
}

// POST (CREATE or UPDATE)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["snoEdit"])) {
        $controller->update(
            $_POST["snoEdit"],
            $_POST["titleEdit"],
            $_POST["descriptionEdit"]
        );
        $update = true;
    } else {
        $controller->store(
            $_POST["title"],
            $_POST["description"]
        );
        header("Location: index.php?inserted=true");
        exit();
    }
}

$notes = $controller->index();

include "views/layout/header.php";
include "views/notes/index.php";
include "views/layout/footer.php";