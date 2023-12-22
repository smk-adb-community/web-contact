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
        <h1>Create New Contact</h1>
        <form action="" method="post" class="newContactForm" autocomplete="off">
            <label for="fullName">
                <span>Fullname <sup>*</sup></span>
                <input name="fullName" type="text" class="form-input input-text">
            </label>
            <label for="phoneNumber">
                <span>Phone Number <sup>*</sup></span>
                <input name="phoneNumber" type="tel" class="form-input input-text">
            </label>
            <label for="email">
                <span>Email</span>
                <input name="email" type="email" class="form-input input-text">
            </label>
            <label for="address">
                <span>Address</span>
                <input name="address" type="text" class="form-input input-text">
            </label>
            <label for="organization">
                <span>Organization</span>
                <input name="organization" type="text" class="form-input input-text">
            </label>
            <button type="submit" class="btn-block">Save Contact</button>
        </form>
        <a class="backButton" href="index.php"><</a>
    </div>
</body>

</html>