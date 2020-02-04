<?php 

if (isset($_GET['action'])) 
{
	$action=$_GET['action'];
}

else
{
	$action='';
}


switch ($action) {
    case 'index':
            $data=[
            "title"=>"b",
            ",title1"=>"a",
            ];
            $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
            var_dump($test);
    require_once "view/giao-dien/index.php";
    break;

}
 ?>