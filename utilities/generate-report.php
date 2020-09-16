<?php  
function fetch_data()  
 {    
      include_once('../utilities/dbconnect.php');
      if ($_POST['Type'] === 'NULL') {$Type = NULL;}
      else{$Type = $_POST['Type'];}
      if ($_POST['Test'] === 'NULL') {$Test = NULL;}
      else{$Test = $_POST['Test'];}
      if ($_POST['Status'] === 'NULL') {$Status = NULL;}
      else{$Status = $_POST['Status'];}
      if ($_POST['QrtnType'] === 'NULL') {$QrtnType = NULL;}
      else{$QrtnType = $_POST['QrtnType'];}
      if ($_POST['Diagnosis'] === 'NULL') {$Diagnosis = NULL;}
      else{$Diagnosis = $_POST['Diagnosis'];}
      if ($_POST['QrtnStatus'] === 'NULL') {$QrtnStatus = NULL;}
      else{$QrtnStatus = $_POST['QrtnStatus'];}
      // var_dump(is_null($Type));
      // var_dump($Type);
      // var_dump(is_null($Test));
      // var_dump($Test);
      // var_dump(is_null($Status));
      // var_dump($Status);
      // var_dump(is_null($QrtnType));
      // var_dump($QrtnType);
      // var_dump(is_null($Diagnosis));
      // var_dump($Diagnosis);
      // var_dump(is_null($QrtnStatus));
      // var_dump($QrtnStatus);
      $output = '';
      include_once('../transactions/genfilter.php');
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>    
                        <td>'.$row["residentID"].'</td>
                        <td>'.$row["residentFullName"].'</td>
                        <td>'.$row["patientType"].'</td>  
                        <td>'.$row["patientTest"].'</td>  
                        <td>'.$row["patientStatus"].'</td>  
                        <td>'.$row["patientQrtnType"].'</td>  
                        <td>'.$row["patientDiagnosis"].'</td>  
                        <td>'.$row["patientQrtnStatus"].'</td>
                        <td>'.$row["patientQrtnStart"].'</td>
                        <td>'.$row["patientQrtnEnd"].'</td>
                   </tr>  
                        ';  
      }  
      return $output;  
 }  
 if(isset($_POST["generate"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Qurantine Report");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();
      $content = '';  
      $content .= '  
      <h1 align="center">Barangay Quarantine Report</h1><br/> 
      <table border=".5" cellspacing="0" cellpadding="3">  
           <tr>  
                <th>Resident ID</th>
                <th>Patient Name</th>
                <th>Patient Type</th>
                <th>Patient Test</th>
                <th>Patient Status</th>
                <th>Quarantine Type</th>
                <th>Diagnosis</th>
                <th>Quarantine Status</th>
                <th>Quarantine Start</th>
                <th>Quarantine End</th>
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('Quarantine Report.pdf', 'I');  
 }  
 ?>  