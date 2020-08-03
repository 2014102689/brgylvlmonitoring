<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card mt-2 w-100">
                <div class="card-header bg-primary text-white bg-sample">
                    <h4 class="bg-primary">SIS Admin Sign-In</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="transactions/admin-login.php">
                        <div class="col-md-12 mb-2">
                            <input type="text" name="AdminID" class="form-control" placeholder="Admin ID" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <input type="checkbox" name="remember"> Remember me?
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary mb-1 form-control">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    Copyright &copy; 2020
                </div>
            </div>
        </div>
    </div>
</div>