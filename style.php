<?php
session_start();
header("Content-type: text/css");

if ($_SESSION["csskey"] != "Sveikas") {
    die("Protected");
}

$_SESSION["csskey"] = "somethingelse";
?>