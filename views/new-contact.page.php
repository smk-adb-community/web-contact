<h1>Create New Contact</h1>
<form action="../actions/save.action.php" method="post" class="newContactForm" autocomplete="off">
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
<a class="backButton" href="index.php">
    <
</a>