<?php
    $ResidentID=$_GET['ResidentID'];
    $sql = "SELECT * FROM tbl_resident WHERE residentID = '$ResidentID'";
    $data = mysqli_query($conn, $sql);
    $fetchdata = mysqli_fetch_assoc($data);
?>

<h1>Resident Profile</h1>
<div class="container-fluid">
    Resident ID:
    <?= $fetchdata['residentID']; ?><br>
    Firstname :
    <?= $fetchdata['residentFname']; ?><br>
    Middlename :
    <?= $fetchdata['residentMname']; ?><br>
    Lastname :
    <?= $fetchdata['residentLname']; ?><br>
    Suffix :
    <?= $fetchdata['residentSuffix']; ?><br>
    Birthdate :
    <?= $fetchdata['residentBirthdate']; ?><br>
    Civil Status :
    <?= $fetchdata['residentCivilStatus']; ?><br>
    Gender :
    <?= $fetchdata['residentGender']; ?><br>
    House No. :
    <?= $fetchdata['residentHouseno']; ?><br>
    Street :
    <?= $fetchdata['residentStreet']; ?><br>
    Barangay :
    <?= $fetchdata['residentBrgy']; ?><br>
    City :
    <?= $fetchdata['residentCity']; ?><br>
    Region :
    <?= $fetchdata['residentRegion']; ?><br>
    Contact Number :
    <?= $fetchdata['residentPhone']; ?><br>
    Email Address :
    <?= $fetchdata['residentEmail']; ?><br>
</div>

<h3>Quarantine History</h3>

<div>
    <table id="data" class="table table-primary">
        <thead>
            <tr>
                <th>Quarantine ID</th>
                <th>Patient Type</th>
                <th>Covid Test</th>
                <th>Status</th>
                <th>Diagnosis</th>
                <th>Quarantine Type</th>
                <th>Quarantine Status</th>
                <th>Start of Quarantine</th>
                <th>End of Quarantine</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM tbl_patient WHERE residentID = '$ResidentID'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
                        <tr>
                            <td><?= $row['patientQrtnID']; ?></td>
                            <td><?= $row['patientType']; ?></td>
                            <td><?= $row['patientTest']; ?></td>
                            <td><?= $row['patientStatus']; ?></td>
                            <td><?= $row['patientDiagnosis']; ?></td>
                            <td><?= $row['patientQrtnType']; ?></td>
                            <td><?= $row['patientQrtnStatus']; ?></td>
                            <td><?= $row['patientQrtnStart']; ?></td>
                            <td><?= $row['patientQrtnEnd']; ?></td>
                        </tr>
            <?php
                    }
                }
            ?>
        </tbody>
    </table>
</div>