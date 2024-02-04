<?php

$firstNumber = $_POST['no_one'];
$secondNumber = $_POST['no_two'];
$operator = $_POST['options'];


if($operator == '+'){
    echo $firstNumber + $secondNumber;
}else if($operator == '-'){
    echo $firstNumber-$secondNumber;
}else{
    echo $firstNumber*$secondNumber;
}
?>
