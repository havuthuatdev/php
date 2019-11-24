<?php
// $server = "localhost";
// $user = "root";
// $password ="";
// $dbName = "hocsinh21";
// $db = new mysqli($server, $user, $password, $dbName);
$db = new mysqli("localhost","root" , "","hocsinh21" );

// $sql = "select *from hs ";
// $db->query($sql);
$qr = mysqli_query($db,"select *from hs");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
<h1>THÔNG TIN HỌC SINH</h1>
<p><a href="add_test.php">Thêm học sinh</a></p>

<table border="1" width="500px">
	<tr>
		<th>STT</th>
		<th>Tên</th>
		<th>Điểm Java</th>
		<th>Điểm C</th>
		<th>ĐTB</th>
		<th>Chọn</th>
		<!-- <i class="fa fa-trash"></i> -->
	</tr>
	<?php  
		while ($ur = mysqli_fetch_array($qr)) {
			echo "<tr>";
			echo "<td>".$ur["id"]."</td>";
			echo "<td>".$ur["name"]."</td>";
			echo "<td>".$ur["score_java"]."</td>";
			echo "<td>".$ur["score_c"]."</td>";
			echo "<td>".$ur["dtb"]."</td>";

			echo "<td> 
			        <a href ='update_test.php?id=".$ur['id']."' >Sửa</a> |
			        <a href ='delete_test.php?id=".$ur['id']."' >Xoá</a>
			     </td>";
			echo "</tr>";
		}
	?>
</table>

</body>
</html>
