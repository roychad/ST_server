<?php

/*************************************************************
*
*  ʹ���ض�function������������Ԫ��������
*  @param  string  &$array     Ҫ������ַ���
*  @param  string  $function   Ҫִ�еĺ���
*  @return boolean $apply_to_keys_also     �Ƿ�ҲӦ�õ�key��
*  @access public
*
*************************************************************/
 
function arrayRecursive(&$array, $function, $apply_to_keys_also = false)
{
    static $recursive_counter = 0;
    if ($recursive_counter > 1000) {
        die('possible deep recursion attack');
    }
    foreach ($array as $key => $value) 
	{
        if (is_array($value)) 
		{
            arrayRecursive($array[$key], $function, $apply_to_keys_also);
        }
		else 
		{
            $array[$key] = $function($value);
        }
  
        if ($apply_to_keys_also && is_string($key))
		{
            $new_key = $function($key);
            if ($new_key != $key) 
			{
                $array[$new_key] = $array[$key];
                unset($array[$key]);
            }
        }
    }
    $recursive_counter--;
}

//JSON use Chinese
function JSON($array) 
{
    arrayRecursive($array, 'urlencode', true);
    $json = json_encode($array);
    return urldecode($json);
}

//Response JSON
function responseJSON($JSON)
{
	header('Content-type: application/json');
	print_r($JSON);
}

?>