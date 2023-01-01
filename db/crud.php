<?php
class crud
{
    private $db;
    function __construct($conn)
    {
        $this->db = $conn;
    }
    public function insert($fname, $lname, $contact, $dob, $speciality, $email,$avatar)
    {
        try {
            $sql = "INSERT INTO attendees( `firstname`,`lastname`,`contact`,`dateofbirth`,`speciality`,`email`,`avatar`) VALUES (  :fname , :lname ,:contact , :dob , :speciality, :email,:avatar) ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':contact', $contact);
            $stmt->bindparam(':dob', $dob);
            $stmt->bindparam(':speciality', $speciality);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':avatar', $avatar);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function getAttendees()
    {
        try {
            $sql = "SELECT * FROM `attendees`";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function editAttendee($id, $fname, $lname, $contact, $dob, $speciality, $email)
    {

        try {
            $sql  = "UPDATE `attendees` SET `firstname`=:fname,`lastname`=:lname,`contact`=:contact,`dateofbirth`= :dob,`speciality`=:speciality,`email` =:email WHERE `id` = '{$id}' ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':contact', $contact);
            $stmt->bindparam(':dob', $dob);
            $stmt->bindparam(':speciality', $speciality);
            $stmt->bindparam(':email', $email);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function getAttendeeDetails($id)
    {
        try {
            $sql = "SELECT * FROM attendees where id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function deleteAttendee($id)
    {
        try {
            $sql = "DELETE FROM `attendees` WHERE `id` = :id ";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
