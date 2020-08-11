<?php

class Exam2_1{

    public $size;

    function set_size($size){
        $this->size = $size;
    }

    function get_size(){
        return $this->size;
    }

    function loop1(){
        print("ข้อ 1.1 \n");
        $size = $this->get_size();
        for($i=$size; $i>0; $i--){
            for($j=0; $j<=$size; $j++){
                if($j<$i){
                    print(" ");
                }else{
                    print("0");
                }
            }print("\n");
        }print("\n");
    }

    function loop2(){
        print("ข้อ 1.1 \n");
        $size = $this->get_size();
        for($i=$size; $i>0; $i--){
            for($j=0; $j<=$size; $j++){
                if($j<$i){
                    print(" ");
                }else{
                    print("0");
                }
            }
            for($j=($size-1); $j>0; $j--){
                if($j<$i){
                    print(" ");
                }else{
                    print("0");
                }
            }print("\n");
        }print("\n");
    }
}

$obj = new Exam2_1();
print("1. (ทดสอบ Loop) จงเขียนโปรแกรมให้ แสดงดังภาพต่อไปนี้ (ใช้ภาษา PHP และวงกลมคือตัวอักษร O )\n");
$obj->set_size(5);
$obj->loop1();
$obj->loop2();
