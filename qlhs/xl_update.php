<?php  
$id = $_GET['id'];

$ten = $_POST["ten"];
$diemJava = $_POST["diemJava"];
$diemC = $_POST["diemC"];
$dtb= ($diemJava + $diemC)/2;

$conn = mysqli_connect("localhost","root","") or die("ket noi khong thanh cong");
mysqli_select_db($conn,"hocsinh21")or die("ket noi khong thanh cong");

$mr = mysqli_query($conn,"UPDATE hs SET name = '$ten', score_java= '$diemJava', score_c = '$diemC', dtb = '$dtb' where id= '$id'")  or die("khong sua duoc");
if ($mr) {
	header("location: test.php");
}
?>