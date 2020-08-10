<div class="container-fluid">
    <div>
        <h1>List of Patients</h1>
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

<div class="table-filters">
    <select data-filter-col="2" >
        <option value="">  Patient Type  </option>
        <option value="PUI">PUI</option>
        <option value="PUM">PUM</option>
    </select>
   <select  data-filter-col="3" >
        <option value=""> Patient Status  </option>
        <option value="N/A">To be tested</option>
        <option value="Positive">Positive</option>
        <option value="Negative">Negative</option>
    </select>
    <select  data-filter-col="4" >
        <option value="">  Quarantine Type  </option>
        <option value="Homebase">Homebase</option>
        <option value="Isolation Unit">Barangay Isolation Unit</option>
    </select>
    <select  data-filter-col="5" >
        <option value=""> Quarantine Status </option>
        <option value="Completed">Completed</option>
        <option value="On going">On going</option>
    </select>
    
    <!-- 
        #CheckBOX
    <label for="filter-tick">
        <input type="checkbox" id="filter-tick" data-filter-col="0,1,2,3" data-filter-val="B"> B</label> -->

</div>
<div>
    <table id="data" class="table table-primary">
        <thead>
            <tr>
                <th>Patient ID</th>
                <th>Patient Name</th>
                <th>Type</th>
                <th>Status</th>
                <th>Quarantine Type</th>
                <th>Quarantine Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM ViewAllDatarecentEntry";
                if(isset($_GET['searchkey'])){
                    $searchkey = $_GET['searchkey'];
                    if (is_numeric($searchkey)){
                        $sql = "SELECT * FROM ViewAllDatarecentEntry WHERE residentID = '$searchkey'";
                    }else{
                        $sql = "SELECT * FROM ViewAllDatarecentEntry WHERE  
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
                                        <?= $row['residentID']; ?></td>
                                    </a>
                                <td class="name">
                                    <a href="resident-profile.php?ResidentID=<?= $row['residentID']; ?>">
                                        <?= $row['residentFname']; ?>
                                        <?= $row['residentMname']; ?>
                                        <?= $row['residentLname']; ?>
                                        <?= $row['residentSuffix']; ?>
                                    </a>
                                </td>
                                <td><?= $row['patientType']; ?></td>
                                <td><?= $row['patientStatus']; ?></td>
                                <td><?= $row['patientQrtnType']; ?></td>
                                <td><?= $row['patientQrtnStatus']; ?></td>
                                <td>
                                    <a href="update.php?PatientQrtnID=<?= $row['patientQrtnID']; ?>">
                                        <span class="fas fa-edit text-warning"></span>
                                        Update
                                    </a> |
                                    <a href="transactions/delete.php?PatientQrtnID=<?= $row['patientQrtnID']; ?>">
                                        <span class="fas fa-trash text-danger"></span>
                                        Delete
                                    </a>
                                </td>
                        </tr>
            <?php
                    }
                }
            ?>
        </tbody>
    </table>
    <a href="resident-list.php" class="btn btn-primary form-control fas fa-plus">
        Add Patient
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