<?php 
    include_once('utilities/dbconnect.php');

    $ResidentID = $_GET['ResidentID'];
    $sql ="SELECT * FROM tbl_resident WHERE residentID = '$ResidentID'";
    $data = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>

<div class="container">
    <div class="row">
        <div class="card mt-2 w-100">
            <div class="card-header bg-primary text-white bg-sample">
                <h4 class="bg-primary">Add Quarantine Patient</h4>
            </div>
            <div class="card-body">
                <form method="post" action="transactions/patient-update.php">
                    <input type="hidden" name="Process" value="register">
                    <input type="hidden" name="ResidentID" value="<?= $ResidentID; ?>">
                    <div class="col-md-12 mb-2">
                        <div>
                            <label>Resident ID: </label>
                            <?= $data['residentID']; ?>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                        <div class="name">
                            <label>Name: </label>
                            <?= $data['residentFname']; ?>
                            <?= $data['residentMname']; ?>
                            <?= $data['residentLname']; ?>
                            <?= $data['residentSuffix']; ?>
                        </div>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <select onkeyup="isEmpty(this);" value="<?= $data['patientType']; ?>" name="Type" class="form-control" required>
                                <option>Patient Type</option>
                                <option value="PUI">PUI</option>
                                <option value="PUM">PUM</option>
                            </select>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <select onkeyup="isEmpty(this);" name="Test" class="form-control" required>
                                <option>Covid Test</option>
                                <option value="N/A">To be tested</option>
                                <option value="Swab">Swab</option>
                                <option value="Rapid">Rapid</option>
                            </select>
                    </div>
                     <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <select onchange="isEmpty(this);" name="Status" class="form-control" required>
                                <option>Patient Status</option>
                                <option value="N/A">To be tested</option>
                                <option value="Negative">Negative</option>
                                <option value="Positive">Positive</option>
                            </select>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <select onkeyup="isEmpty(this);" value="<?= $data['patientQrtnType']; ?>" name="QrtnType" class="form-control" required>
                                <option>Quarantine Type</option>
                                <option value="Homebase">Homebase</option>
                                <option value="Isolation Unit">Isolation Unit</option>
                            </select>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <select onkeyup="isEmpty(this);" name="Diagnosis"class="form-control" required>
                                <option>Diagnosis</option>
                                <option value="Under Observation">Under Observation</option>
                                <option value="Negative">Negative</option>
                                <option value="Symptomatic">Symptomatic</option>
                                <option value="Asymptomatic">Asymptomatic</option>
                            </select>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <select onkeyup="isEmpty(this);" name="QrtnStatus"class="form-control" required>
                                <option>Quarantine Status</option>
                                <option value="On going">On going</option>
                                <option value="Completed">Completed</option>
                            </select>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <div>Start of Quarantine</div>
                            <input type="date" name="QrtnStart" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <div>End of Quarantine</div>
                            <input type="date" name="QrtnEnd" class="form-control" required>
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