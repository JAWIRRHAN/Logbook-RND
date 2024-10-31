<?php 

function getUserById($id, $koneksi){
    $sql = "SELECT * FROM users WHERE id = ?";
	$stmt = $koneksi->prepare($sql);
	$stmt->execute([$id]);
    
    if($stmt->rowCount() == 1){
        $user = $stmt->fetch();
        return $user;
    }else {
        return 0;
    }
}

 ?>