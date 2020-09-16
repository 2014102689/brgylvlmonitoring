<?php  
  include('../utilities/dbconnect.php');
  $ResidentID = $_POST['ResidentID'];
  $sql = "SELECT * FROM allgenerate WHERE residentID = '$ResidentID' ORDER BY patientQrtnID ASC" ;
  $data = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  function fetch_data()  
   {    
      include('../utilities/dbconnect.php');
      $ResidentID = $_POST['ResidentID'];
      $output = '';
      $sql = "SELECT * FROM tbl_patient WHERE residentID = '$ResidentID' ORDER BY patientQrtnID ASC" ;
      $result = mysqli_query($conn, $sql);
      $data = mysqli_fetch_assoc(mysqli_query($conn, $sql));
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>    
                        <td>'.$row["patientQrtnID"].'</td>
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
      <h3 align="left">Resident ID: '.$data['residentID'].'</h3>
      <h3 align="left">Name: '.$data['residentFullName'].'</h3><br/> 
      <table border=".5" cellspacing="0" cellpadding="3">  
           <tr>  
                <th>Qurantine ID</th>
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
      $content .= '
      <h5 align="left">This is a copy of Quarantine History Record of <i>'.$data['residentFullName'].'.</i></h5><br/> 
      </table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('Quarantine Report.pdf', 'I');  
 }  
 ?>  