<?php  

//echo "How are you";
//
$name = "Denial";
echo $name;
echo "<br>";

var_dump($name);
echo "<br>";

$age = 26;
var_dump($age);
echo "<br>";

 $age = 26.05;
 var_dump($age);
 echo "<br>";

$usTrue = true;
var_dump($usTrue);
echo "<br>";


$name = "denial";
$age = 22;
$hobby = "Football";

//echo "my name is $name";
//echo "my age is $age";

//echo "my name is strtoupper$name"; false
printf("My name is %s", strtoupper($name));
echo "<br>";
printf("My name is %s . My age is %d . I like play %s",  strtoupper($name),$age,strtoupper($hobby));
echo "<br>";
printf("My age is %f", strtoupper($age));
echo "<br>";
printf("I like play %s", strtolower($hobby));
echo "<br>";


//OPERATOR
$num1 = 11;
$num2 = 20;
$num3 = 30;
$num4 = 2;

//echo $num1+$num2;
//echo $num2-$num1;
echo $num3+$num2-$num2;
echo "<br>";
echo $num1-$num2+($num4*$num1);
echo "<br>";
echo $num1 % $num4;
echo "<br>";
echo $num4**4;
echo "<br>";


//increment and decrement
$num1 = $num1+9;
$num4 = $num2-10;
++$num1;
$num1--;
echo $num4;
echo "<br>";
echo $num1;
echo "<br>";


//Result system
$ban = 60;
$eng =65;
$math = 90;

//echo $ban+$eng+$math;

function result(){

    $ban = 60;
    $eng =65;
    $math = 90;

      echo "Your result is " . $ban+$eng+$math;
}
      result();

echo "<br>";

function TotalNumber($ban, $eng, $math, $name = "Rofik"){
    $ban = $ban;
    $eng = $eng;
    $math = $math;

    $name = $name;
    echo $name . " your total_number is " .  $ban+$eng+$math;
}
    TotalNumber(50,60,90,"Rohim");
    //getresult(85,80,70);
    echo "<br>";



    function billsplite($totalCost, $man = 1, $Amount = 1000){

        
    $TotalCost = $totalCost;
    $man = $man;
    $Amount = $Amount;

    $user = "Per person";
    echo $user. " bill is $" . $TotalCost/$man;
    echo "<br>";
    echo "You have reserve $" . $Amount - $TotalCost;
   
    }
  
    billsplite(1000,5,10000);
    //billsplite(500); 
    echo "<br>";


    function bill($totalCost, $Amount = 1000, $man = 1){

        
        $TotalCost = $totalCost;
        $man = $man;
        $Amount = $Amount;
    
       if($man==1){
        $user = "Your";
        echo $user. " bill is $" . $TotalCost/$man;
        echo "<br>";
        echo "You have reserve $" . $Amount - $TotalCost;
       }else{
        $user = "Per person";
        echo $user. " bill is $" . $TotalCost/$man;
        echo "<br>";
        echo "You have reserve $" . $Amount - $TotalCost;
       }
       
        }
      
        bill(6000,10000);
        //billsplite(1000,5,10000);
        echo "<br>";



    function checkPassword($password){

    //$password = $password
    if($password%2 == 0){
        echo "Your are login ";
    }else{
        echo "Incorrect password";
    }

    }

    checkPassword(21);


?>