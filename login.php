<?php
$title = 'Login';
require_once 'includes/header.php';
include 'db/conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = strtolower(trim($_REQUEST['username']));
    $password = $_REQUEST['password'];
    $new_password = md5($password . $username);
    $result = $userlogin->getUser($username, $new_password);
    if (!$result) {
        echo "<div class = 'alert alert-danger'> the username or password is incorrect</div>";
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $result['id'];
        header("Location: viewrecords.php");
    }
}
?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="text-center">
    <h1 class="text-center text-primary">Please login to your account</h1>
    <br>
    <br>

    <div class="form-outline col-sm-10 w-25  row d-flex justify-content-center" id="input-login">
        <input name="username" type="text" id="form2Example11" class="form-control" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username'] ?>" />
        <label class="form-label" for="username">Username</label>
    </div>

    <div class="form-outline col-sm-10  w-25 row d-flex justify-content-center" id="input-login">
        <input name="password" type="password" id="form2Example22" class="form-control" />
        <label class="form-label" for="form2Example22">Password</label>
    </div>
    <div class="form-outline col-sm-10 w-25  row d-flex justify-content-center" id="input-login">
        <button class="btn btn-primary" type="submit">Login</button>

    </div>



</form>