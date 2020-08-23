<div class="container-fluid">
    <br>
    
    <ul style="list-style-type: none;margin: 0;padding: 0;overflow: hidden;background-color: #007BFD;">
      <li style="float: right;display: block;color: black;text-align: center;padding: 10px 12px;text-decoration: none;"><a href="index.php" style="color: #f0ff00;font-size: 20px;">Logout</a></li>
      <li style="float: right;display: block;color: white;text-align: center;padding: 10px 12px;text-decoration: none;"><a href="#news" style="color: #ffffff; font-size: 20px;">Admin</a></li>
      <li style="float: right;display: block;color: white;text-align: center;padding: 10px 12px;text-decoration: none;"><a href="records.php" style="color: #ffffff; font-size: 20px;">Main</a></li>
    </ul>
    <div>
        <h1 style="color: #ffffff;text-align: center;margin: 1% 2% 1%;" >List of Patients</h1>
    </div>
    

   <div>
        <form action="<?= $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <input type="text" name="searchkey" placeholder="Name or ID no." style="height: 40px;">
                <button class="btn btn-primary" style="background-color: #007BFD;">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    
    <table id="data" class="table table-primary">
        <thead>
            <tr>
                <th>Resident ID</th>
                <th>Patient Name</th>
                <th class="table-filters">
                    <select data-filter-col="2" >
                        <option value="">  Patient Type  </option>
                        <option value="PUI">PUI</option>
                        <option value="PUM">PUM</option>
                    </select>
                </th>
                <th class="table-filters">
                    <select  data-filter-col="3" >
                        <option value=""> Patient Status  </option>
                        <option value="N/A">To be tested</option>
                        <option value="Positive">Positive</option>
                        <option value="Negative">Negative</option>
                    </select>
                </th>
                <th class="table-filters">
                    <select  data-filter-col="4" >
                        <option value="">  Quarantine Type  </option>
                        <option value="Homebase">Homebase</option>
                        <option value="Isolation Unit">Barangay Isolation Unit</option>
                    </select>
                </th>
                <th class="table-filters">
                    <select  data-filter-col="5" >
                        <option value=""> Quarantine Status </option>
                        <option value="Completed">Completed</option>
                        <option value="On going">On going</option>
                    </select>
                </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $sql = "SELECT * FROM   viewalldatarecententry ";
                if(isset($_GET['searchkey'])){
                    $searchkey = $_GET['searchkey'];
                    if (is_numeric($searchkey)){
                        $sql = "SELECT * FROM   viewalldatarecententry WHERE residentID = '$searchkey'";
                    }else{
                        $sql = "SELECT * FROM   viewalldatarecententry WHERE  
                        CONCAT(' ' , residentFname, residentMname,residentLname,residentSuffix) LIKE '%$searchkey%'  or
                        CONCAT(' ' ,residentFname,' ',residentMname,' ',residentLname,' ',residentSuffix) LIKE '%$searchkey%'  or 
                        CONCAT (' ' , residentFname,' ',residentLname, ' ', residentSuffix) LIKE '%$searchkey%' or
                        CONCAT (' ' , residentFname,' ',residentLname) LIKE '%$searchkey%' or  
                        CONCAT (' ', residentLname,' ',  residentFname) LIKE '%$searchkey%'";

                /*$sql = "SELECT * FROM tbl_resident join tbl_patient on tbl_resident.residentID = tbl_patient.residentID";
                if(isset($_GET['searchkey'])){
                    $searchkey = $_GET['searchkey'];
                    if (is_numeric($searchkey)){
                        $sql = "SELECT * FROM tbl_patient join tbl_resident on tbl_resident.residentID = tbl_patient.residentID WHERE residentID = '$searchkey'";
                    }else{
                        $sql = "SELECT * FROM tbl_resident join tbl_patient on tbl_resident.residentID = tbl_patient.residentID WHERE  
                        CONCAT(' ' , residentFname, residentMname,residentLname,residentSuffix) LIKE '%$searchkey%'  or
                        CONCAT(' ' ,residentFname,' ',residentMname,' ',residentLname,' ',residentSuffix) LIKE '%$searchkey%'  or 
                        CONCAT (' ' , residentFname,' ',residentLname, ' ', residentSuffix) LIKE '%$searchkey%' or
                        CONCAT (' ' , residentFname,' ',residentLname) LIKE '%$searchkey%' or  
                        CONCAT (' ', residentLname,' ',  residentFname) LIKE '%$searchkey%'";**/
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