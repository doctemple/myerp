<?php
function SQL2Json($conn,$sql){
  if ($result = $conn -> query($sql)) {
                $datas = $result -> fetch_array(MYSQLI_ASSOC);
     $result -> free_result();
  }

    return json_encode($datas,JSON_UNESCAPED_UNICODE);
}

// ดึงกลุ่มหมวดหมู่ ทั้งหมด
function getModuleData($table,$conn){
	$sql = "SELECT * FROM $table";
	$datas = fetch($conn,$sql);
	return $datas;
  }

function FieldType($conn,$table){
    $sql = "SHOW FIELDS FROM $table";
    $ffs = fetch($conn,$sql);
    $datas = array();
    foreach($ffs as $ff){
      if (strpos($ff['Field'], 'password') !== false) { $datas[$ff['Field']]='password'; }
      elseif (strpos($ff['Field'], 'email') !== false) { $datas[$ff['Field']]='email'; }
      elseif (strpos($ff['Field'], 'icon') !== false) { $datas[$ff['Field']]='icon'; }  
      elseif (strpos($ff['Field'], 'visit') !== false) { $datas[$ff['Field']]='visit'; }  
      elseif (strpos($ff['Field'], 'type') !== false) { $datas[$ff['Field']]='dropdown'; }  
      elseif (strpos($ff['Field'], 'created') !== false) { $datas[$ff['Field']]='datetime'; }   
      elseif (strpos($ff['Field'], 'updated') !== false) { $datas[$ff['Field']]='datetime'; }  
      elseif (strpos($ff['Field'], 'gender') !== false) { $datas[$ff['Field']]='gender'; }     
      elseif (strpos($ff['Field'], 'phone') !== false) { $datas[$ff['Field']]='phone'; }      
      elseif (strpos($ff['Field'], 'time') !== false) { $datas[$ff['Field']]='time'; }
      elseif (strpos($ff['Field'], 'date') !== false) { $datas[$ff['Field']]='date'; }     
      elseif(strpos($ff['Field'], 'id')  !== false){ $datas[$ff['Field']]='id'; }
      elseif(strpos($ff['Type'], 'varchar')  !== false){ $datas[$ff['Field']]='input'; }
      elseif(strpos($ff['Type'], 'text')  !== false){ $datas[$ff['Field']]='text'; }
      elseif(strpos($ff['Type'], 'int')  !== false){ $datas[$ff['Field']]='number'; }
      elseif(strpos($ff['Type'], 'datetime')  !== false){ $datas[$ff['Field']]='datetime'; }              
      else{ $datas[$ff['Field']] = $ff['Type']; }
    }
   
  return $datas;
}

function getStruct($conn,$table){
    $sql = "SHOW FIELDS FROM $table";
    $ffs = fetch($conn,$sql);
    foreach($ffs as $ff){
        $datas[$ff['Field']] = $ff['Type']; 
    }
    return $datas;
    }

  /*  
  function getStruct($table,$conn){
    $sql = "SELECT * FROM $table limit 1";
    $datas = fetch($conn,$sql);
    return $datas[0];
    }
*/

function getModules($conn){
      $sql = "SHOW TABLES";
      if ($result = $conn -> query($sql)) {
        $datas = $result -> fetch_all(MYSQLI_ASSOC);
        return $datas;
      }
//Debug($sql);
  }

?>