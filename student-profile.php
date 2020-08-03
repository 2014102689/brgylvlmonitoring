<?php 
    include("includes/template/header.php");
    include_once('utilities/dbconnect.php');

    $StudentID=$_GET['StudentID'];
    $sql = "SELECT * FROM tbl_student WHERE studentID = '$StudentID'";
    $data = mysqli_query($conn, $sql);
    $fetchdata = mysqli_fetch_assoc($data);

?>

<div class="container-fluid">
    Student ID:
    <?= $fetchdata['studentID']; ?><br>
    Name :
    <?= $fetchdata['firstname']; ?><br>
    Middlename :
    <?= $fetchdata['midname']; ?><br>
    Lastname :
    <?= $fetchdata['lastname']; ?><br>
    Suffix :
    <?= $fetchdata['suffix']; ?><br>
    Birthdate :
    <?= $fetchdata['birthdate']; ?><br>
    Civil Status :
    <?= $fetchdata['civilstatus']; ?><br>
    Age :
    <?= $fetchdata['age']; ?><br>
    Gender :
    <?= $fetchdata['gender']; ?><br>
    Birth Place :
    <?= $fetchdata['birthplace']; ?><br>
    Street :
    <?= $fetchdata['street']; ?><br>
    City :
    <?= $fetchdata['city']; ?><br>
    Province :
    <?= $fetchdata['province']; ?><br>
    Guardian :
    <?= $fetchdata['guardian']; ?><br>
    Contact Number :
    <?= $fetchdata['contactNum']; ?><br>
</div>
<a href="update.php?StudentID=<?= $fetchdata['studentID']; ?>">
    <span class="fas fa-edit text-warning"></span>
    Update
</a>

<?php
    include("includes/template/footer.php");
?>