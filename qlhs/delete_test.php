<?php  
$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","") or die("ket noi khong thanh cong");

mysqli_select_db($conn,"hocsinh21")or die("ket noi khong thanh cong");

$mr = mysqli_query($conn,"delete from hs where id= '$id'")  or die("khong xoa duoc");
if ($mr) {
	header("location: test.php");
}

?>