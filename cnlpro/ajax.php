<?php
$con = mysql_connect("mysql6.000webhost.com","a4636824_fixit","vikram2293") or die("Couldn't Connect !!");
mysql_select_db("a4636824_fixit") or die("Couldn't Find DB");
$input=$_REQUEST['input'];
$input=mysql_real_escape_string(trim($input));
$data=mysql_query("SELECT Area FROM areas WHERE Area LIKE '%$input%'");

$arrcnt=-1;
$dataArray=array();
while($temp = mysql_fetch_assoc($data))
{
	foreach($temp as $key=>$val)
	{
		$temp[$key]=stripslashes($val);
		$arrcnt++;
	}

	$dataArray[$arrcnt]=$temp;
}

$list = "<ul class='unorganised'>";

foreach($dataArray as $val)
{
	$list .= "<li class='list'>".$val['Area']."</li>";
}

  $list .="</ul>";
  echo $list;


?>