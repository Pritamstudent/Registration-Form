<?php
$title = 'Edit page';
require_once 'includes/header.php';
require_once 'db/conn.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
  $fname = $_POST["firstname"];
  $lname = $_POST["lastname"];
  $dob = $_POST["dateofbirth"];
  $speciality = $_POST["speciality"];
  $contact = $_POST["contact"];
  $email = $_POST["email"];
  $result = $crud->editAttendee($id,$fname, $lname, $contact, $dob, $speciality, $email);
  if($result){
    header("Location: index.php");
  }
  else{
    include "includes/error.php";
    header( "Location: viewrecords.php");
  }

}
else{
  include "includes/error.php";
}

?>