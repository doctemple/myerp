<?php
function get_user($conn,$id) {
	$sql = "SELECT * FROM users where id=".$id;
	if ($result = $conn -> query($sql)) {
		$datas = $result -> fetch_array(MYSQLI_ASSOC);
		$result -> free_result();
		}		
		
		return $datas;
}
?>