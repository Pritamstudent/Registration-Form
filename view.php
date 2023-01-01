<?php
$title = 'Index';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $result = $crud->getAttendeeDetails($id);
?>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="card text-center  text-primary" style="width: 18rem;">
        <img src="<?php echo empty($result['avatar']) ? "uploads/default.png" : $result['avatar']; ?>" class="card-img-top" alt="profile image">
          <div class="card-body">
            <h5 class="card-title"> <?php echo $result["firstname"] . ' ' .  $result["lastname"]; ?></h5>
            <h6 class="card-subtitle mb-2 text-primary"><?php echo $result["speciality"]; ?></h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?php echo $result["contact"]; ?></li>
              <li class="list-group-item"><?php echo $result["dateofbirth"]; ?></li>
              <li class="list-group-item"><?php echo $result["email"]; ?></li>
            </ul>
            <div>
  <a href="viewrecords.php" class="btn btn-info"> Back to List </a>
  <a href="edit.php?id=<?php echo $result['id'] ?>" class="btn btn-warning"> Edit </a>
  <a onclick="return confirm('Are you sure you want to delete the record?')" href="delete.php?id=<?php echo $result['id'] ?>" class="btn btn-danger"> Delete </a>
  </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  
<?php
} else {
  include "includes/error.php";
}


?>







<br>
<br>
<br>
<?php require_once './includes/footer.php'; ?>