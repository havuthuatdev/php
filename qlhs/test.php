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

<h1>Thong tin hoc sinh </h1>
<p><a href="add_test.php">Them hoc sinh</a></p>

<table border="1" width="500px">
	<tr>
		<th>Stt</th>
		<th>Ten</th>
		<th>Diem Java</th>
		<th>Diem C</th>
		<th>DTB</th>
		<th>Action</th>
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
			        <a href ='update_test.php?id=".$ur['id']."' >Sua</a> | 
			        <a href ='delete_test.php?id=".$ur['id']."' >Xoa</a>
			     </td>";
			echo "</tr>";
		}
	?>
</table>
