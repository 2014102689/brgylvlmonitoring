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
                <select name="PatientType" id="selectType">
                    <option>Patient Type</option>
                    <option value="PUI">PUI</option>
                    <option value="PUM">PUM</option>
                    <option value="LSI">LSI</option>
                    <option value="ROF">ROF</option>
                </select>
                <select name="PatientRapid" id="selectRapid">
                    <option>Rapid Test</option>
                    <option value="Negative">Negative</option>
                    <option value="Positive">Positive</option>
                </select>
                <select name="PatientSwab" id="selectSwab">
                    <option>Swab Test</option>
                    <option value="Negative">Negative</option>
                    <option value="Positive">Positive</option>
                </select>
                <select name="Diagnosis" id="selectDiagnosis">
                    <option>Diagnosis</option>
                    <option value="Symptomatic">Symptomatic</option>
                    <option value="Asymptomatic">Asymptomatic</option>
                </select>
            </div>
        </form>
    </div>

    <table class="table table-primary">
        <thead>
            <tr>
                <th>Patient ID</th>
                <th>Patient Name</th>
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
                    if (is_numeric($searchkey)){
                        $sql = "SELECT * FROM tbl_patient WHERE patientID = '$searchkey'";
                    }else{
                        $sql = "SELECT * FROM tbl_patient WHERE  
                        CONCAT(' ' , patientFname, patientMname,patientLname,patientSuffix) LIKE '%$searchkey%'  or
                        CONCAT(' ' ,patientFname,' ',patientMname,' ',patientLname,' ',patientSuffix) LIKE '%$searchkey%'  or 
                        CONCAT (' ' , patientFname,' ',patientLname, ' ', patientSuffix) LIKE '%$searchkey%' or
                        CONCAT (' ' , patientFname,' ',patientLname) LIKE '%$searchkey%' or  
                        CONCAT (' ', patientLname,' ',  patientFname) LIKE '%$searchkey%'";
                    }

            }
 
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>

                    <td>
                        <a href="patient-profile.php?PatientID=<?= $row['patientID']; ?>">
                            <?= $row['patientID']; ?></td>
                        </a>
                    <td>
                        <a href="patient-profile.php?PatientID=<?= $row['patientID']; ?>">
                            <?= $row['patientFname']; ?>
                            <?= $row['patientMname']; ?>
                            <?= $row['patientLname']; ?>
                            <?= $row['patientSuffix']; ?>
                        </a>
                    </td>
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