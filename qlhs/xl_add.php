<?php  
$ten = $_POST["ten"];
$diemJava = $_POST["diemJava"];
$diemC = $_POST["diemC"];
$dtb= ($diemJava + $diemC)/2;

$conn = mysqli_connect("localhost","root","") or die("ket noi khong thanh cong");
mysqli_select_db($conn,"hocsinh21")or die("ket noi khong thanh cong");

$mr = mysqli_query($conn,"insert into hs(name, score_java,score_c,dtb) values('$ten','$diemJava','$diemC','$dtb')") or die("khong them duoc");
if ($mr) {
	header("location: test.php");
	# code...
}

?>