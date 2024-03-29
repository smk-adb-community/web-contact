<?php
// Mengambil data kontak dari database
$contacts = [];

if (!empty($_GET['searchContact'])) {
    $results = $db->query("SELECT * FROM contacts WHERE fullName LIKE '%".$_GET['searchContact']."%' OR email LIKE '%".$_GET['searchContact']."%'");
} else {
    $results = $db->query("SELECT * FROM contacts");
}

while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
    $contacts[] = $row;
}

?>
<h1>Web Contact Management</h1>
<form action="" method="get">
    <input type="search" name="searchContact" id="searchContact" placeholder="Search for contact..." />
</form>
<div class="contact-lists">
    <?php foreach ($contacts as $contact) : ?>
        <a href="detail.php?contact_id=<?= $contact['id'] ?>">
            <div class="contact-item">
                <div class="contact-avatar">
                    <img src="https://placehold.co/400" alt="username" />
                </div>
                <div class="contact-preview">
                    <strong><?= $contact['fullName'] ?></strong>
                    <p><?= format_phone_number($contact['phoneNumber']); ?></p>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</div>
<a class="addNewContact" href="new-contact.php">➕</a>
