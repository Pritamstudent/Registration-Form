<?php
$title = "attendees";
require_once 'includes/header.php';
require_once 'db/conn.php';
$results = $crud->getAttendees();
?>

<table class="table">
    <tr> 
        <th>
            #
        </th>
        <th>
            First Name
        </th>
        <th>
            Last Name
        </th>
        <th>
            Contact
        </th>
        <th>
            Date Of Birth
        </th>
        <th>
            Speciality
        </th>
        <th>
            Email
        </th>
        <th>
            Actions
        </th>

    </tr>
    
    <?php
    while($r=$results->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
        <td> <?php echo $r['id'] ?></td>
        <td><?php echo $r['firstname'] ?></td>
        <td><?php echo $r['lastname'] ?></td>
        <td><?php echo $r['contact'] ?></td>
        <td><?php echo $r['dateofbirth'] ?></td>
        <td><?php echo $r['speciality'] ?></td>
        <td><?php echo $r['email'] ?></td>
        <td>
            <a href="view.php?id=<?php echo $r['id'] ?>" class="btn btn-success"> View </a>
            <a href="edit.php?id=<?php echo $r['id'] ?>" class="btn btn-warning"> Edit </a>
            <a onclick="return confirm('Are you sure you want to delete the record?')" href="delete.php?id=<?php echo $r['id'] ?>" class="btn btn-danger"> Delete </a>
        </td>
    </tr>
    <?php }
    ?>
</table>



<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>