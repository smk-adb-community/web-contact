<?php
require_once "../config/db.php";

$formData = $_POST;

$fullName       = $formData['fullName'];
$phoneNumber    = $formData['phoneNumber'];
$email          = $formData['email'] ?? null;
$address        = $formData['address'] ?? null;
$organization   = $formData['organization'] ?? null;

// Proses menyimpan ke database atau ke tabel kontak
$result = $db->exec("INSERT INTO contacts (fullName, phoneNumber, email, address, organization) VALUES ('" . $fullName . "', '" . $phoneNumber . "', '" . $email . "', '" . $address . "', '" . $organization . "')");

if (!$result) {
    echo "Data gagal disimpan";
}

header('Location: ../index.php');
