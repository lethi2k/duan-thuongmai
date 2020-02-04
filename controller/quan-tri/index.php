<?php 

if (isset($_GET['action'])) {
	$action=$_GET['action'];
}
else{
	$action='';
}


switch ($action) {


    //DANH MUC
    case 'show-danhmuc':
            $data=[
            "title"=>"b",
            ",title1"=>"a",
            ];
            $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
            var_dump($test);
    require_once "view/giao-dien/index.php";
    break;

    case 'them-danhmuc':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;

    case 'sua-danhmuc':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;

    case 'xoa-danhmuc':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;


    //BÀI VIẾT
    case 'show-baiviet':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;

    case 'them-baiviet':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;

    case 'sua-baiviet':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;

    case 'xoa-baiviet':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;


    //BÌNH LUẬN
    case 'show-binhluan':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;

    case 'them-binhluan':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;

    case 'xoa-binhluan':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;


    //NGƯỜI DÙNG
    case 'show-user':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;

    case 'them-user':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;

    case 'sua-user':
        $data=[
        "title"=>"b",
        ",title1"=>"a",
        ];
        $test=$db->updatedata("bltable",$data,"iddm","thuoctinh");
        var_dump($test);
    require_once "view/giao-dien/index.php";
    break;

    case 'xoa-user':
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