<?php

$json = array();

if(isset($result['create_time']))
{
	$json['text'] = $result['text'];
	$json['create_time'] = $result['create_time'];
	$json = JSON($json);
	responseJSON($json);
}
else
{
	$json['text'] = '这条记录不存在或者已被删除！';
	$json['create_time'] = date("Y-m-d H:i:s");
	$json = JSON($json);
	responseJSON($json);
}




?>