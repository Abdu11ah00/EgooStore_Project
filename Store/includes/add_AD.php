<?php
//Connect to MySQL
$con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
if (!$con) {
  echo mysqli_connect_errno();
  exit;
}

$query_ad = "SELECT * FROM `ad` WHERE `ad_Published` = 1 ";
$result_ad = mysqli_query($con, $query_ad);

$str = array();
$i = 0;
while ($row_ad = mysqli_fetch_array($result_ad)) {

  $i++;
  $str[] = $row_ad['ad_content'];

}

if (count($str) > 0)
  echo $str[rand(0, $i - 1)];







$str1 = "
<div class=' alert alert-dark alert-dismissible fade show' role='alert'>
<strong>Secure Tour Digital Life:</strong> Use coupon code SECURE15 for 15% off on any <a href='#' class='alert-link'>antivirus software</a>. 
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";

$str2 = "
<div class=' alert alert-dark alert-dismissible fade show' role='alert'>
<strong>30%</strong> discount with code 'KSA'
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
?>