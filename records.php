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
                <th>Patient ID</th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Lastname</th>
                <th>Suffix</th>
                <th>Rapid</th>
                <th>Swab</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM tbl_patient";
            
            if(isset($_GET['searchkey'])){
                $searchkey = $_GET['searchkey'];
                $sql = "SELECT * FROM tbl_patient WHERE patientID = '$searchkey'";
            }
        

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>

                    <td><?= $row['patientID']; ?></td>
                    <td><?= $row['patientFname']; ?></td>
                    <td><?= $row['patientMname']; ?></td>
                    <td><?= $row['patientLname']; ?></td>
                    <td><?= $row['patientSuffix']; ?></td>
                    <td><?= $row['patientRapid']; ?></td>
                    <td><?= $row['patientSwab']; ?></td>
                    <td>

                        <a href="update.php?PatientID=<?= $row['patientID']; ?>">
                            <span class="fas fa-edit text-warning"></span>
                            Update
                        </a> |
                        <a href="transactions/delete.php?PatientID=<?= $row['patientID']; ?>">
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
<a href="registration.php" class="btn btn-primary form-control">
        Add Patient (+)
</a>
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