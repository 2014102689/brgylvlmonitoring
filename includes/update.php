<?php 
    include_once('utilities/dbconnect.php');

    $PatientID = $_GET['PatientID'];
    $sql = "SELECT * FROM tbl_patient WHERE patientID = '$PatientID'";
    $data = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>

<div class="container">
    <div class="row">
        <div class="card mt-2 w-100">
            <div class="card-header bg-primary text-white bg-sample">
                <h4 class="bg-primary">Update Patient Status</h4>
            </div>
            <div class="card-body">
                <form method="post" action="transactions/update.php">
                    <input type="hidden" name="PatientID" value="<?= $PatientID; ?>">
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['patientFname']; ?>" name="Firstname" class="form-control" placeholder="Firstname" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['patientMname']; ?>" name="Middlename" class="form-control" placeholder="Middlename" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['patientLname']; ?>" name="Lastname" class="form-control" placeholder="Lastname" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" value="<?= $data['patientSuffix']; ?>" name="Suffix" class="form-control" placeholder="Suffix">
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <div>Date of Birth</div>
                            <input type="date" value="<?= $data['patientBirthdate']; ?>" name="DOB" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['patientCivilStatus']; ?>" name="CivStat" class="form-control" placeholder="Civil Status" required>
                    </div>
                    <div class="col-md-12 mb-2">
                            <div>Gender</div>
                            <div>
                                <small id="msg"></small>
                                <input type="radio" name="Gender" value="male">Male
                                <input type="radio" name="Gender" value="female">Female
                            </div required>
                        </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['patientHouseno']; ?>" name="Houseno" class="form-control" placeholder="House No." required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['patientStreet']; ?>" name="Street" class="form-control" placeholder="Street" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['patientBrgy']; ?>" name="Barangay" class="form-control" placeholder="Barangay" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['patientCity']; ?>" name="City" class="form-control" placeholder="City" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['patientRegion']; ?>" name="Region" class="form-control" placeholder="Province" required>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="tel" value="<?= $data['patientPhone']; ?>" name="ContactNumber" class="form-control" placeholder="+639123456789" required>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" value="<?= $data['patientEmail']; ?>" name="Email" class="form-control" placeholder="Email Address" required>
                    </div>
                     <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" value="<?= $data['patientRapid']; ?>" name="Rapid" class="form-control" placeholder="Rapid Test" required>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" value="<?= $data['patientSwab']; ?>" name="Swab" class="form-control" placeholder="Swab Test" required>
                    </div><div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" value="<?= $data['patientType']; ?>" name="Type" class="form-control" placeholder="Patient Type" required>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" value="<?= $data['patientQrtnType']; ?>" name="QrtnType" class="form-control" placeholder="Quarantine Type" required>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <div>Start of Quarantine</div>
                            <input type="date" value="<?= $data['patientQrtnStart']; ?>" name="QrtnStart" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <div>End of Quarantine</div>
                            <input type="date" value="<?= $data['patientQrtnEnd']; ?>" name="QrtnEnd" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" value="<?= $data['patientDiagnosis']; ?>" name="Diagnosis" class="form-control" placeholder="Diagnosis" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <button type="submit" class="btn btn-primary mb-1 form-control">
                            Save
                        </button>
                        <a href="records.php" class="btn btn-primary form-control">
                            Go Back
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>