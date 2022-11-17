<?php 
// $age =17;
// if($age>=18)
// {
//     echo "Yes you can vote";
// }elseif($age==17)
// {
//     echo "Please wait one more year";
// }else{
//     echo "You cannot vote";
// }
// $arr1 = array("Car1","Car2","Car3");
// echo "<pre>";
// print_r($arr1);
// echo "</pre>";

// $arr2 = array(
//     'name' => 'asad',
//     'age' => '21',
//     'contact'=> array("03070657703","03232096077"),
//     'status'=> 'single',
// );
// $arr2['test'] = "testing";
$x = array(
    0 =>"Car1",
1 =>"Car2",
2 =>"Car3",
3 =>"Car4",
4 =>"Car5",
5 =>"Car6",
6 =>"Car7",);
foreach($x as $key=>$value)
{
    echo "$key as $value<br/>";
}
//     function p($data)
//     {
//         echo "<pre>";
//         print_r($data);
//         echo"</pre>";
//         echo "This is Function</br>";
//     }
//     p($x);

//     function vote($age)
//     {
//         if($age>=18 && $age<=65)
//         {
//             return "Yes you can vote";
//         }else{
//             return "No you cannot vote";
//         }
//     }
//    echo vote(18);
//    $i=1;
//    $num=2;
//    while($i<=10)
//    {

//     echo $num*$i."<br/>";
//     $i++;
//    }
//    echo "While Loop ends<br/>";
//    for($j=10;$j>=1;$j--)
//    {
//     echo "$j<br/>";
//    }
//    $k=1;
//    echo "for Loop ends<br/>";
//    do{
//     echo" $k</br>";
//     $k++;
//    }while($k<1)
// $y = array(
//     0 =>"Car11",
// 1 =>"Car12",
// 2 =>"Car13",
// 3 =>"Car14",
// 4 =>"Car15",
// 5 =>"Car16",
// 6 =>"Car17",);
// echo "<pre>";
// print_r($x);
// echo "</pre>";
// echo "<pre>";
// print_r($y);
// echo "</pre>";
// $z = array_merge($x,$y);
// echo "<pre>";
// print_r($z);
// echo "</pre>";
// $x =5;
// if(is_array($x))
// {
//     echo "x is an array ";
// }
// else
// {
//     echo "x is not an array";
// }
// echo "<pre>";
// print_r(array_slice($cars,2));
// echo "</pre>";
// echo "<pre>";
// print_r(array_chunk($cars,3));
// echo "</pre>";
// echo "<pre>";
// print_r(array_keys($cars));
// echo "</pre>";
// echo "<pre>";
// print_r(array_count_values($cars));
// echo "</pre>";
// $k=1;
// $sum=0;
// while($k<10)
// {
//     $sum+=$k;
//     if($k==5)
//     {break;
//         }
//     echo "$k<br/>";
//     $k++;
// }
// echo "$sum<br/>";
// for($c=0;$c<=50;$c++)
// {
//     if($c%2==0)
//     {
//         continue;
//     }
//     echo "$c<br/>";
// }
$age = 25;
switch($age)
{
    case($age>=18 && $age<=65):
        echo "Yes you can vote<br/>";
       break;
        
    case($age>=65):
        echo "No!You are too older to  vote<br/>";
        break;
        
    case(18-$age==1 ):
        echo "Please Wait one more Year<br/>";
        break;
    default:
        echo "You cannot vote<br/>";
        break;
}
//recursion//
function countNumber($start)
{
   
    if($start<=10)
    {
        echo "$start<br/>";
        $start++;
        countNumber($start);
    }
    else{
        return;
    }
}
countNumber(1);

?>