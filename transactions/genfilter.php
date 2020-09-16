<?php
  if(is_null($Type)&&is_null($Test)&&is_null($Status)&&is_null($QrtnType)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate ORDER BY residentID ASC" ;
  }else if (is_null($Test)&&is_null($Status)&&is_null($QrtnType)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
    $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' ORDER BY residentID ASC";
  }else if(is_null($Type)&&is_null($Status)&&is_null($QrtnType)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test' ORDER BY residentID ASC";
  }else if(is_null($Type)&&is_null($Test)&&is_null($QrtnType)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientStatus = '$Status' ORDER BY residentID ASC";
  } else if(is_null($Type)&&is_null($Test)&&is_null($Status)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE
            patientQrtnType = '$QrtnType' ORDER BY residentID ASC";
  }else if(is_null($Type)&&is_null($Test)&&is_null($Status)&&is_null($QrtnType)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientDiagnosis = '$Diagnosis' ORDER BY residentID ASC";
  }else if(is_null($Type)&&is_null($Test)&&is_null($Status)&&is_null($QrtnType)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE
            patientQrtnStatus = '$QrtnStatus' ORDER BY residentID ASC";
  }else if(is_null($Status)&&is_null($QrtnType)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientTest = '$Test' ORDER BY residentID ASC";
  }else if(is_null($Test)&&is_null($QrtnType)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientStatus = '$Status' ORDER BY residentID ASC";
  }else if(is_null($Test)&&is_null($Status)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientQrtnType = '$QrtnType' ORDER BY residentID ASC";
  }else if(is_null($Test)&&is_null($Status)&&is_null($QrtnType)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientDiagnosis = '$Diagnosis' ORDER BY residentID ASC";
  }else if(is_null($Test)&&is_null($Status)&&is_null($QrtnType)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type'AND
            patientQrtnStatus = '$QrtnStatus' ORDER BY residentID ASC";
  }else if(is_null($Type)&&is_null($QrtnType)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE
            patientTest = '$Test'AND
            patientStatus = '$Status'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Status)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientQrtnType = '$QrtnType'ORDER BY residentID ASC ";
  }
  else if(is_null($Type)&&is_null($Status)&&is_null($QrtnType)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientDiagnosis = '$Diagnosis'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Status)&&is_null($QrtnType)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Test)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Test)&&is_null($QrtnType)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE
            patientStatus = '$Status'AND
            patientDiagnosis = '$Diagnosis'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Test)&&is_null($QrtnType)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientStatus = '$Status'AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Test)&&is_null($Status)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Test)&&is_null($Status)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientQrtnType = '$QrtnType'AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Test)&&is_null($Status)&&is_null($QrtnType)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientDiagnosis = '$Diagnosis' AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($QrtnType)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientTest = '$Test'AND
            patientStatus = '$Status'ORDER BY residentID ASC ";
  }else if(is_null($Status)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientTest = '$Test'AND
            patientQrtnType = '$QrtnType'ORDER BY residentID ASC ";
  }else if(is_null($Status)&&is_null($QrtnType)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientTest = '$Test'AND
            patientDiagnosis = '$Diagnosis'ORDER BY residentID ASC ";
  }else if(is_null($Status)&&is_null($QrtnType)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientTest = '$Test'AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Test)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'ORDER BY residentID ASC ";
  }else if(is_null($Test)&&is_null($QrtnType)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientStatus = '$Status'AND
            patientDiagnosis = '$Diagnosis'ORDER BY residentID ASC ";
  }else if(is_null($Test)&&is_null($QrtnType)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientStatus = '$Status'AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Test)&&is_null($Status)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis'ORDER BY residentID ASC ";
  }else if(is_null($Test)&&is_null($Status)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientQrtnType = '$QrtnType'AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Test)&&is_null($Status)&&is_null($QrtnType)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientDiagnosis = '$Diagnosis' AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType' ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($QrtnType)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientStatus = '$Status'AND
            patientDiagnosis = '$Diagnosis'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($QrtnType)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientStatus = '$Status'AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Status)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Status)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientQrtnType = '$QrtnType'
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Status)&&is_null($QrtnType)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientDiagnosis = '$Diagnosis' AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Test)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis' ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Test)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Test)&&is_null($QrtnType)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientStatus = '$Status'AND
            patientDiagnosis = '$Diagnosis' AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Test)&&is_null($Status)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis' AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Diagnosis)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientTest = '$Test'AND
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'ORDER BY residentID ASC ";
  }else if(is_null($QrtnType)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientTest = '$Test'AND
            patientStatus = '$Status'AND
            patientDiagnosis = '$Diagnosis'ORDER BY residentID ASC ";
  }else if(is_null($QrtnType)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientTest = '$Test'AND
            patientStatus = '$Status'AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Test)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis' ORDER BY residentID ASC ";
  }else if(is_null($Test)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Test)&&is_null($Status)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis' AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis' ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Status)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis' AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)&&is_null($Test)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis' AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($QrtnStatus)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientTest = '$Test'AND
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis'ORDER BY residentID ASC ";
  }else if(is_null($Diagnosis)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientTest = '$Test'AND
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($QrtnType)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientTest = '$Test'AND
            patientStatus = '$Status'AND
            patientDiagnosis = '$Diagnosis' AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Status)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientTest = '$Test'AND
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis' AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Test)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientType = '$Type' AND
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis' AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }else if(is_null($Type)){
      $sql = "SELECT * FROM allgenerate WHERE 
            patientTest = '$Test'AND
            patientStatus = '$Status'AND
            patientQrtnType = '$QrtnType'AND
            patientDiagnosis = '$Diagnosis' AND
            patientQrtnStatus = '$QrtnStatus'ORDER BY residentID ASC ";
  }
?>