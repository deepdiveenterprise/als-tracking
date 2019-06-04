<?php
$myagentn=$_SERVER['HTTP_USER_AGENT'];

$myurl="https://tracking.vcommission.com/aff_c?offer_id=7168&aff_id=78185&aff_sub=1";
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $myurl,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 1,
  CURLOPT_HEADER =>1,
  CURLOPT_NOBODY=>1,
  CURLOPT_USERAGENT=>$_SERVER['HTTP_USER_AGENT'],
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "User-Agent: ".$_SERVER['HTTP_USER_AGENT']."",
    "X-Forwarded-For: ".$_SERVER['REMOTE_ADDR']."",
    "cache-control: no-cache"
  ),
));

$http_data = curl_exec($curl);
$curl_info = curl_getinfo($curl);
$headers = substr($http_data, 0, $curl_info["header_size"]); 
preg_match("!\r\n(?:Location|URI): (.?) *\r\n!", $headers, $matches);
$url2 = $matches[1];

$my_string = $url2;
$mystart=strpos($my_string,"url");
$mystart=$mystart+4;
$myurl=substr($my_string,$mystart);
$myurl=str_replace("%3A%2F%2F","://",$myurl);
$myurl=str_replace("%3F","?",$myurl);
$myurl=str_replace("%26","&",$myurl);
$myurl=str_replace("%3D","=",$myurl);
?>
<html>
<iframe width="1" style="display:none;" height="1" border="0" src="https://tracking.vcommission.com/aff_c?offer_id=7168&aff_id=78185&aff_sub=1" onload="gotoURL();" ></iframe>

<script type="text/javascript">
	function gotoURL(){
	        window.setTimeout( "showlink()", 2000);
	        }
	</script>
	 
<script type="text/javascript">       
	       function showlink(){
		window.location.href = 'https://www.gearbest.com';
		}
	</script>
</html>
