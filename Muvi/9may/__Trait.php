<?php

trait pkr{
    function show(){
        echo "it is not a class, it is a trait";
    }
}
class Demo{
    use pkr;
}
$obj=new Demo();



?>