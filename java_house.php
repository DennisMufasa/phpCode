<?php

$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

$options = explode("*","$text");

if ($text == ""){
    $response = "CON Welcome to Java Coffee House!\nWe offer the following:\n1. Coffee\n2. Tea\n3. Snacks";   //first page
}


//Coffee Menu
else if ($text == "1")  //user presses 1
{
    $response = "CON Our Coffee menu includes:\n1. Moca\n2. Decaf \n3. Espresso\n4. Capuccino";
}else if ($options[1] = "1" and count($options) == 2)   //user presses 1*1
{
    $response = "END Your order for a Moca coffee was successfully placed!";
}else if ($options[1] = "2" and count($options) == 2)   //user presses 1*2
{
    $response = "END Your order for a Decaf coffee was successfully placed!";
}else if ($options[1] = "3" and count($options) == 2)   //user presses 1*3
{
    $response = "END Your order for an Espresso coffee was successfully placed!";
}else if ($options[1] = "4" and count($options) == 2)   //user presses 1*4
{
    $response = "END Your order for a Capuccino coffee was successfully placed!";
}


//Tea menu
else if ($text == "2")  //user presses 2
{
    $response = "CON Our Tea menu includes:\n1. Chai Tea\n2. Masala Tea 3. Herbal Tea\n4. Ice Tea";
}else if ($options[0] = "2" and $options[1] = "1")   //user presses 2*1
{
    $response = "END Your order for a Chai Tea was successfully placed!";
}else if ($options[0] = "2" and $options[1] = "2")   //user presses 2*2
{
    $response = "END Your order for a Masala Tea was successfully placed!";
}else if ($options[0] = "2" and $options[1] = "3")   //user presses 2*3
{
    $response = "END Your order for a Herbal Tea was successfully placed!";
}else if ($options[0] = "2" and $options[1] = "4")   //user presses 2*4
{
    $response = "END Your order for an Ice Tea was successfully placed!";
}


//Snacks Menu
else if ($text == "3")  //user presses 3
{
    $result = "CON Our Snack's menu includes:\n1. Omelette\n2. Waffles 3. Toast\n4. Meat";
}else if ($options[0] = "3" and $options[1] = "1")   //user presses 3*1
{
    $response = "END Your order for an Omelette  was successfully placed!";
}else if ($options[0] = "3" and $options[1] = "2")   //user presses 3*2
{
    $response = "END Your order for a plate of waffles was successfully placed!";
}else if ($options[0] = "3" and $options[1] = "3")   //user presses 3*3
{
    $response = "END Your order for Toast was successfully placed!";
}else if ($options[0] = "3" and $options[1] = "4")   //user presses 3*4
{
    $response = "END Your order for Meaty was successfully placed!";
}


header("Content-type:text/plain");
echo $response;