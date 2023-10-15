<?php


// ดึงกลุ่มหมวดหมู่ ทั้งหมด
function get_groups($conn){
	$sql = "SELECT * FROM nav_menu";
	$datas = fetch($conn,$sql);
	return $datas;
  }

// แปลง Group Code มาเป็น ชื่อ หมวดหมู่ เมนู
function get_subName($conn,$subcode) {
	$sql = "SELECT * FROM nav_menu where sub_code = '$subcode' limit 1";
	$datas = fetch($conn,$sql);
	return trim($datas[0]['sub_name']);
}

// ดึงข้อมูล Page ตาม Page Code
function get_page($conn,$pcode) {
	$sql = "SELECT * FROM main_menu where page_code = '$pcode' limit 1";
	$datas = fetch($conn,$sql);

	return $datas[0];
}

// แปลง Page Code มาเป็น Group Code
function get_subCode($conn,$pcode) {
	$sql = "SELECT * FROM main_menu where page_code = '$pcode' limit 1";
	$datas = fetch($conn,$sql);
	return trim($datas[0]['sub_code']);
}



// ดึงรายการเมนู
function get_navs($conn) {
	$sql = "SELECT * FROM main_menu where visit = true order by menu_order";
	$datas = fetch($conn,$sql);
	return $datas;
}

?>
