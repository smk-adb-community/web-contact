<?php
require_once "./config/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Contact Management</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="web">
        <h1>This App is Only for Mobile View</h1>
    </div>
    <div class="mobile">
        <h1>Web Contact Management</h1>
        <input type="search" name="searchContact" id="searchContact" placeholder="Search for contact..." />
        <div class="contact-lists">
            <div class="contact-item">
                <div class="contact-avatar">
                    <img src="https://placehold.co/400" alt="username" />
                </div>
                <div class="contact-preview">
                    <strong>John Doe</strong>
                    <p>084154681245</p>
                </div>
            </div>
        </div>
        <a class="addNewContact" href="new-contact.php">+</a>
    </div>
</body>

</html>