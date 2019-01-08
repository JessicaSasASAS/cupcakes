<?php
//turn on error reporting
ini_set ('display_errors', 1);
error_reporting(E_ALL);
//cupcake array
$cupcakes= ["grasshopper"=> "The Grasshopper","maple"=> "Whiskey Maple Bacon", "carrot"=> "Carrot Walnut"];
$name="";
$isChecked="";

//validate input
if (!empty($_GET))
{
    require('validation.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>
<h1>Cupcakes!</h1>
<form method="get" action="">
    <input type="text" name="name" value=<?php echo"'$name'"?>>
    <fieldset>
        <legend>Flavors:</legend>
        <?php
        foreach($cupcakes as $flavor => $flavor_dets)
        {
            echo "<input type ='checkbox' name ='flavors[]' value = '$flavor' $isChecked >$flavor_dets";
            echo '<br>';
        }
        ?>
    </fieldset>
    <input type="submit" id="submit" value="Submit Order">
</form>

</body>
</html>