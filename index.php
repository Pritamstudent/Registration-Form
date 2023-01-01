<?php
$title = 'Index';
require_once 'includes/header.php';
require_once 'db/conn.php';
?>

<!--
--first name
--last name
--contact number
--date of birth
--Speciality(Databse admin , Software developer, Web Administrator)
--Email Address
-->
<h1 class="text-center">Registration for IT conference</h1>

<form method="POST" action="success_post.php" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="mb-3">
        <label for="contact" class="form-label">Contact Number</label>
        <input required type="number" class="form-control" id="contact" name="contact">
    </div>
    <div class="mb-3">
        <label for="dateofbirth" class="form-label">Date Of Birth</label>
        <input required type="text" class="form-control" id="dateofbirth" name="dateofbirth">
    </div>
    <div class="mb-3">
        <label for="speciality" class="form-label">Area Of Expertise</label>
        <select class="form-select" id="speciality" name="speciality">
            <option selected>Open this select menu</option>
            <option value="Database Admin">DataBase admin</option>
            <option value="Software Developer">Software Developer</option>
            <option value="Web Administrator">Web Administrator</option>
            <option value="Others">Others</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
    <label for="avatar" class="form-label">File Upload(Optional)</label>
    <input type="file" accept="image/*" class="form-control" name="file" id="avatar">
    </div>
    
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
    </div>

</form>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>