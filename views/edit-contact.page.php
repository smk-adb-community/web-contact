<?php
$contactId = $_GET['contact_id'];
$contact = $db->querySingle("SELECT * FROM contacts WHERE id = '". $contactId ."'", true);
?>
<h1>Edit Contact</h1>
<form action="actions/update.action.php" method="post" class="newContactForm" autocomplete="off">
    <label for="fullName">
        <span>Fullname <sup>*</sup></span>
        <input name="fullName" type="text" value="<?= $contact['fullName'] ?>" class="form-input input-text">
    </label>
    <label for="phoneNumber">
        <span>Phone Number <sup>*</sup></span>
        <input name="phoneNumber" type="tel" value="<?= $contact['phoneNumber'] ?>" class="form-input input-text">
    </label>
    <label for="email">
        <span>Email</span>
        <input name="email" type="email" value="<?= $contact['email'] ?>" class="form-input input-text">
    </label>
    <label for="address">
        <span>Address</span>
        <input name="address" type="text" value="<?= $contact['address'] ?>" class="form-input input-text">
    </label>
    <label for="organization">
        <span>Organization</span>
        <input name="organization" type="text" value="<?= $contact['organization'] ?>" class="form-input input-text">
    </label>
    <input type="hidden" name="contact_id" value="<?= $contactId ?>">
    <button type="submit" class="btn-block">Update Contact</button>
</form>
<a class="backButton" href="detail.php?contact_id=<?= $contactId ?>">⬅️</a>