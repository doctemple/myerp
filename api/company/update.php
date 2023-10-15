<?php
function Query($conn,$sql) {		
    return $conn->query($sql);
}

if($birth!=''){
    $y= date("Y",strtotime($birth))-543;
    $m= date("n",strtotime($birth));
    $d= date("j",strtotime($birth));
    $datec = "$y-$m-$d";
}

	$sql = "UPDATE companies SET  
    company_english = '$company_en',
    company_thai = '$company_th',
    tax_identification = '$tax_identification',
    elec_identification = '$elec_identification',
    birth = '$datec',
    mobilephone = '$mobilephone',
    workphone = '$workphone',
    email = '$email1',
    chat_line = '$line',
    descript = '$description'
    WHERE id=".$id;

$_SESSION['activity'] = $sql;

if(Query($conn,$sql)){
 header("location:../index.php?comp");
}else{
 echo "Update Error";
}
    
?>