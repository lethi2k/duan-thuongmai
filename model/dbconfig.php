<?php 
class database {

    private $conn= null;


    //CONNECT DATABASE
    function connect(){
        try{
            $this->conn= new PDO("mysql:host=localhost;dbname=duan-webtintuc;charset=utf8","root",""); 
        }
        catch (PDOException $e){
            echo 'Lỗi';
        }
        return $this->conn;
    }

    
    //SHOW DỮ LIỆU
    function show($table){
        $sql="SELECT * FROM $table";
        $resurt=$this->conn->query($sql);
        if(!resurt) {
			$data=0;
		}
		return $data;
    }


    //THÊM DỮ LIỆU
    function insertdata($table,$data){
        $sql= "insert into $table values('null";
        foreach ($data as $key => $value) {
            $sql=$sql."','".$value;
        }
        $sql=$sql."')";
        return $sql; 
    }


    //SỬA DỮ LIỆU
    function updatedata($table,$data,$iddm,$thuoctinh){
		$sql= "update $table set ";
		foreach ($data as $key => $value) {
			$sql=$sql.$key."=";
			$sql=$sql."'".$value."'";

		}
		$sql=$sql." where $thuoctinh='$iddm'";
		return $sql; 
	}


    //XÓA DỮ LIỆU
    function delete($iddm,$table,$thuoctinh){
		$sql="DELETE FROM $table WHERE $thuoctinh='$iddm'";
		return $sql; 
    }


    //PHÂN TRANG
    function phantrang(){

    }
    
}
?>