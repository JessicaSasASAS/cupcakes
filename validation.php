<?php
/**
 * User:Jessica Sas
 * Date: 1/7/2019
 * validation.php
 * This form validates my cupckae.php form and displays a summary of order.
 */

$validFlavors= ["grasshopper","maple","carrot"];
$isValid= true;
define("COST", 3.50);

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
        //check for form spoofing
        if (!in_array($selected, $validFlavors))
        {
            $isValid = false;
            echo 'Not a valid flavor';
        }
        else
        {
            $isChecked= "checked";
        }
    }
}

if($isValid)
{
    //print summary
    echo "<p>Thank you, $name, for your order!</p>";
    echo "<p>Order Summary:</p>";
    echo '<ul><li>';
    echo implode("</li><li>", $selectedFlavors);
    echo '</li></ul>';
    echo 'Order Total: $'. sizeOf($selectedFlavors)* COST;
    exit;
}