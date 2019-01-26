<?php
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'soal_enam';

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if (!$conn) {
		die ('Gagal terhubung MySQL : ' . mysqli_connect_error());
	}

	$conn = OpenCon();
	$sql = "SELECT product_categories.id, product_categories.name, products.id, products.category_id FROM product_categories INNER JOIN products ON product_categories.id=products.id";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
         $dataArray = [];
         while($row = mysqli_fetch_assoc($result)) {
           array_push($dataArray, $row);
         }
         echo json_encode($dataArray);
    }
?>