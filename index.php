<?php
function signadd()
{
    //$cookie = "Cookie:__cfduid=d31cbd663f86f6ff9d1e9995b94e4b8941459841652; PHPSESSID=4sgd8kvob2nt5grnjhidlf6fo5; username=13054716196; userid=79714; jifen=43; yucun=0.6560; info=71720749f49bd6867dd0e5b4b6c3d926";
   $data = "username=13054716196&userpassword=1qaz2wsx&mobile_code=&submit.x=110&submit.y=25";
  
   $options = array(
    "http"=>array(
     "method" => "POST",
     "content" => $data 
    )
   );
  
  $url = "http://yingangsoft.cn/userlogin.php?action=fs";
  $context = stream_context_create($options);
   file_get_contents($url,false,$context);
        
    $a = $http_response_header;
    
   $cookie = "Cookie:"; 
    
  foreach($a as $s)
  {   
    preg_match("/Set-Cookie: (.*)($|;)/U",$s,$m);
      if (!($m[1]==""))  {$cookie .= " $m[1];";}
    
  }  
    
    /*   $data = "userid=79714";*/
  
   $options = array(
    "http"=>array(
     "method" => "GET",
     "header" => $cookie
        //     "content" => $data 
    )
   );
  
  $url = "http://yingangsoft.cn/user.php?zt=fs";
  $context = stream_context_create($options);
echo   file_get_contents($url,false,$context);    
    
    
}  
// for ($i=0;$i<10;++$i)
 {
 //      signadd();
 }
?>
