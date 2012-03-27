<?php

$json = array();

foreach($results as $key => $result)
{
	$json[$key]['text'] = $result['text'];
	$json[$key]['create_time'] = $result['create_time'];
}

$json = JSON($json);

responseJSON($json);

?>