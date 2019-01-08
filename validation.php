<?php
/**
 * Created by PhpStorm.
 * User: jsas2
 * Date: 1/7/2019
 * Time: 5:11 PM
 */
$validFlavors= ["grasshopper","maple","carrot"];
$isValid= true;
//check if name exists
if (empty($_GET['name']))
{
    echo 'Please provide a name';
    $isValid= false;
}
else
{
    $name= $_GET['name'];
}

//check if flavor exists
if (empty($_GET['flavors']))
{
    echo 'Please provide a flavor';
    $isValid= false;
}
else
    {
    $selectedFlavors = $_GET['flavors'];
    foreach ($selectedFlavors as $selected)
    {
        if (!in_array($selected, $validFlavors))
        {
            $isValid = false;
            echo 'Not a valid Flavor';
        }
    }
}