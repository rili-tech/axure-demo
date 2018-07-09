<?php 
	$redis = new Redis();
    
    //连接
    $redis->connect('redis', 6379);
    
    //操作
    $redis->set('name', 'chenxinying');
    echo $redis->get('name');

    $redis->set('name', 'singing');
    echo $redis->get('name');
