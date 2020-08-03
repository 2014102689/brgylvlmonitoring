<?php 
    include("includes/template/header.php");
    include_once('utilities/dbconnect.php');
?>
<div class="container-fluid">
    <div class="card">
        <form action="<?= $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <input type="text" name="searchkey" placeholder="Enter Keyword">
                <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    <table class="table table-primary">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Lastname</th>
                <th>Suffix</th>
                <th>Birth Date</th>
                <th>Civil Status</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Birth Place</th>
                <th>Street</th>
                <th>City</th>
                <th>Province</th>
                <th>Guardian</th>
                <th>Contact Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM tbl_student";
            
            if(isset($_GET['searchkey'])){
                $searchkey = $_GET['searchkey'];
                $sql = "SELECT * FROM tbl_student WHERE studentID = '$searchkey'";
            }
        

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
?>
            <tr>
                <td><?= $row['studentID']; ?></td>
                <td><?= $row['firstname']; ?></td>
                <td><?= $row['midname']; ?></td>
                <td><?= $row['lastname']; ?></td>
                <td><?= $row['suffix']; ?></td>
                <td><?= $row['birthdate']; ?></td>
                <td><?= $row['civilstatus']; ?></td>
                <td><?= $row['age']; ?></td>
                <td><?= $row['gender']; ?></td>
                <td><?= $row['birthplace']; ?></td>
                <td><?= $row['street']; ?></td>
                <td><?= $row['city']; ?></td>
                <td><?= $row['province']; ?></td>
                <td><?= $row['guardian']; ?></td>
                <td><?= $row['contactNum']; ?></td>
                <td>
                    <a href="admin-update.php?studentID=<?= $row['studentID']; ?>">
                        <span class="fas fa-edit text-warning"></span>
                        Update
                    </a> |
                    <a href="transactions/delete.php?studentID=<?= $row['studentID']; ?>">
                        <span class="fas fa-trash text-danger"></span>
                        Delete
                    </a>
                </td>
            </tr>
            <?php 
            }
?>

        </tbody>
    </table>
</div>
<a href="registration.php"> Go to Registration form </a>
<script type="text/javascript">
    function onDelete(e){
        let ans = confirm("Are you sure?");
        if(ans){
            return true;
        }else{
            e.preventDefault();
        }
    }
</script>
<?php
    }
    include("includes/template/footer.php");
?>