<?php

$json = array();
$json['message'] = $message;
$json['product'] = array();
$json['productCommentList'] = array();

//var_dump($json['product']->product_id);

if($message === null)
{
	$json['product']['id'] = $product->id;
	$json['product']['product_id'] = $product->product_id;
	$json['product']['product_name'] = $product->product_name;
	$json['product']['product_introduce'] = $product->product_introduce;
	$json['product']['product_mark'] = $product->product_mark;
	$json['product']['product_create_time'] = $product->product_create_time;
	foreach($product->product_images as $key => $image)
	{
		$json['product']['product_images'][$key]['name'] = $image;
	}
	
	foreach($productCommentList as $key => $productComment)
	{
		$json['productCommentList'][$key]['id'] = $productComment['id'];
		$json['productCommentList'][$key]['product_id'] = $productComment['product_id'];
		$json['productCommentList'][$key]['text'] = $productComment['text'];
		$json['productCommentList'][$key]['create_time'] = $productComment['create_time'];
		$json['productCommentList'][$key]['amazing_level'] = $productComment['amazing_level'];
	}
}

$json = JSON($json);

responseJSON($json);

?>