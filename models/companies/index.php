<?php
function SQL2Json($conn,$sql){
  if ($result = $conn -> query($sql)) {
                $datas = $result -> fetch_array(MYSQLI_ASSOC);
     $result -> free_result();
  }

    return json_encode($datas,JSON_UNESCAPED_UNICODE);
}

// ดึงกลุ่มหมวดหมู่ ทั้งหมด
function get_comp($conn){
	$sql = "SELECT * FROM companies";
	$datas = fetch($conn,$sql);
	return $datas;
  }

?>