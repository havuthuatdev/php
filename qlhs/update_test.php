<?php  
$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","") or die("ket noi khong thanh cong");
mysqli_select_db($conn,"hocsinh21")or die("ket noi khong thanh cong");

$mr = mysqli_query($conn,"SELECT *FROM hs WHERE id= '$id'")  or die("khong TIM duoc");
$chinhsua = mysqli_fetch_array($mr);
?>
<h1>Sua thong tin sinh vien </h1>

<form action='xl_update.php?id=<?php echo $chinhsua['id']?>' method="post">
<p>Ten: <input type="text" name="ten" value="<?php echo $chinhsua['name'];  ?>"></p>
<p>Diem Java: <input type="number" name="diemJava" value="<?php echo $chinhsua['score_java'];  ?>" required=""></p>
<p>Diem C: <input type="number" name="diemC" value="<?php echo $chinhsua['score_c'];  ?>" required=""></p>

<input type="submit" name="" value="Sua">
</form>