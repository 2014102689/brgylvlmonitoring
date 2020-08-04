<div class="container">
    <div class="row">
        <div class="card mt-2 w-100">
            <div class="card-header bg-primary text-white bg-sample">
                <h4 class="bg-primary">Quarantine Form</h4>
            </div>
            <div class="card-body">
                <?php
                    if(isset($_GET['status']) && $_GET['status'] == false){
                ?>
                        <span class="text-center text-danger"><?= $_GET['msg']; ?></span>
                <?php
                    }
                ?>
                <form method="post" action="transactions/register.php">
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" onkeyup="validate(this);" name="Firstname" class="form-control" placeholder="Firstname" required>
                    </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="validate(this);" name="Middlename" class="form-control"  placeholder="Middlename" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="validate(this);" name="Lastname" class="form-control"  placeholder="Lastname" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" onkeyup="validate(this);" name="Suffix" class="form-control"  placeholder="Suffix (optional)">
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
                            <div>Date of Birth</div>
                            <input type="date" name="DOB" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" name="CivStat" onkeyup="validate(this);" class="form-control" placeholder="Civil Status" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" name="Houseno" onkeyup="is_numeric(this);" class="form-control" placeholder="House No." required>
                        </div>
                         <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" name="Street" onkeyup="isEmpty(this);" class="form-control" placeholder="Street" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" name="Barangay" onkeyup="isEmpty(this);" class="form-control" placeholder="Barangay" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" name="City" onkeyup="isEmpty(this);" class="form-control" placeholder="City" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="isEmpty(this);" name="Region" class="form-control" placeholder="Region" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="tel" name="ContactNumber"  onkeyup="checkIntLenBegin(this);" class="form-control" placeholder="+639123456789" required>
                        </div>
                         <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="isEmpty(this);" name="Email" class="form-control" placeholder="Email Address" required>
                        </div>
                         <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="isEmpty(this);" name="Rapid" class="form-control" placeholder="Rapid Test" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="isEmpty(this);" name="Swab" class="form-control" placeholder="Swab Test" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="isEmpty(this);" name="Type" class="form-control" placeholder="Patient Type" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="isEmpty(this);" name="QrtnType" class="form-control" placeholder="Quarantine Type" required>
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
                            <small id="msg"></small>
                            <input type="text" onkeyup="isEmpty(this);" name="Diagnosis" class="form-control" placeholder="Diagnosis" required>
                        </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mb-1 form-control">
                            Register
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