<?php

  $a = new Memcache;
  
  $a->set("nihao","shijie");
  
  echo $a->get("nihao");

  ?>
