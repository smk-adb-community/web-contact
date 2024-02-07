<?php
require_once "../config/db.php";

$contactId = $_GET['contact_id'];

$result = $db->exec("DELETE FROM contacts WHERE id = '". $contactId ."'");
if (!$result) {
    echo "Error: contact failed to delete!";
    exit();
}

header("Location: ../index.php");
