<center>
<form name="data" method="post">
<textarea name="braun" style="height:100px;width:200" placeholder="414709"></textarea><br><br>
<input type="submit" name='darin' value=">">
</form>

<?php

error_reporting(0);
set_time_limit(0);

if($_POST['darin']){
$memek=explode("\r\n",$co=$_POST['braun']);
$count = count($memek);
$your_ip=$_SERVER['REMOTE_ADDR'];
echo"u checked $count by <font color=red> ".$your_ip."</font>";
function setelah($string, $substring) {
  $pos = strpos($string, $substring);
  if ($pos === false)
   return $string;
  else  
   return(substr($string, $pos+strlen($substring)));
}
foreach($memek as $klitoris){	
$data = setelah(file_get_contents("https://iin-bin.com/bin/".$klitoris), 'Total found');
preg_match_all("'<td>(.*?)</td>'si", $data, $match);
    foreach($match as $val)
	 {
$data = '
<table >
<tr>
<td>'.$klitoris.'</td>
<td>'.$val[1].'</td>
<td>'.$val[3].'</td>
<td>'.$val[4].'</td>
<td>'.$val[2].'</td>
</tr>
</table>
';
	}
echo $data ;	
	}
}
echo "</center>";
?>
