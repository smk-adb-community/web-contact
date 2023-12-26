<?php
require_once "../config/db.php";

$formData = $_POST;

$contactId      = $formData['contact_id'];
$fullName       = $formData['fullName'];
$phoneNumber    = $formData['phoneNumber'];
$email          = $formData['email'] ?? null;
$address        = $formData['address'] ?? null;
$organization   = $formData['organization'] ?? null;

// Proses mengupdate data di database atau ke tabel kontak
$result = $db->exec("UPDATE contacts SET fullName = '" . $fullName . "', phoneNumber = '" . $phoneNumber . "', email = '" . $email . "', address = '" . $address . "', organization = '" . $organization . "' WHERE id = '" . $contactId . "'");

if (!$result) {
    echo "Data gagal disimpan";
}

header('Location: ../index.php');
