<?php
/**Error 설명 */
error_reporting(E_ALL);

ini_set('display_errors', '1');
//작성자 입력을 위한 session 가져오기
// include '../inc/session.php';

$n_title = $_POST['n_title'];
$n_content = $_POST['n_content'];
$writer = $_POST['writer'];
$w_date = date("Y-m-d");

include "../inc/dbcon.php";

$sql = "insert into notice ";
$sql .= "(n_title, n_content, writer, w_date) " ;
$sql .= "values('$n_title','$n_content','$writer','$w_date');";

mysqli_query($dbcon,$sql);

mysqli_close($dbcon);

//리디렉션
echo "<script type='text/javascript'>
location.href = 'list.php'
</script>";
?>