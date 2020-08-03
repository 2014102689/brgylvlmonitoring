<div class="container">
    <div class="row">
        <div class="card mt-2 w-100">
            <div class="card-header bg-primary text-white bg-sample">
                <h4 class="bg-primary">SIS Form</h4>
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
                        <input type="text" onkeyup="validate(this);" name="fname" class="form-control" placeholder="Firstname" required>
                    </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="validate(this);" name="mname" class="form-control"  placeholder="Middlename" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="validate(this);" name="lname" class="form-control"  placeholder="Lastname" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="text" onkeyup="validate(this);" name="suffix" class="form-control"  placeholder="Suffix (optional)">
                        </div>
                        <div class="col-md-12 mb-2">
                            <div>Gender</div>
                            <div>
                                <small id="msg"></small>
                                <input type="radio" name="Gender" value="male">Male  
                                <input type="radio" name="Gender" value="female">Female
                                <input type="radio" name="Gender" value="other">Other<br>
                            </div required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <div>Date of Birth</div>
                            <input type="date" name="DOB" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" name="age" class="form-control" placeholder="Age" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" name="CivilStatus" onkeyup="validate(this);" class="form-control" placeholder="Civil Status" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" name="POB" class="form-control" placeholder="Place of Birth" required>
                        </div> 
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="validate(this);" name="Guardian" class="form-control" placeholder="Guardian" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="tel" name="ContactNumber"  onkeyup="checkIntLenBegin(this);" class="form-control" placeholder="+639123456789" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="isEmpty(this);" name="street" class="form-control" placeholder="Street , Barangay" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="isEmpty(this);" name="city" class="form-control" placeholder="City" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <small id="msg"></small>
                            <input type="text" onkeyup="isEmpty(this);" name="province" class="form-control" placeholder="Province" required>
                        </div>
                        <input type="hidden" name="Password" value="123">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mb-1 form-control">
                            Register
                        </button>
                        <a href="index.php" class="btn btn-primary form-control">
                            Go Back
                        </a>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                Copyright &copy; 2020
            </div>

        </div>
    </div>
</div>