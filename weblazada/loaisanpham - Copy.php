
	<?php 
		include_once("config.php");

		// if(isset($_GET["tendangnhap"]) && isset($_GET["matkhau"])){
		// 	echo $_GET["tendangnhap"];
		// 	echo $_GET["matkhau"];
		// }

		$maloaicha = $_POST["maloaicha"];

		$truyvancha = "SELECT *  FROM loaisanpham WHERE MALOAI_CHA = ".$maloaicha;
		$ketqua = mysqli_query($conn,$truyvancha);
		$chuoijson = array();
		echo "{";
		echo "\"LOAISANPHAM\":";
		if($ketqua){
			while ($dong=mysqli_fetch_array($ketqua)) {
				// cách 1 
					$chuoijson[] = $dong;

				// end cách 1
				// laydanhsachloaisp($dong["MALOAISP"]);
				
				//cách 2
				// array_push($chuoijson, array("TENLOAISP"=>$dong["TENLOAISP"],'MALOAISP' => $dong["MALOAISP"]));
				//end cách 2
			}

			echo json_encode($chuoijson,JSON_UNESCAPED_UNICODE);
		}
		echo "}";

		

	?>
