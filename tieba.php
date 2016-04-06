<?php

function signadd($para)
{

$cookie = "Content-type: application/x-www-form-urlencoded\r\nCookie: BDUSS=jFhSVR-amtQSTB4b2pZVjFuci1BNUw2dE5-ZEN6MFhGOGNYdmdBYVpBZlhCLWhXQVFBQUFBJCQAAAAAAAAAAAEAAAClcrkIdm94dHJpb3IAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANd6wFbXesBWQ;";

   $data = "ie=utf-8&kw=$para";
  
   $options = array(
    "http"=>array(
     "method" => "POST",
     "header" => $cookie,
     "content" => $data 
    )
   );
  
  $url = "http://tieba.baidu.com/sign/add";
  $context = stream_context_create($options);
echo   file_get_contents($url,false,$context);
}  

  signadd("amd");
  signadd("intel");
  signadd("sae");
  signadd("nba");
  signadd("dota2");
  signadd("dota");
  signadd("图拉丁");
 
?>
