<?php 
	$redis = new Redis();
    //连接
    $redis->connect('redis', 6379);
    //检测是否连接成功
    echo "Server is running: " . $redis->ping();