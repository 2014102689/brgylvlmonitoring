
    
<div class="container-fluid">
    Patient ID:
    <?= $fetchdata['patientID']; ?><br>
    Firstname :
    <?= $fetchdata['patientFname']; ?><br>
    Middlename :
    <?= $fetchdata['patientMname']; ?><br>
    Lastname :
    <?= $fetchdata['patientLname']; ?><br>
    Suffix :
    <?= $fetchdata['patientSuffix']; ?><br>
    Birthdate :
    <?= $fetchdata['patientBirthdate']; ?><br>
    Civil Status :
    <?= $fetchdata['patientCivilStatus']; ?><br>
    Gender :
    <?= $fetchdata['patientGender']; ?><br>
    House No. :
    <?= $fetchdata['patientHouseno']; ?><br>
    Street :
    <?= $fetchdata['patientStreet']; ?><br>
    Barangay :
    <?= $fetchdata['patientBrgy']; ?><br>
    City :
    <?= $fetchdata['patientCity']; ?><br>
    Region :
    <?= $fetchdata['patientRegion']; ?><br>
    Contact Number :
    <?= $fetchdata['patientPhone']; ?><br>
    Email Address :
    <?= $fetchdata['patientEmail']; ?><br>
    Rapid Test :
    <?= $fetchdata['patientRapid']; ?><br>
    Swab Test :
    <?= $fetchdata['patientSwab']; ?><br>
    Patient Type :
    <?= $fetchdata['patientType']; ?><br>
    Quarantine Type :
    <?= $fetchdata['patientQrtnType']; ?><br>
    Start of Quarantine :
    <?= $fetchdata['patientQrtnStart']; ?><br>
    Enf of Quarantine :
    <?= $fetchdata['patientQrtnEnd']; ?><br>
    Patient Diagnosis :
    <?= $fetchdata['patientDiagnosis']; ?><br>
</div>
<a href="update.php?patientID=<?= $fetchdata['patientID']; ?>">
    <span class="fas fa-edit text-warning"></span>
    Update
</a>|
<a href="transactions/delete.php?PatientID=<?= $row['patientID']; ?>">
    <span class="fas fa-trash text-danger"></span>
    Delete
</a>
