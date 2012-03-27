<?php

//Get Infomations
$info_array = array(
	'id' => $model->id,
	'order_id' => $model->order_id,
	'order_state_id' => $model->order_state_id,
	'create_time' => $model->create_time,
	'product_id' => $model->product_id,
	'entered_pid' => $model->entered_pid,
	'remark' => $model->remark,
	'order_info' => $model->order_info,
	'product_name' => $model->product_name,
);

//Get JSON
$json = JSON($info_array);

responseJSON($json);

?>