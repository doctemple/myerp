<?php
function Query($conn,$sql) {		
    return $conn->query($sql);
}

function fetch($conn,$sql){
	if ($result = $conn -> query($sql)) {
		$datas = $result -> fetch_all(MYSQLI_ASSOC);
		$result -> free_result();
		//Debug($sql);
		//Debug($datas);
		return $datas;
	}else{
		return array();
	}
}
?>