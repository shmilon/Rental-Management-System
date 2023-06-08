<?php

include('db_connection.php');


if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $checkResult = $conn->query("DELETE FROM categories where id = ".$id);

}







?>
