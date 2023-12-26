<?php
$contactId = $_GET['contact_id'];
$contact = $db->querySingle("SELECT * FROM contacts WHERE id = '". $contactId ."'", true);
?>
<h1>Detail Page</h1>
<ul>
    <li>Fullname: <?= $contact['fullName'] ?></li>
    <li>Phone Number: <?= format_phone_number($contact['phoneNumber']) ?></li>
    <li>Email: <?= !empty($contact['email']) ? $contact['email'] : "-" ?></li>
    <li>Address: <?= !empty($contact['address']) ? $contact['address'] : "-" ?></li>
    <li>Organization: <?= !empty($contact['organization']) ? $contact['organization'] : "-" ?></li>
</ul>
<a class="backButton" href="index.php">⬅️</a>