<?php 
    include_once('utilities/dbconnect.php');

    $studentID = $_GET['studentID'];
    $UserType;
    $sql = "SELECT * FROM tbl_student WHERE studentID = '$studentID'";
    $data = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>

<div class="container">
    <div class="row">
        <div class="card mt-2 w-100">
            <div class="card-header bg-primary text-white bg-sample">
                <h4 class="bg-primary">Update Student Account</h4>
            </div>
            <div class="card-body">
                <form method="post" action="transactions/update.php">
                    <input  name="UserType" value="admin">
                    <input type="hidden" name="studentID" value="<?= $studentID; ?>">
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['firstname']; ?>" name="Firstname" class="form-control" placeholder="Firstname" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['midname']; ?>" name="Middlename" class="form-control" placeholder="Middlename" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['lastname']; ?>" name="Lastname" class="form-control" placeholder="Lastname" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" value="<?= $data['suffix']; ?>" name="Suffix" class="form-control" placeholder="Suffix">
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <div>Date of Birth</div>
                            <input type="date" value="<?= $data['birthdate']; ?>" name="DOB" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['civilstatus']; ?>" name="CivStat" class="form-control" placeholder="Civil Status" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['age']; ?>" name="Age" class="form-control" placeholder="Age" required>
                    </div>
                    <div class="col-md-12 mb-2">
                            <div>Gender</div>
                            <div>
                                <small id="msg"></small>
                                <input type="radio" name="Gender" value="male">Male
                                <input type="radio" name="Gender" value="female">Female
                                <input type="radio" name="Gender" value="other">Other
                            </div required>
                        </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['birthplace']; ?>" name="POB" class="form-control" placeholder="Birth Place" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['street']; ?>" name="Street" class="form-control" placeholder="Street , Barangay" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['city']; ?>" name="City" class="form-control" placeholder="City" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['province']; ?>" name="Province" class="form-control" placeholder="Province" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" value="<?= $data['guardian']; ?>" name="Guardian" class="form-control" placeholder="Gurdian" required>
                    </div>
                    <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="tel" value="<?= $data['contactNum']; ?>" name="ContactNumber" class="form-control" placeholder="+639123456789" required>
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