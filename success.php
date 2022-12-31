<?php
$title = 'Registration page';
require_once './includes/header.php'; ?>
<h1 class="text-center text-success">
    Registration successfull
</h1>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> <?php echo $_GET["firstname"] . ' ' .  $_GET["lastname"]; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_GET["speciality"]; ?></h6>
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $_GET["contact"]; ?></li>
    <li class="list-group-item"><?php echo $_GET["dateofbirth"]; ?></li>
    <li class="list-group-item"><?php echo $_GET["email"]; ?></li>
  </ul>
    
  </div>
</div>


<br>
<br>
<br>
<?php require_once './includes/footer.php'; ?>