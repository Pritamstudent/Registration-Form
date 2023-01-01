<?php
$title = 'Registration page';
require_once 'includes/header.php';
require_once 'db/conn.php';
if (isset($_POST['submit'])) {
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $dob = $_POST["dateofbirth"];
  $speciality = $_POST["speciality"];
  $contact = $_POST["contact"];
  $email = $_POST["email"];
  $orig_file = $_FILES['file']['tmp_name'];
  $ext = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
  $target_dir = 'uploads/';
  $destination = "$target_dir$contact.$ext";
  move_uploaded_file($orig_file,$destination);
  $isSuccess = $crud->insert($fname, $lname, $contact, $dob, $speciality, $email,$destination);
  if ($isSuccess) {
    include "includes/successmessage.php";
  } else {
    include "includes/error.php";
  }

?>
<div class="card" style="width: 18rem;">
<img src="<?php echo $destination ; ?>" class="card-img-top" alt="profile image">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $_POST["firstname"] . ' ' .  $_POST["lastname"]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST["speciality"]; ?></h6>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><?php echo $_POST["contact"]; ?></li>
      <li class="list-group-item"><?php echo $_POST["dateofbirth"]; ?></li>
      <li class="list-group-item"><?php echo $_POST["email"]; ?></li>
    </ul>

  </div>
</div>
<?php
}
else {
  include "includes/error.php";
}




?>





<?php require_once './includes/footer.php'; ?>