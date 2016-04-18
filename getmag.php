<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> MagNet-- <?php echo $_POST["flag"] ?> </title>
  <style>
  body
  {
    font-family:'Helvetica Neue','Lucida Grande','Microsoft YaHei',Arial,'Liberation Sans',FreeSans,'Hiragino Sans GB',sans-serif;;
  }
  textarea {background-color:#5bc0de;line-height:20px;border-radius:2px;padding:2px 10px;width:80%;outline:none;border:none }
  </style>
</head>
<body>

<script src="jq.js"> </script>
<div style="width:1000px;padding:9px;box-shadow:0px 0px 10px #337ab7;margin:20px auto;border-radius:5px">
<form method="post" action="getmag.php">
<input type="text" name="flag" style="outline:none;padding:5px;font-size:18px;border:1px solid #337ab7"> </input>
<input type="submit" value="Submit"> </input>
</form>
</div>

<div style="width:1000px;padding:20px;box-shadow:0px 0px 10px #337ab7;margin:20px auto;border-radius:5px">

<?php
function get($url)
{
static $sta1=1;
static $sta2=2;
static $sta3=8;
$sta1++;
$sta2=$sta2+2;
$sta3+= rand(1,4);
$ref = "referer:$url\r\n";
$cookie = "cookie:AD_adst_b_SM_T_728x90=1; AD_clic_b_POPUNDER=$sta1; btspread=1%7CMon%2C%2018%20Apr%202016%2010%3A48%3A09%20GMT; AD_tapt_b_SM_T_728x90=1; AD_wige_b_POPUNDER=2; AD_exoc_b_SM_T_728x90=1; AD_yepd_b_SM_B_728x90=1; AD_popa_b_POPUNDER=1; noadvtday=0; AD_yepd_b_SM_T_728x90=1; AD_gung_b_POPUNDER=1; AD_adca_b_POPUNDER=1; AD_prop_b_POPUNDER=1; AD_wwwp_b_SM_T_728x90=$sta2; AD_jav_b_SM_B_728x90=1; AD_jav_b_SM_T_728x90=3; AD_javu_b_SM_B_728x90=2; AD_javu_b_SM_T_728x90=$sta1; AD_wav_b_SM_B_728x90=$sta3; AD_jav_b_MD_T_728x90=1; AD_yepd_b_MD_B_728x90=1; AD_adst_b_MD_T_728x90=1; AD_javu_b_MD_B_728x90=1; AD_enterTime=1460951536; AD_jav_b_M_300x50=0; AD_javu_b_M_300x50=0; AD_wav_b_M_300x50=0; AD_yepd_b_M_300x50=0; _ga=GA1.2.2037412401.1460889408; _gat=1\r\n";
$ua = "User-Agent:Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36";
$context = stream_context_create(
   array("http" => 
     array("header" => $ref.$cookie.$ua)));
 return file_get_contents($url, false, $context);
}
function getmag($url)
{
  $s = get($url);
  preg_match_all("/(https:\/\/btio.pw\/magnet\/detail\/hash\/.*)\"/U",$s,$m);
for ( $i=0;$i<count($m[1]);++$i)
{
  $ss = get($m[1][$i]);
   preg_match("/(magnet:.*)\'/U",$ss,$mm);
   echo  "<textarea onclick=\"jQuery(this).select();\" readonly> ".$mm[1]."</textarea>";
//   sleep(2);
}
}
  $u = $_POST["flag"];
//$u = "bbi123";
  $url = "https://btio.pw/search/".urlencode($u);
if ($u!="") {getmag($url);}
?>
</div>
</body>
</html>
