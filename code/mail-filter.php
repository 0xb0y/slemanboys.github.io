<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8"/>
	<meta name="description" content="eMail Extractor" />
	<meta name="keywords" content="mail extractor, extractor, email extractor, extract email" />
	<meta name="author" content="Slackercode Priv8 Tool" />
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<title>eMail Extractor</title>
	<link rel="SHORTCUT ICON" href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Sasori_Symbol.svg/120px-Sasori_Symbol.svg.png"/>
	<link rel="stylesheet" href="css/filter.css">
</head>

<!--

This Script coded by Slackerc0de
alecs[at]slackerc0de[dot]us

Jembuted By Me

-->

<header>
<pre style="text-align: center; color: deeppink; font-weight: bold;">
 _____ _                           ______                 
/  ___| |                          | ___ \                
\ `--.| | ___ _ __ ___   __ _ _ __ | |_/ / ___  _   _ ___ 
 `--. \ |/ _ \ '_ ` _ \ / _` | '_ \| ___ \/ _ \| | | / __|
/\__/ / |  __/ | | | | | (_| | | | | |_/ / (_) | |_| \__ \
\____/|_|\___|_| |_| |_|\__,_|_| |_\____/ \___/ \__, |___/
                                                 __/ |    
                                                |___/     
</pre>
<center>
<font color="black" face="kristen itc"><i>" True attacker always moving in the Shad0w. "</i></font></center>
<br/>
<br/>
<br/>
</header>

<body >
 <center>
<form method="post">
        <div class="style1">
                <textarea name="emails" placeholder= "anjing@kamu.com" rows="10" style="width:20%"></textarea>
                <br /><br />
                <input type="submit" value=" > " />
               
                </div>
</form></center><br /><br />
<?PHP

$emails = $_POST['emails'];
$ex     = explode("\n", $emails);
$count  = count($ex);
if (isset($emails) && $count >= 1) {
    echo "<center><font color = 'white'><b>$count </font>Email counts  </b></center><br />";
} else {
    echo "<center>  
 </center>";
    exit;
}

if (isset($emails)) {
    
    
    for ($i = 0; $i <= $count; $i++) {
        $d = strtolower($ex[$i]);
        
        if (strstr($d, "hotmail") || strstr($d, "live") || strstr($d, "msn") || strstr($d, "outlook")) {
            $hotmail .= $d;
            $nh = $nh + 1;
        } else {
            if (strstr($d, "yahoo") || strstr($d, "ymail") || strstr($d, "rocketmail")) {
                $yahoo .= $d;
                $ny = $ny + 1;
            } else {
                if (strstr($d, "gmail") || strstr($d, "googlemail")) {
                    $gmail .= $d;
                    $ng = $ng + 1;
                } else {
                    if (strstr($d, "aol")) {
                        $aol .= $d;
                        $na = $na + 1;
                    } else {
                        if (strstr($d, "mail.ru")) {
                            $mailru .= $d;
                            $nr = $nr + 1;
                        } else {
                            if (strstr($d, "wanadoo")) {
                                $wanadoo .= $d;
                                $nw = $nw + 1;
                            } else {
                                if (strstr($d, "ntlworld")) {
                                    $ntlworld .= $d;
                                    $nt = $nt + 1;
                                } else {
                                    if (strstr($d, "gmx")) {
                                        $gmx .= $d;
                                        $ngm = $ngm + 1;
                                    } else {
                                        if (strstr($d, "@web.")) {
                                            $web .= $d;
                                            $nw2 = $nw2 + 1;
                                        } else {
                                            if (strstr($d, "comcast")) {
                                                $comcast .= $d;
                                                $ncc = $ncc + 1;
                                            } else {
                                                if (strstr($d, "verizon")) {
                                                    $verizon .= $d;
                                                    $nvz = $nvz + 1;
                                                } else {
                                                    if (strstr($d, "shaw.ca")) {
                                                        $shaw .= $d;
                                                        $nsh = $nsh + 1;
                                                    } else {
                                                        if (strstr($d, "cox.net")) {
                                                            $cox .= $d;
                                                            $ncx = $ncx + 1;
                                                        } else {
															if (strstr($d, "mac.com") || strstr($d, "icloud.com")) {
																$mac .= $d;
																$nmac = $nmac + 1;
															} else {
																$other .= $d;
																$nn = $nn + 1;
															}
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
?>
<center><table style="width: 30%">
<tr>      
<td><center>hotmail ( <?
echo "<font color = 'black'>" . $nh . "</font>";
?> ) </center><textarea name="hotmailx" cols="30" rows="10" ><?
echo $hotmail;
?></textarea></td>
<td><center>gmail ( <?
echo "<font color = 'black'>" . $ng . "</font>";
?> )</center><textarea name="gmailx" cols="30" rows="10" ><?
echo $gmail;
?></textarea></td>
<td><center>aol ( <?
echo "<font color = 'black'>" . $na . "</font>";
?> )</center><textarea name="aolxx" cols="30" rows="10" ><?
echo $aol;
?></textarea></td>
<td><center>yahoo ( <?
echo "<font color = 'black'>" . $ny . "</font>";
?> )</center><textarea name="yahoox" cols="30" rows="10" ><?
echo $yahoo;
?></textarea></td>
<td><center>mail.ru ( <?
echo "<font color = 'black'>" . $nr . "</font>";
?> )</center><textarea name="othersx" cols="30" rows="10" ><?
echo $mailru;
?></textarea></td>
</tr>
<tr>
<td><center>wanadoo ( <?
echo "<font color = 'black'>" . $nw . "</font>";
?> )</center><textarea name="othersx" cols="30" rows="10" ><?
echo $wanadoo;
?></textarea></td>
<td><center>ntlworld ( <?
echo "<font color = 'black'>" . $nt . "</font>";
?> )</center><textarea name="othersx" cols="30" rows="10" ><?
echo $ntlworld;
?></textarea></td>
<td><center>gmx ( <?
echo "<font color = 'black'>" . $ngm . "</font>";
?> )</center><textarea name="othersx" cols="30" rows="10" ><?
echo $gmx;
?></textarea></td>
<td><center>web ( <?
echo "<font color = 'black'>" . $nw2 . "</font>";
?> )</center><textarea name="othersx" cols="30" rows="10" ><?
echo $web;
?></textarea></td>
<td><center>comcast ( <?
echo "<font color = 'black'>" . $ncc . "</font>";
?> )</center><textarea name="othersx" cols="30" rows="10" ><?
echo $comcast;
?></textarea></td>
</tr>
<tr>
<td><center>verizon ( <?
echo "<font color = 'black'>" . $nvz . "</font>";
?> )</center><textarea name="othersx" cols="30" rows="10" ><?
echo $verizon;
?></textarea></td>
<td><center>shaw.ca ( <?
echo "<font color = 'black'>" . $nsh . "</font>";
?> )</center><textarea name="othersx" cols="30" rows="10" ><?
echo $shaw;
?></textarea></td>
<td><center>cox ( <?
echo "<font color = 'black'>" . $ncx . "</font>";
?> )</center><textarea name="othersx" cols="30" rows="10" ><?
echo $cox;
?></textarea></td>
<td><center>mac ( <?
echo "<font color = 'black'>" . $nmac . "</font>";
?> )</center><textarea name="othersx" cols="30" rows="10" ><?
echo $mac;
?></textarea></td>
<td><center>other mails ( <?
echo $nn - 1;
?> )</center><textarea name="othersx" cols="30" rows="10" ><?
echo $other;
?></textarea></td>
</tr>
</table></center>
</body>
