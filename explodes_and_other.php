<?php
 function explodess()
{
    $str ="A,B,C,D,E,F";
echo $str;
$arr = explode(',' ,$str,3);
echo "<pre>";
print_r($arr);
}


// explodess();
 function strCases()
{
$str ="hey!Hello this is Asad";
echo "$str <br/>";
echo strtolower($str)."<br/>";
echo strtoupper($str)."<br/>";
echo lcfirst($str)."<br/>";
echo ucfirst($str)."<br/>";
echo ucwords($str)."<br/>";
echo str_replace('Hello','',$str)."<br/>";
echo strrev($str)."<br/>";
echo substr($str,4,5)."<br/>";
echo strlen($str)."<br/>";
echo str_repeat("$str<br/>",4)."<br/>";
echo rand(100,5000);

}
// strCases();
function floor_ceil()
{
    $a =5/2;
    echo "$a original <br/>";
    echo ceil($a)."ceil<br/>";
    echo floor($a)."Floor<br/>";

}
// floor_ceil();
function power_sqrt()
{
    echo pow(4,4)."<br/>";
    echo sqrt(100)."<br/>";
}
// power_sqrt();



?>