<?php

$json = array();

foreach($results as $key => $result)
{
	$json[$key]['text'] = utf8Substr($result['text'],0,50);
	$json[$key]['create_time'] = $result['create_time'];
}

$json = JSON($json);

responseJSON($json);

?>