<?php
$url =$_GET['url'];
$url = rtrim($_GET['url'],'/')   ; // bỏ / cuối chuỗi
//$url = filter_var($url, FILTER_SANITIZE_URL); //bỏ kí tự đặc biệt
$url = explode('/',$url);
unset($url[0]);  
unset($url[1]);

$params = $url ? array_values($url) : [];
//print_r($params);

class AA{

    function A(array $params){
        print_r($params);
    }
}
$a = new AA;
call_user_func_array([$a,'A'],[$params]);