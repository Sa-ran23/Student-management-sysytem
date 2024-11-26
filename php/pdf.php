<?php
class pdf{
    public static $alerts=[];
    public static function connect(){

        $conn=new PDO("mysql:host=localhost;dbname=signup","root","");
        return $conn;
    }
    public static function insert($name,$img,$type){

        $add=pdf::connect()->prepare("INSERT INTO pdf(id,name,img,type)VALUES('',?,?,?)");
        $add->execute(array($name,$img,$type));
        if($add){
            pdf::$alerts[]='Added!';
        }else{
            pdf::$alerts[]='Not Added!';
        }
    }
    public static function select(){

        $list=pdf::connect()->prepare("SELECT * FROM pdf");
        $list->execute();
        $fetch=$list->fetchAll(PDO::FETCH_ASSOC);
        return $fetch;
    }
}

?>