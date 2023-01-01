<?php
$title = 'exit';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';
if(!isset($_GET['id'])){
    include 'includes/error.php';
}
else{
    $id = $_GET['id'];
    $attendee = $crud->getAttendeeDetails($id);


?>

<!--
--first name
--last name
--contact number
--date of birth
--Speciality(Databse admin , Software developer, Web Administrator)
--Email Address
-->
<h1 class="text-center">EDIT records</h1>

<form method="POST" action="editpost.php">
    <input type = "hidden" name = "id" value ="<?php echo $attendee["id"]?>"/>
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $attendee["firstname"]?>">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $attendee["lastname"]?>">
    </div>
    <div class="mb-3">
        <label for="contact" class="form-label">Contact Number</label>
        <input type="number" class="form-control" id="contact" name = "contact" value="<?php echo $attendee["contact"]?>">
    </div>
    <div class="mb-3">
        <label for="dateofbirth" class="form-label">Date Of Birth</label>
        <input type="text" class="form-control" id="dateofbirth" name="dateofbirth" value="<?php echo $attendee["dateofbirth"]?>">
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
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $attendee["email"]?>">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="d-grid gap-2">
    <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
        </div>
      
</form>
<?php 
}?>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>