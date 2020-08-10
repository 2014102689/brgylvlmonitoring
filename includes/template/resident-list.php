<div class="container-fluid">
    <div>
        <h1>List of Residents</h1>
    </div>

   <div class="card">
        <form action="<?= $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <input type="text" name="searchkey" placeholder="Name or ID no.">
                <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
<div>
    <table id="data" class="table table-primary">
        <thead>
            <tr>
                <th>Resident ID</th>
                <th>Resident Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM tbl_resident";
                if(isset($_GET['searchkey'])){
                    $searchkey = $_GET['searchkey'];
                    if (is_numeric($searchkey)){
                        $sql = "SELECT * FROM tbl_resident WHERE residentID = '$searchkey'";
                    }else{
                        $sql = "SELECT * FROM tbl_resident WHERE  
                        CONCAT(' ' , residentFname, residentMname,residentLname,residentSuffix) LIKE '%$searchkey%'  or
                        CONCAT(' ' ,residentFname,' ',residentMname,' ',residentLname,' ',residentSuffix) LIKE '%$searchkey%'  or 
                        CONCAT (' ' , residentFname,' ',residentLname, ' ', residentSuffix) LIKE '%$searchkey%' or
                        CONCAT (' ' , residentFname,' ',residentLname) LIKE '%$searchkey%' or  
                        CONCAT (' ', residentLname,' ',  residentFname) LIKE '%$searchkey%'";
                    }
                }
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
                        <tr>

                                <td class="name">
                                    <a href="resident-profile.php?ResidentID=<?= $row['residentID']; ?>">
                                        <?= $row['residentID']; ?>
                                    </a>
                                </td>
                                <td class="name">
                                    <a href="resident-profile.php?ResidentID=<?= $row['residentID']; ?>">
                                        <?= $row['residentFname']; ?>
                                        <?= $row['residentMname']; ?>
                                        <?= $row['residentLname']; ?>
                                        <?= $row['residentSuffix']; ?>
                                    </a>
                                </td>
                                <td><?= $row['residentGender']; ?></td>
                                <td>
                                    <?= $row['residentBrgy']; ?>,
                                    <?= $row['residentCity']; ?>
                                </td>
                                <td>
                                    <a href="add-patient.php?ResidentID=<?= $row['residentID']; ?>">
                                        <span class="fas fa-plus"></span>
                                        Quarantine
                                    </a>
                                </td>
                        </tr>
            <?php
                    }
                }
            ?>
        </tbody>
    </table>
    <a href="records.php" class="btn btn-primary form-control fas fa-arrow-left">
        Back
    </a>
</div>

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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>