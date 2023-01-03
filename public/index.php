<?php

$conn = __DIR__."../core/Database.php";

if ($conn) {
    echo "Connected successfully";
} else {
    echo "Not connected";
}

