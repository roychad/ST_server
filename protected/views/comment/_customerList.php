<?php

$json = array();

$json['service_attitude'] = $siteMarkModel->service_attitude;
$json['delivery_speed'] = $siteMarkModel->delivery_speed;

foreach($results as $key => $result)
{
	$json['commentList'][$key]['text'] = utf8Substr($result['text'],0,50);
	$json['commentList'][$key]['create_time'] = $result['create_time'];
}

$json = JSON($json);

responseJSON($json);

?>