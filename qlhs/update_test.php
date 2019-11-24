<?php  
$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","") or die("ket noi khong thanh cong");
mysqli_select_db($conn,"hocsinh21")or die("ket noi khong thanh cong");

$mr = mysqli_query($conn,"SELECT *FROM hs WHERE id= '$id'")  or die("khong TIM duoc");
$chinhsua = mysqli_fetch_array($mr);
?>
<h1>SỬA THÔNG TIN SINH VIÊN</h1>
<link rel="stylesheet" type="text/css" href="style.css">
<form action='xl_update.php?id=<?php echo $chinhsua['id']?>' method="post">
<p>Tên: </p><input type="text" name="ten" value="<?php echo $chinhsua['name'];  ?>">
<p>Điểm Java:</p> <input type="number" name="diemJava" value="<?php echo $chinhsua['score_java'];  ?>" required="">
<p>Điểm C:</p> <input type="number" name="diemC" value="<?php echo $chinhsua['score_c'];  ?>" required="">

<p><input type="submit" name="" class="button" value="Sửa"></p>
</form>